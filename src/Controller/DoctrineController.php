<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Categoria;
use App\Entity\Producto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Form\CategoriaFormType;

//paginacion
use Knp\Component\Pager\PaginatorInterface;

class DoctrineController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em=$em;
    }
    
    #[Route('/doctrine', name: 'doctrine_inicio')]
    public function index(): Response
    {
        return $this->render('doctrine/index.html.twig');
    }
    
    #[Route('/doctrine/categorias', name: 'doctrine_categorias')]
    //public function categorias(EntityManagerInterface $em): Response
    public function categorias(): Response
    {
        //Aca estoy usando la funcion FindAll para traer los datos
        //$datos = $em->getRepository(Categoria::class)->findAll();

        //De esta manera estoy haciendo lo mismo que findall pero ordenandolos de forma Desc
        $datos = $this->em->getRepository(Categoria::class)->findBy(array(),array('id'=>'desc'));
        return $this->render('doctrine/categorias.html.twig', compact('datos'));
    }
    
    #[Route('/doctrine/categorias/add', name: 'doctrine_categorias_add')]
    public function categorias_add(Request $request, ValidatorInterface $validator, SluggerInterface $slugger): Response
    {
        //Para poder trabajar con la BDD necesito intanciar la Entidad para poder hacer todo atravez de ella
        $entity = new Categoria();
        $form = $this->createForm(CategoriaFormType::class, $entity);

        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){

            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors)>0){
                    return $this->render('doctrine/categorias_add.html.twig',compact('form','errors'));
                }else{
                    
                    $campos = $form->getData();
                    $entity->setNombre($campos->getNombre());
                    $entity->setSlug($slugger->slug(strtolower($campos->getNombre())));
                    
                    //con estas dos lineas son las que se encargan de persistir los datos en la BDD
                    $this->em->persist($entity);
                    $this->em->flush();
                    //uso el mismo mensaje de Flash para poder mostrar de que fue exitoso 
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se creo el registro existosamente');
                    return $this->redirectToRoute('doctrine_categorias_add');
                }
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('doctrine_categorias_add');
            }
        
        }
        
        return $this->render('doctrine/categorias_add.html.twig', ['form'=>$form,'errors'=>array()] );
    }

    #[Route('/doctrine/categorias/editar/{id}', name: 'doctrine_categorias_editar')]
    public function categorias_editar(int $id, Request $request, ValidatorInterface $validator, SluggerInterface $slugger): Response
    {
        //select * from categoria where id=$id;
        $entity = $this->em->getRepository(Categoria::class)->find($id);
        if(!$entity){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }

        $form = $this->createForm(CategoriaFormType::class, $entity);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){

            if($this->isCsrfTokenValid('generico', $submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors)>0){
                    return $this->render('doctrine/categorias_editar.html.twig',compact('form','errors','entity'));
                }else{
                    
                    $campos = $form->getData();
                    $entity->setNombre($campos->getNombre());
                    $entity->setSlug($slugger->slug(strtolower($campos->getNombre())));
                    //$this->em->persist($entity);
                    $this->em->flush();
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se modifico el registro existosamente');
                    return $this->redirectToRoute('doctrine_categorias_editar',['id'=>$entity->getId()]);
                }
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('doctrine_categorias_editar',['id'=>$entity->getId()]);
            }
        
        }
        //asi como paso lo errores tambien tengo que pasar la entidad para poder usarlo en la vista desde el template
        return $this->render('doctrine/categorias_editar.html.twig', ['form'=>$form,'errors'=>array(),'entity'=>$entity] );
    }

    #[Route('/doctrine/categorias/eliminar/{id}', name: 'doctrine_categorias_eliminar')]
    public function categorias_eliminar(int $id, Request $request): Response {
    
        //select * from categoria where id=$id;
        $entity = $this->em->getRepository(Categoria::class)->find($id);
        if(!$entity){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
        
        $this->em->remove($entity);
        $this->em->flush();
        $this->addFlash('css','success');
        $this->addFlash('mensaje', 'Ocurrio un error inesperado');
        return $this->redirectToRoute('doctrine_categorias');

    }

    #[Route('/doctrine/productos', name: 'doctrine_productos')]
    public function productos(): Response {

        $datos = $this->em->getRepository(Producto::class)->findBy(array(),array('id'=>'desc'));
        return $this->render('doctrine/productos.html.twig', compact('datos'));
    }

    // Con esta funcion lo que estoy haciendo es que se paginen los productos
    #[Route('/doctrine/productos/paginacion', name: 'doctrine_productos_paginacion')]
    public function productos_paginacion(Request $request, PaginatorInterface $paginator): Response {
        
        $datos = $this->em->getRepository(Producto::class)->findBy(array(),array('id'=>'desc'));
        //con esto estoy trayendo los datos del Productos y los pagino en una pagina con un maximo de dos objetos
        $pagination = $paginator->paginate($datos, $request->query->getInt('page',1),2);
        $pagination->setParam('parametro','valor');
        $pagination->setUsedRoute('doctrine_productos_paginacion');
        return $this->render('doctrine/productos_paginacion.html.twig', compact('datos','pagination'));
    }

    //con esta funcion lo que hago es que me liste solo los productos por Categoria
    #[Route('/doctrine/productos/categoria/{categoria_id}', name: 'doctrine_productos_categoria')]
    public function productos_categoria(int $categoria_id): Response {

        $categoria = $this->em->getRepository(Categoria::class)->find($categoria_id);
        if(!$categoria){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
    
        $datos = $this->em->getRepository(Producto::class)->findBy(array('categoria'=>$categoria_id),array('id'=>'desc'));
        return $this->render('doctrine/productos_categorias.html.twig', compact('datos','categoria'));
    }

    #[Route('/doctrine/productos/buscador', name: 'doctrine_productos_buscador')]
    public function productos_buscador(): Response {

        //Con esto estoy ejecutando DQL para poder hacer un buscador dentro de Symfony
        $b = $_GET['b'];
        //select * from productos where nombre like '%a%'
        $datos = $this->em->getRepository(Producto::class)
        //esto se realiza mas que nada para busquedas complejas que no puedo resolver con el getRepository
                            ->createQueryBuilder('p')
                            ->andWhere('p.nombre LIKE :search')
                            ->setParameter('search', '%'.$b.'%')
                            ->getQuery()
                            ->getResult();
        return $this->render('doctrine/productos_buscador.html.twig', compact('datos','b'));
    }

    #[Route('/doctrine/productos/where-in', name: 'doctrine_productos_where_in')]
    public function productos_where_in(): Response {

        //select * from productos where categoria_id in (1,2) 
        $datos = $this->em->getRepository(Producto::class)
                            ->createQueryBuilder('p')
                            ->andWhere('p.categoria IN (:search)')
                            ->setParameter('search', array(1,2))
                            ->getQuery()
                            ->getResult();

        return $this->render('doctrine/productos_where_in.html.twig', compact('datos'));
    }
}