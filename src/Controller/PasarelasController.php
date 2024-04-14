<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\OrdenesPaypal;
use Doctrine\ORM\EntityManagerInterface;

class PasarelasController extends AbstractController
{
    
    private $client;
    private $em; 
    public function __construct(HttpClientInterface $client, EntityManagerInterface $em) {
        $this->client=$client;
        $this->em=$em;
    }

    #[Route('/pasarelas', name: 'pasarelas_inicio')]
    public function index(): Response {
        return $this->render('pasarelas/index.html.twig');
    }
    
    #[Route('/pasarelas/webpay', name: 'pasarelas_webpay')]
    public function webpay(): Response {
        #$response = $this->client->request('POST',$_ENV['WEBPAY_URL'],
#      [
        #    'json'=>[
        #        'buy_order'=> 'ordenCompra12345678',
        #        'session_id'=> 'sesion1234557545',
        #        'amount'=> 10000,
        #        'return_url'=> 'http://localhost:8000/pasarelas/webpay/respuesta'
        #     ],
        #    'headers'=>[
        #        'Content-Type'=>'application/json',
        #        'Tbk-Api-Key-Id'=>$_ENV['WEBPAY_ID'],
        #        'Tbk-Api-Key-Secret'=>$_ENV['WEBPAY_SECRET'] 
        #    ]
        #]);
        #$content = $response->toArray();
        #return $this->render('pasarelas/webpay.html.twig', compact('$content'));
        return $this->render('pasarelas/webpay.html.twig');
    }

    #[Route('/pasarelas/webpay/respuesta', name: 'pasarelas_webpay_respuesta')]
    public function webpay_respuesta(): Response {
        #$response = $this->client->request('PUT',$_ENV['WEBPAY_URL']."/".$_GET['token_ws'],
#      [
        #    'headers'=>[
        #        'Content-Type'=>'application/json',
        #        'Tbk-Api-Key-Id'=>$_ENV['WEBPAY_ID'],
        #        'Tbk-Api-Key-Secret'=>$_ENV['WEBPAY_SECRET'] 
        #    ]
        #]);
        #$content = $response->toArray();
        #$monto=10;
        #return $this->render('pasarelas/webpay-respuesta.html.twig', compact('$content'));
        return $this->render('pasarelas/webpay_respuesta.html.twig');
    }
    #[Route('/pasarelas/paypal', name: 'pasarelas_paypal')]
    public function paypal(): Response {
    
        $monto=10;
        $response_token = $this->client->request('POST',$_ENV['PAYPAL_BASE_URI']."/v1/oauth2/token",
        [
            'body'=>'grant_type=client_credentials',
            'auth_basic'=>[$_ENV['PAYPAL_CLIENT_ID'],$_ENV['PAYPAL_CLIENT_SECRET']]

        ]);
        $token = $response_token->toArray();
        //echo $token['access_token'];exit();
        $entity = new OrdenesPaypal();
        $entity->setToken($token['access_token']);
        $entity->setNombre('');
        $entity->setCorreo('');
        $entity->setOrden('');
        $entity->setIdCaptura('');
        $entity->setMonto($monto);
        $entity->setCountryCode('');
        $entity->setEstado('');
        $entity->setFecha(new \DateTime());
        $entity->setPaypalRequest('');
        $this->em->persist($entity);
        $this->em->flush();
        
        //pedimos la orden de compra
        $response = $this->client->request('POST', $_ENV['PAYPAL_BASE_URI']."/v2/checkout/orders",
        [
            'json' =>[
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        "reference_id"=>"reference_".$entity->getId(),
                        'amount' =>[
                            'currency_code'=>'USD',
                            'value'=>$monto,
                        ]
                    ]
                ],
                'payment_source' =>[
                    'paypal'=>[
                        'experience_context'=>[
                            "payment_method_preference"=>"IMMEDIATE_PAYMENT_REQUIRED",
                            "payment_method_selected"=>"PAYPAL",
                            "brand_name"=>"Tamila",
                            "locale"=>"es-ES",
                            "landing_page"=>"LOGIN",
                            "shipping_preference"=>"SET_PROVIDED_ADDRESS",
                            "user_action"=>"PAY_NOW",
                            "return_url"=>"http://localhost/pasarelas/paypal/respuesta",
                            "cancel_url"=>"http://localhost/pasarelas/paypal/cancelado",
                        ]
                    ]
                ]
            ],

            'headers' => [
                'Content-Type'=>'application/json',
                'Authorization'=>"Bearer ".$token['access_token'],
                'PayPal-Request-Id'=>"order_".$entity->getId()

            ]


        ]);
        #$content = $response->toArray();
        
        //actualizar el registro de orden de compra en la tabla OrdenPaypal
        #$entity->setOrden($content['id']);
        $entity->setPaypalRequest('');
        //$this->em->persist($entity);
        $this->em->flush();

        #return $this->render('pasarelas/paypal.html.twig', ['content'=>$content,'token'=>$token['access_token'], 'entity'=>$entity] );
        return $this->render('pasarelas/paypal.html.twig');
    }

    #[Route('/pasarelas/paypal/respuesta', name: 'pasarelas_respuesta')]
    public function paypal_respuesta(): Response {

        $id = $_GET['toekn'];
        $orden = $this->em->getRepository(OrdenesPaypal::class)->findOneBy(['orden'=>$id]);
        if(!$orden){
            throw $this->createNotFoundException(
                'Esta URL no esta disponible'
            );
        }

        try {
            $response = $this->client->request('POST', $_ENV['PAYPAL_BASE_URI']."/v2/checkout/orders".$orden->getOrden()."/capture",[
                'auth_bearer'=>$orden->getToken(),
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);
            $content = $response->toArray();
            $orden->setNombre($content['payment_source']['paypal']['name']['given_name']." ".$content['payment_source']['paypal']['name']['surname']);
            $orden->setCorreo($content['payment_souce']['name']['surname']);
            $orden->setIdCaptura($content['purchase_units'][0]['payments']['captures'][0]['id']);
            $orden->setCountryCode($content['payment_source']['paypal']['address']['country_code']);
            $orden->setEstado(1);
            $this->em->persist($orden);
            $this->em->flush();
            $estado = 'ok'; 
        } catch(\Throwable $th) {
            $estado = "error";
        } 
        return $this->render('pasarelas/paypal_respuesta.html.twig', ['orden'=>$orden, 'estado'=>$estado, 'id'=>$id]);

    }
    
    #[Route('/pasarelas/paypal/cancelado', name: 'pasarelas_cancelado')]
    public function paypal_cancelado(): Response {

        $id = $_GET['toekn'];
        $orden = $this->em->getRepository(OrdenesPaypal::class)->findOneBy(['orden'=>$id]);
        if(!$orden){
            throw $this->createNotFoundException(
                'Esta URL no esta disponible'
            );
        }

        $orden->setEstado(2);
        $this->em->persist($orden);
        $this->em->flush();
        return $this->render('pasarelas/paypal_cancelado.html.twig',['id'=>$id]);
    }
}
