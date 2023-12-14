<?php

namespace ContainerNBxrxkX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zv9reqsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zv9reqs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zv9reqs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AccesoController::login' => ['privates', '.service_locator._qrvEjc', 'get_ServiceLocator_QrvEjcService', true],
            'App\\Controller\\AccesoController::registro' => ['privates', '.service_locator.WbKlmww', 'get_ServiceLocator_WbKlmwwService', true],
            'App\\Controller\\DoctrineController::categorias_add' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController::categorias_editar' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController::productos_add' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController::productos_editar' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController::productos_fotos' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\DoctrineController::productos_paginacion' => ['privates', '.service_locator.ZUwwaRD', 'get_ServiceLocator_ZUwwaRDService', true],
            'App\\Controller\\FormulariosController::upload' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\FormulariosController::validacion' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AccesoController:login' => ['privates', '.service_locator._qrvEjc', 'get_ServiceLocator_QrvEjcService', true],
            'App\\Controller\\AccesoController:registro' => ['privates', '.service_locator.WbKlmww', 'get_ServiceLocator_WbKlmwwService', true],
            'App\\Controller\\DoctrineController:categorias_add' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController:categorias_editar' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController:productos_add' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController:productos_editar' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\DoctrineController:productos_fotos' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\DoctrineController:productos_paginacion' => ['privates', '.service_locator.ZUwwaRD', 'get_ServiceLocator_ZUwwaRDService', true],
            'App\\Controller\\FormulariosController:upload' => ['privates', '.service_locator.7kObEVq', 'get_ServiceLocator_7kObEVqService', true],
            'App\\Controller\\FormulariosController:validacion' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AccesoController::login' => '?',
            'App\\Controller\\AccesoController::registro' => '?',
            'App\\Controller\\DoctrineController::categorias_add' => '?',
            'App\\Controller\\DoctrineController::categorias_editar' => '?',
            'App\\Controller\\DoctrineController::productos_add' => '?',
            'App\\Controller\\DoctrineController::productos_editar' => '?',
            'App\\Controller\\DoctrineController::productos_fotos' => '?',
            'App\\Controller\\DoctrineController::productos_paginacion' => '?',
            'App\\Controller\\FormulariosController::upload' => '?',
            'App\\Controller\\FormulariosController::validacion' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccesoController:login' => '?',
            'App\\Controller\\AccesoController:registro' => '?',
            'App\\Controller\\DoctrineController:categorias_add' => '?',
            'App\\Controller\\DoctrineController:categorias_editar' => '?',
            'App\\Controller\\DoctrineController:productos_add' => '?',
            'App\\Controller\\DoctrineController:productos_editar' => '?',
            'App\\Controller\\DoctrineController:productos_fotos' => '?',
            'App\\Controller\\DoctrineController:productos_paginacion' => '?',
            'App\\Controller\\FormulariosController:upload' => '?',
            'App\\Controller\\FormulariosController:validacion' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
