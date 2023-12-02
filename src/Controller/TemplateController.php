<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Httpkernel\Exception\NotFoundHttpException;

class TemplateController extends AbstractController
{

    #[Route('/template',name:'template_inicio')]
    public function index(): Response
    {
        return $this->render("template/index.html.twig");
    }
    
    #[Route('/template/parametros/{id}/{slug}',name:'template_parametros')]
    public function parametros(int $id,string $slug='algo'): Response
    {
        die("id={$id} | slug={$slug}");
    }
    
    #[Route('/template/excepcion',name:'template_exception')]
    public function excepcion(): Response
    {
       //throw $this->createNotFoundException('Esta URL no esta disponible');
        throw new NotFoundHttpException('Esta URL no esta disponible con el otro');
    }

    #[Route('/template/trabajo',name:'template_trabajo')]
    public function trabajo(): Response
    {
       //interpolacion
       $name='Cartucho';
       $lastName='Rivas';
       $paises=array(
            array("nombre"=>'Argentina', "id"=>1),
            array("nombre"=>'Fancia', "id"=>2),
            array("nombre"=>'Peru', "id"=>3),
            array("nombre"=>'Mexico', "id"=>4),
            array("nombre"=>'Chile', "id"=>5),
       );  
        return $this->render("/template/trabajo.html.twig",compact('name','lastName','paises'));
        //return $this->render("/template/trabajo.html.twig",['nombre'=>'Sergio','apellido'=>'Conti']);
    }
    
    #[Route('/template/layout',name:'template_layout')]
    public function layout(): Response
    {
        return $this->render("template/layout.html.twig");
    }
    
}
