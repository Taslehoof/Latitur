<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PasarelasController extends AbstractController
{
    
    private $client;
    
    public function __construct(HttpClientInterface $client) {
        $this->client=$client;
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
        #return $this->render('pasarelas/webpay-respuesta.html.twig', compact('$content'));
        return $this->render('pasarelas/webpay_respuesta.html.twig');
    }
}
