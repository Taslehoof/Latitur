<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Categoria;
use App\Entity\Producto;
use App\Entity\ProductoFoto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Form\CategoriaFormType;
use App\Form\ProductoFormType;
use App\Form\ProductoFotoType;

//paginacion
use Knp\Component\Pager\PaginatorInterface;
use function PHPUnit\Framework\throwException;

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
        $this->addFlash('mensaje', 'Se elimino el registro exitosamente');
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
        $pagination = $paginator->paginate($datos, $request->query->getInt('page',1));
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

    //Con esta funcion lo que hago es que me muestre los productos que estan en categorias en especifico
    #[Route('/doctrine/productos/where_in', name: 'doctrine_productos_where_in')]
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
    
    //Aca buscamos los Productos que estan en fechas que le seteo en el codigo para poder buscarlas
    #[Route('/doctrine/productos/fecha', name: 'doctrine_productos_fecha')]
    public function productos_fecha(): Response {

        //select * from productos where fecha between fecha1 and fecha2 
        $datos = $this->em->getRepository(Producto::class)
                            ->createQueryBuilder('p')
                            ->andWhere('p.fecha BETWEEN :fecha1 AND :fecha2')
                            ->setParameter('fecha1', '2023-03-17')
                            //aca le estoy diciendo que me traiga todos los productos entre la fecha 1 y la actual
                            ->setParameter('fecha2', date('Y-m-d'))
                            ->getQuery()
                            ->getResult();

        return $this->render('doctrine/productos_fecha.html.twig', compact('datos'));
    }

    #[Route('/doctrine/productos/add', name: 'doctrine_productos_add')]
    public function productos_add(Request $request, ValidatorInterface $validator, SluggerInterface $slugger): Response {

        $entity = new Producto();
        $form = $this->createForm(ProductoFormType::class, $entity);
        $form-> handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico',$submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors) > 0){
                    return $this->render('doctrine/productos_add.html.twig',compact('form','errors'));
                } else {
                    $campos = $form->getData();
                    $entity->setNombre($campos->getNombre());
                    $entity->setSlug($slugger->slug(strtolower($campos->getNombre())));
                    $entity->setPrecio($campos->getPrecio());
                    $entity->setStock($campos->getStock());
                    $entity->setDescripcion($campos->getDescripcion());
                    $entity->setCategoria($campos->getCategoria());
                    $entity->setFecha(new \DateTime());
                    
                    $this->em->persist($entity);
                    $this->em->flush();
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se creo el registro exitosamente');
                    return $this->redirectToRoute('doctrine_productos_add');
                }

            } else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('doctrine_productos_add');
            }

        }

        return $this->render('doctrine/productos_add.html.twig',['form'=>$form, 'errors'=>array()] );
    }
    
    #[Route('/doctrine/productos/editar/{id}', name: 'doctrine_productos_editar')]
    public function productos_editar(int $id,Request $request, ValidatorInterface $validator, SluggerInterface $slugger): Response {

        $entity = $this->em->getRepository(Producto::class)->find($id);
        if(!$entity){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
        $form = $this->createForm(ProductoFormType::class, $entity);
        $form-> handleRequest($request);
        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico',$submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors) > 0){
                    return $this->render('doctrine/productos_editar.html.twig',compact('form','errors','entity'));
                } else {
                    $campos = $form->getData();
                    $entity->setNombre($campos->getNombre());
                    $entity->setSlug($slugger->slug(strtolower($campos->getNombre())));
                    $entity->setPrecio($campos->getPrecio());
                    $entity->setStock($campos->getStock());
                    $entity->setDescripcion($campos->getDescripcion());
                    $entity->setCategoria($campos->getCategoria());
                    //$entity->setFecha(new \DateTime());
                    
                    //$this->em->persist($entity);
                    $this->em->flush();
                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se modifico el registro exitosamente');
                    return $this->redirectToRoute('doctrine_productos_editar',['id'=>$id]);
                }

            } else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('doctrine_productos_editar',['id'=>$id]);
            }

        }

        return $this->render('doctrine/productos_editar.html.twig',['form'=>$form, 'errors'=>array(), 'entity'=>$entity] );
    }
    
    #[Route('/doctrine/productos/eliminar/{id}', name: 'doctrine_productos_eliminar')]
    public function productos_eliminar(int $id, Request $request): Response {
    
        //select * from categoria where id=$id;
        $entity = $this->em->getRepository(Producto::class)->find($id);
        if(!$entity){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
        
        $this->em->remove($entity);
        $this->em->flush();
        $this->addFlash('css','success');
        $this->addFlash('mensaje', 'Se elimino el registro exitosamente');
        return $this->redirectToRoute('doctrine_productos');

    }
    
    //con esta funcion estoy generando la capacidad para que el Doctrine se pueda encargar de las fotos de los productos
    #[Route('/doctrine/productos/fotos/{id}', name: 'doctrine_productos_fotos')]
    public function productos_fotos(int $id, Request $request, ValidatorInterface $validator): Response {
        
        //Aca le estoy diciendo que los traiga del Repo por el ID del producto 
        $datos = $this->em->getRepository(Producto::class)->find($id);
        if(!$datos) {
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
        
        $fotos = $this->em->getRepository(ProductoFoto::class)->findBy(array('producto'=>$id), array('id'=>'desc'));
        $entity = new ProductoFoto();
        $form = $this->createForm(ProductoFotoType::class, $entity);
        $form ->handleRequest($request);
        $submittedToken = $request->request->get('token');

        //Todo esto es para poder hacer la validacion de las imagenes que suba 
        if($form->isSubmitted()){
            if($this->isCsrfTokenValid('generico',$submittedToken)){
                $errors = $validator->validate($entity);
                if(count($errors) > 0){
                    return $this->render('doctrine/productos_fotos.html.twig',['datos'=>$datos, 'fotos'=>$fotos, 'errors'=>$errors, 'form'=>$form]);
                } else {
                    $foto = $form->get('foto')->getData();
                    if($foto){
                       $newFilename=time().'.'.$foto->guessExtension(); 
                        try{
                            $foto->move(
                                $this->getParameter('productos_directory'),$newFilename
                            );

                        } catch (FileException $e){
                                throw new \Exception("mensaje", 'Ups ocurrio un error al intentar subir el archivo');
                        }
                    }                    
                    
                    //Aca seteo la foto a la entidad para poder persistirla en la BDD
                    $entity->setFoto($newFilename);
                    //en este caso tengo que pasar la entidad que pase mas arriba porque si o si la tengo que tener asociada
                    $entity->setProducto($datos);

                    $this->em->persist($entity);
                    $this->em->flush();

                    $this->addFlash('css', 'success');
                    $this->addFlash('mensaje', 'Se modifico el registro exitosamente');
                    return $this->redirectToRoute('doctrine_productos_fotos',['id'=>$id]);
                }

            } else {
                $this->addFlash('css', 'warning');
                $this->addFlash('mensaje', 'Ocurrio un error inesperado');
                return $this->redirectToRoute('doctrine_productos_fotos',['id'=>$id]);
            }

        }

        return $this->render('doctrine/productos_fotos.html.twig',['datos'=>$datos, 'fotos'=>$fotos, 'errors'=>array(), 'form'=>$form]);

    }
    
    #[Route('/doctrine/productos/fotos/eliminar/{id}', name: 'doctrine_productos_fotos_eliminar')]
    public function productos_fotos_eliminar(int $id, Request $request): Response {
        
        $entity = $this->em->getRepository(ProductoFoto::class)->findOneBy(['id'=>$id]); 
        if(!$entity){
            throw $this->createNotFoundException('Esta URL no esta disponible');
        }
        
        //para que nos rediriga al mismo producto en el que estamos
        $producto_id=$entity->getProducto()->getId();
        //Elimina la imagen del servidor
        unlink(getcwd().'/uploads/productos/'.$entity->getFoto());
        //desvinculo la imagen de la entidad una vez ya eliminada de servidor
        $this->em->remove($entity);
        $this->em->flush();

        $this->addFlash('css', 'warning');
        $this->addFlash('mensaje', 'Se elimino el registro exitosamente');
        return $this->redirectToRoute('doctrine_productos_fotos',['id'=>$id]);
    }
}
