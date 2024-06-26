<?php

namespace ContainerDRGNele;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasarelasControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PasarelasController' shared autowired service.
     *
     * @return \App\Controller\PasarelasController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PasarelasController.php';

        $container->services['App\\Controller\\PasarelasController'] = $instance = new \App\Controller\PasarelasController(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PasarelasController', $container));

        return $instance;
    }
}
