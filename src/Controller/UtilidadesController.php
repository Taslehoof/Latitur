<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

//enviar emial
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

//http client
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Form\CategoriaApiType;

//Filesystem
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

//pdf
use Dompdf\Dompdf;

class UtilidadesController extends AbstractController
{

    public function __construct(
        private HttpClientInterface $client,
    ){
    }

    #[Route('/utilidades', name: 'utilidades_inicio')]
    public function index(): Response {

        return $this->render('utilidades/index.html.twig');

    }
    
    #[Route('/utilidades/enviar-email', name: 'utilidades_email')]
    public function enviar_email(MailerInterface $mailer): Response {
        
        $email= (new Email())
                ->from(new Address('mailtrap@demomailtrap.com','Juan Perez'))
                ->to('seracon@gmail.com')
                ->subject('Mail de prueba')
                //->text('Texto del mail')
                ->html('<p>Contenido mail <strong>con Negritas</strong></p>');
        try{
            $mailer->send($email); 
        } catch (TransportExceptionInterface $e) {
            die($e);
        }
        return $this->render('utilidades/enviar_email.html.twig');
    }

    #[Route('/utilidades/api-rest', name: 'utilidades_api_rest')]
    public function api_rest(): Response {

        $response = $this->client->request(
            'GET', 'https://www.api.tamila.cl/api/categorias',
            [
                'headers'=>
                    [
                        'Autorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTcxMDI4OTA4NCwiZXhwIjoxNzEyODgxMDg0fQ.IGMOiAnVNUWnDEZUuMNovjQhUW5HIVJuzQBZ8nC9OvM'
                    ]
            ]
        );

        $statusCode = $response->getStatusCode();

        return $this->render('utilidades/api_rest.html.twig', compact('response'));

    }

    #[Route('/utilidades/api-rest/crear', name: 'utilidades_api_rest_crear')]
    public function api_rest_crear(Request $request): Response {
        
        $form = $this->createForm(CategoriaApiType::class, null);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $form->getData();
                            
                $response = $this->client->request(
                    'POST', 'https://www.api.tamila.cl/api/categorias',
                    [
                        'json'=>['nombre'=>$campos['nombre']],
                        'headers'=>
                        [
                            'Autorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTcxMDI4OTA4NCwiZXhwIjoxNzEyODgxMDg0fQ.IGMOiAnVNUWnDEZUuMNovjQhUW5HIVJuzQBZ8nC9OvM'
                        ]
                    ]
                );
                $this->addFlash('css','success');
                $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                return $this->redirectToRoute('utilidades_api_rest_crear');
            } else {
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('utilidades_api_rest_crear');
            }
        
        }

        return $this->render('utilidades/api_rest_add.html.twig', compact('form'));

    }

    #[Route('/utilidades/api-rest/editar/{id}', name: 'utilidades_api_rest_editar')]
    public function api_rest_editar(Request $request, int $id): Response {
        
        $form = $this->createForm(CategoriaApiType::class, null);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $form->getData();
                            
                $response = $this->client->request(
                    'PUT', 'https://www.api.tamila.cl/api/categorias'.$id,
                    [
                        'json'=>['nombre'=>$campos['nombre']],
                        'headers'=>
                        [
                            'Autorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTcxMDI4OTA4NCwiZXhwIjoxNzEyODgxMDg0fQ.IGMOiAnVNUWnDEZUuMNovjQhUW5HIVJuzQBZ8nC9OvM'
                        ]
                    ]
                );
                $this->addFlash('css','success');
                $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                return $this->redirectToRoute('utilidades_api_rest_editar', ['id'=>$id]);
            } else {
                $this->addFlash('css','warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('utilidades_api_rest_editar');
            }
        
        }

        return $this->render('utilidades/api_rest_editar.html.twig', compact('form', 'datos'));
    }

    #[Route('/utilidades/api-rest/delete/{id}', name: 'utilidades_api_rest_delete')]
    public function api_rest_delete(Request $request, int $id): Response {
        $this->client->request(
            'DELETE', 'https://www.api.tamila.cl/api/categorias'.$id,
            [
                'headers'=> [
                    'Autorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MzYsImlhdCI6MTcxMDI4OTA4NCwiZXhwIjoxNzEyODgxMDg0fQ.IGMOiAnVNUWnDEZUuMNovjQhUW5HIVJuzQBZ8nC9OvM'
                ]
            ]);
            $this->addFlash('css','success');
            $this->addFlash('mensaje', 'Se creo el registro exitosamente');
        return $this->render('utilidades/api_rest_editar.html.twig', compact('form', 'datos'));
    }

    #[Route('/utilidades/filesystem', name: 'utilidades_filesystem')]
    public function filesystem(): Response {
        
        $filesystem = new Filesystem();
        $ejemplo_mkdir = "/var/www/html/latitur/midirectorio";
        if(!$filesystem->exists($ejemplo_mkdir)){
        
            $filesystem->mkdir($ejemplo_mkdir,0777);
        } else {
            $filesystem->copy('/var/www/html/latitur/8788.jpeg',$ejemplo_mkdir."/8788.jpeg"); 
            $filesystem->rename($ejemplo_mkdir."/8788.jpeg",$ejemplo_mkdir."/8788_modificado.jpeg"); 
            $filesystem->remove([$ejemplo_mkdir."/8788_modificado.jpeg"]); 
        }

        
        return $this->render('utilidades/filesystem.html.twig');

    }

    #[Route('/utilidades/pdf', name: 'utilidades_pdf')]
    public function pdf(): Response {

        return $this->render('utilidades/pdf.html.twig');

    }

    #[Route('/utilidades/pdf/generar', name: 'utilidades_pdf_generar')]
    public function pdf_generar(): Response {
    
       $data = [
            'imageSrc'=>$this->imageToBase64($this->getParameter('kernel.project_dir').'/public/Imagenes/yoda.png'),
            'nombre'=>'Sergio Conti',
            'pais'=>'Argentina',
            'telefono'=>'+54 9 2994233378',
            'correo'=>'seracon@gmail.com'
        ]; 
        $html = $this->renderView('utilidades/pdf_generar.html.twig',$data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response(
            $dompdf->stream('resume', ['Attachment'=>false]),
            Response::HTTP_OK,
            ['Content-Type'=>'application/pdf'] 
        );

    }

    private function imageToBase64($path){

        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/'.$type. ';base64' . base64_encode($data);
        return $base64;

    }
    
    #[Route('/utilidades/excel', name: 'utilidades_excel')]
    public function excel(): Response {

        return $this->render('utilidades/excel.html.twig');

    }
    
    #[Route('/utilidades/excel/generar', name: 'utilidades_excel_generar')]
    public function excel_generar(): Response {

    }
    
}
