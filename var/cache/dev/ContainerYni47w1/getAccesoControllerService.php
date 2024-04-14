<?php

namespace ContainerYni47w1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccesoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccesoController' shared autowired service.
     *
     * @return \App\Controller\AccesoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccesoController.php';

        $container->services['App\\Controller\\AccesoController'] = $instance = new \App\Controller\AccesoController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AccesoController', $container));

        return $instance;
    }
}
