<?php

namespace ContainerWoCDQ8A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DoctrineController' shared autowired service.
     *
     * @return \App\Controller\DoctrineController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DoctrineController.php';

        $container->services['App\\Controller\\DoctrineController'] = $instance = new \App\Controller\DoctrineController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\DoctrineController', $container));

        return $instance;
    }
}
