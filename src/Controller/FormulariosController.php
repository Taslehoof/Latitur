<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\PersonaEntity;
use App\Entity\PersonaEntityValidacion;
use App\Entity\PersonaEntityUpload;
use App\Form\PersonaEntityType;
use App\Form\PersonaValidationType;
use App\Form\PersonaUploadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class FormulariosController extends AbstractController{

    #[Route('/formularios', name: 'formularios_inicio')]
    public function index(): Response {
        return $this->render('formularios/index.html.twig');
    }

    #[Route('/formularios/simple', name: 'formularios_simple')]
    public function simple(Request $request): Response {

        //Con esto creo y defino 1a1 los parametros de mi formulario para poder tenerlos en el Template
        $form = $this->createFormBuilder(null)
            ->add('nombre', TextType::class,['label'=>'Nombre'])
            ->add('correo', TextType::class,['label'=>'E-Mail'])
            ->add('telefono', TextType::class,['label'=>'Telefono'])
            ->add('save',SubmitType::class)
            ->getForm();

        //Con esto capturo el token y verifico que sea el mismo que genere en el Template
        $submittedToken=$request->request->get('token');

        //Con este metodo estoy capturando los datos del formulario y asu vez hago que los imprima en pantalla
        $form->handleRequest($request);

        //si viene la peticion POST del formulario
        // Con esto estoy verificando que se cumplan las dos condiciones, de que se haya aplicado el formulario y sea valido 
        // el certificado del token
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                //Con este medoto tengo que tener cuidado por que me los captura en forma de Array
                $campos = $form->getData();
                //print_r($campos);

                //con esto capturo los campos del formulario uno por uno para mostrarlos en pantalla
                echo "Nombre: ".$campos['nombre']."| E-mail: ".$campos['correo']."| Telefono: ".$campos['telefono'];
                die();        
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('formularios_simple');
            }
        }
       return $this->render('formularios/simple.html.twig',compact('form'));
    }
    

    #[Route('/formularios/entity', name: 'formularios_entity')]
    public function entity(Request $request): Response {

        //Con esto estoy relacionado la Entidad con el formulario 
        $persona = new Persona();
        //"($persona)" con esta declaracion estoy pasando como parametro del formulario la misma Entidad
        $form = $this->createFormBuilder($persona)
            ->add('nombre', TextType::class,['label'=>'Nombre'])
            ->add('correo', TextType::class,['label'=>'E-Mail'])
            ->add('telefono', TextType::class,['label'=>'Telefono'])
            ->add('save',SubmitType::class)
            ->getForm();

        $submittedToken=$request->request->get('token');

        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $form->getData();
                //aca estoy usando los metodos getter para usar lo de la entidad para hacer uso de los metodos de la misma
               echo "Nombre: ".$campos->getNombre()."| E-mail: ".$campos->getCorreo()."| Telefono: ".$campos->getTelefono();
                die();        
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('formularios_entity');
            }
        }
        return $this->render('formularios/entity.html.twig',compact('form'));
    }

    #[Route('/formularios/type-form', name: 'formularios_type_form')]
    public function type_form(Request $request): Response {

        //Con esto estoy resolviendo de manera muy sencilla el formulario pero la logica del mismo esta en otro lado
        $persona = new PersonaEntity();
        $form = $this->createForm(PersonaEntityType::class,$persona);
        $form->handleRequest($request);
        $submittedToken=$request->request->get('token');

        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $campos = $form->getData();
               echo "Nombre: ".$campos->getNombre()."| E-mail: ".$campos->getCorreo()."| Telefono: ".$campos->getTelefono()."| Pais: ".$campos->getPais();
                die();        
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('formularios_entity');
            }
        }
        return $this->render('formularios/type_form.html.twig', compact('form'));
    }

    #[Route('/formularios/validacion', name: 'formularios_validacion')]
    public function validacion(Request $request, ValidatorInterface $validator): Response {

        $persona = new PersonaEntityValidacion();
        $form =  $this->createForm(PersonaValidationType::class, $persona);
        $form->handleRequest($request);
        $submittedToken=$request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
               //con todo esto estoy validando y pasando lo errores que yo necesito procesar para saber que es lo que paso
                $errors = $validator->validate($persona);
                if(count($errors)>0){
                    //Si hay algun error me va a volver a renderizar el formulario y me va a dar los errores que hay
                    return $this->render('formularios/validacion.html.twig',['form'=>$form,'errors'=>$errors]);
                } else {
                    $campos = $form->getData();
                    echo "Nombre: ".$campos->getNombre()."| E-mail: ".$campos->getCorreo()."| Telefono: ".$campos->getTelefono()."| Pais: ".$campos->getPais();
                    die();        
                }
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('formularios_validacion');
            }
        }
        return $this->render('formularios/validacion.html.twig',['form'=>$form,'errors'=>array()]);
    }
    
    #[Route('/formularios/upload', name: 'formularios_upload')]
    public function upload(Request $request, ValidatorInterface $validator, SluggerInterface $slugger): Response {

        $persona = new PersonaEntityUpload();
        $form =  $this->createForm(PersonaUploadType::class, $persona);
        $form->handleRequest($request);
        $submittedToken=$request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($persona);
                if(count($errors)>0){
                    return $this->render('formularios/upload.html.twig',['form'=>$form,'errors'=>$errors]);
                } else {
                    $foto = $form ->get('foto')->getData();
                    if($foto){
                        //Con esto capturo el nombre original de la foto
                        $originalName=pathinfo($foto->getClientOriginalName(),PATHINFO_FILENAME);
                        //aca estoy renombrando la foto ya que mas de un usuario puede nombrar las fotos de la misma manera
                        $newfilename = time().'.'.$foto->guessExtension();

                        //con Slug es la otra forma que muestran de la documentacion para poder subir archivos al servidor.
                        //$newfilename = $slugger->slug(originalName).'.'.$foto->guessExtension();

                        try{
                            //capturo la excepcion en caso de que error por que la estoy moviendo al directorio que le especifique
                            $foto->move(
                                $this->getParameter('fotos_directory'),
                                $newfilename
                            );
                        } catch(FileException $e){
                            throw new \Exception("mensaje", 'Ups ocurrio un error al intentar subir el archivo');
                        }
                        // con esto le estoy asignando a la entidad la foto para que quede vinculada con la misma
                        $persona->setFoto($newfilename);
                    }
                $campos = $form->getData();
                echo "Nombre: ".$campos->getNombre()."| E-mail: ".$campos->getCorreo()."| Telefono: ".$campos->getTelefono()."| Pais: ".$campos->getPais()."| Foto: ".$campos->getFoto();
                die();        
                }
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('formularios_upload');
            }
        }
        return $this->render('formularios/upload.html.twig',['form'=>$form,'errors'=>array()]);
    }
}
