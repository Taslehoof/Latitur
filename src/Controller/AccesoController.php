<?php

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
//Con esta Libreria hago uso del Hash para la creacion de las contraseñas
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
// Libreria para poder hacer que el usuario se loogee
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserFormType;
use App\Form\LoginType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RequestStack; //composer require symfony / http-foundation | https://symfony.com/doc/current/session.html#session-idle-time-keep-alive

class AccesoController extends AbstractController
{
    
    private $em;
    public function __construct(EntityManagerInterface $em, private RequestStack $requestStack){
        $this->em=$em;
    }
    
    #[Route('/acceso/login', name: 'acceso_login')]
    public function login(Request $request, ValidatorInterface $validator, Security $security, UserPasswordHasherInterface $passwordHasher): Response
    {
        $entity = new Usuario();
        $form = $this->createForm(LoginType::class, $entity);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico',$submittedToken)){
                $errors = $validator->validate($entity);
                if (count($errors) > 0){
                    return $this->render('acceso/login.html.twig', compact('form', 'errors'));    
                
                } else {
                    $campos = $form->getData();
                    $usuario =$this->em->getRepository(Usuario::class)->findOneBy(['email'=>$campos->getEmail()]);
                    if(!$usuario){
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', 'Las creedenciales ingresadas no son validas');
                        return $this->redirectToRoute('acceso_login');
                    }
                    if($passwordHasher->isPasswordValid($usuario,$campos->getPassword())) {

                    $security->login($usuario);
                    $session=$this->requestStack->getSession();
                    $session->set('perfil_id','1');
                    $session->set('perfil_nombre','Administrador');
                    $session->set('tienda_id','7267');
                    $session->set('tienda_nombre','tienda de la capital');
                    return $this->redirectToRoute('restringido_inicio');

                    } else {
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', 'Las creedenciales ingresadas no son validas');
                        return $this->redirectToRoute('acceso _login');
                    }
                }
            } else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('acceso _login');
            }
        }
        return $this->render('acceso/login.html.twig',['form' =>$form, 'errors'=>array()]);
    }

/*
    //para usar este metodo descomentar check_path: acceso_login en security.yaml
    #[Route('/acceso/login', name: 'acceso_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $errors = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('acceso/login.html.twig',['last_username' =>$lastUsername, 'error'=>$errors]);
    }
  */  
    #[Route('/acceso/registro', name: 'acceso_registro')]
    public function registro(Request $request, ValidatorInterface $validator, UserPasswordHasherInterface $passwordHasher): Response
    {
        $entity = new Usuario();#p2gHNiENUw
        $form =  $this->createForm(UserFormType::class, $entity);
        $form->handleRequest($request);
        $submittedToken=$request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors)>0){
                    return $this->render('acceso/registro.html.twig',['form'=>$form,'errors'=>$errors]);
                } else {
                    $campos = $form->getData();
                    $existe = $this->em->getRepository(Usuario::class)->findOneBy(['email'=>$campos->getEmail()]);
                    //con esto valido de que el mismo mail no este registrado en mas de una oportunidad
                    if($existe){
                        $this->addFlash('css', 'danger');
                        $this->addFlash('mensaje', 'El E-mail {$campos->getEmail()} ya esta siendo usado por otro usuario');
                        return $this->redirectToRoute('acceso_registro');
                    }

                    //Despues traigo los componente del formulario de la manera tradicional
                    $entity->setNombre($campos->getNombre());
                    $entity->setEmail($campos->getEmail());

                    //crear hash de contraseña $passwordHasher->hashPassword($entity,'123456')
                    $entity->setPassword($passwordHasher->hashPassword($entity, $campos->getPassword()));
                    $entity->setRoles(['ROLE_USER']);

                    $this->em->persist($entity);
                    $this->em->flush();
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                    return $this->redirectToRoute('acceso_registro');
                }
            }else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('acceso_registro');
            }
        }
        return $this->render('acceso/registro.html.twig',['form'=>$form,'errors'=>array()]);
    }
    
    #[Route('/acceso/logout', name: 'acceso_logout')]
    public function logout(): Response {
    
    }

}
