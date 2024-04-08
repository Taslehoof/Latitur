<?php

namespace App\Controller;

use Endroid\QrCode\ErrorCorrectionLevel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
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

//excel
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use App\Form\ExcelImportarType;//para hacer el formulario de importacion

//QR
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;


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
        
        $helper = new Sample();
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()
                    ->setCreator('Sergio Conti')
                    ->setLastModifiedBy('Tamila.cl')
                    ->setTitle('Documento generado desde Symfony')
                    ->setSubject('Office 2007 XLSX Test Document')
                    ->setDescription('Excel creado con PHP')
                    ->setKeywords('office 2007 openxml php')
                    ->setCategory('Test result file');

        //generar las hojas y el documento
        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A1','ID')
                    ->setCellValue('B1','Nombre');
        
        //Esto es para agregarle datos de forma dinamica desde una bd o de donde sea
        
        $paises=array(
            array("Nombre"=>"Argentina","id"=>1),
            array("Nombre"=>"Perú","id"=>2),
            array("Nombre"=>"México","id"=>3),
            array("Nombre"=>"España","id"=>4),
            array("Nombre"=>"Venezuela","id"=>5),
            array("Nombre"=>"Brasil","id"=>6)

        );

        $i=2;
        foreach($paises as $pais){
            $spreadsheet->getActiveSheet()
                        ->setCellValue('A'.$i, $pais['id'])
                        ->setCellValue('B'.$i, $pais['Nombre']);
            $i++;

        }
        
        //Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Hoja 1');
        //Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);
        //Redirect output to a client's web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="reporte_'.time().'.xlsx"');
        header('Cache-Control: max-age=0');
        //If you're servin to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        $writer = IOFactory::createWriter($spreadsheet,'Xlsx');
        $writer->save('php://output');
        exit;

    }
    
    #[Route('/utilidades/excel/importar', name: 'utilidades_excel_importar')]
    public function excel_importar(Request $request): Response {
        
        $form = $this->createForm(ExcelImportarType::class, null);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
        
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $archivo = $form->get('archivo')->getData();
                if ($archivo){
                    $newFilename=time().'.'.$archivo->guessExtension();
                    try{
                        $archivo->move(
                            $this->getParameter('excel_directory'),
                            $newFilename
                        );
                    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(getcwd()."/uploads/excel/".$newFilename);
                    //obtenemos todas las filas
                    $spreadsheet = $spreadsheet->getActiveSheet();
                    //se toman las filas y se ponen en un arreglo
                    $data_array = $spreadsheet->toArray();
                    //borrar el achivo del servidor
                    unlink(getcwd()."/uploads/excel".$newFilename);
                    //Opcionalmente carlos datos en una vista para mostrarlos, eventualmente podría guardalos en una BDD
                    return $this->render('utilidades/excel_importar.html.twig', ['form'=>$form,'data_array'=>$data_array, 'largo'=>sizeof($data_array)]);
                    } catch (FileException $e) {
                        throw new \Exception("mensaje", 'Ups ocurrio un error al intentar subri el archivo'); 
                    }
                }

            } else {

            }
        
        }
        
        return $this->render('utilidades/excel_importar.html.twig', ['form'=>$form,'data_array'=>array(), 'largo'=>0]);

    }
    
    #[Route('/utilidades/qr', name: 'utilidades_qr')]
    public function qr(): Response {
        
        $writer = new PngWriter();
        $qrCode = QrCode::create('https://www.sergioconti.com')
                ->setEncoding(new Encoding('UTF-8'))
                ->setSize(120)
                ->setMargin(0)
                ->setForegroundColor(new Color(0,0,0))
                ->setBackgroundColor(new Color(255,255,255));
        $logo = Logo::create('Imagenes/logo.png')
                ->setResizeToWidth(60);
        $label = Label::create('')->setFont(new NotoSans(8));
        $qrCodes = [];
        $qrCodes['img'] = $writer->write($qrCode,$logo)->getDataUri();
        
        $qrCodes['simple']=$writer->write($qrCode,null,$label->setText('Simple'))->getDataUri();
        
        $qrCode->setForegroundColor(new Color(255,0,0));
        $qrCodes['changeColor'] = $writer->write($qrCode,null,$label->setText('Color Rojo'))->getDataUri(); 

        $qrCode->setForegroundColor(new Color(0,0,0))->setBackgroundColor(new Color(255,0,0));
        $qrCodes['changeBgColor'] = $writer->write($qrCode,null,$label->setText('Fondo Rojo'))->getDataUri(); 

        $qrCode->setSize(200)->setForegroundColor(new Color(0,0,0))->setBackgroundColor(new Color(255,255,255));
        $qrCodes['withImage'] = $writer->write($qrCode,null,$label->setText('Logo')->setFont(new NotoSans(20)))->getDataUri(); 

        return $this->render('utilidades/qr.html.twig',$qrCodes);

    }
    
    #[Route('/utilidades/mapa', name: 'utilidades_mapa')]
    public function mapa(): Response {

        return $this->render('utilidades/mapa.html.twig');

    }
}
