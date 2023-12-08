<?php

namespace ContainerIJziAoM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductoFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProductoFormType' shared autowired service.
     *
     * @return \App\Form\ProductoFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProductoFormType.php';

        return $container->privates['App\\Form\\ProductoFormType'] = new \App\Form\ProductoFormType();
    }
}
