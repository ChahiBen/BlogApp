<?php

namespace ContainerEQnEVwh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ti0qTZYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ti0qTZY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ti0qTZY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ApiBlogController::getArticles' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ApiBlogController::getOneArticle' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\BlogController::deleteArticle' => ['privates', '.service_locator.2hGigqC', 'get_ServiceLocator_2hGigqCService', true],
            'App\\Controller\\BlogController::form' => ['privates', '.service_locator.rUQgIO5', 'get_ServiceLocator_RUQgIO5Service', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.IfOtLpd', 'get_ServiceLocator_IfOtLpdService', true],
            'App\\Controller\\BlogController::show' => ['privates', '.service_locator.fsg29lo', 'get_ServiceLocator_Fsg29loService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.z0fEc8i', 'get_ServiceLocator_Z0fEc8iService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ApiBlogController:getArticles' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ApiBlogController:getOneArticle' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\BlogController:deleteArticle' => ['privates', '.service_locator.2hGigqC', 'get_ServiceLocator_2hGigqCService', true],
            'App\\Controller\\BlogController:form' => ['privates', '.service_locator.rUQgIO5', 'get_ServiceLocator_RUQgIO5Service', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.IfOtLpd', 'get_ServiceLocator_IfOtLpdService', true],
            'App\\Controller\\BlogController:show' => ['privates', '.service_locator.fsg29lo', 'get_ServiceLocator_Fsg29loService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.z0fEc8i', 'get_ServiceLocator_Z0fEc8iService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ApiBlogController::getArticles' => '?',
            'App\\Controller\\ApiBlogController::getOneArticle' => '?',
            'App\\Controller\\BlogController::deleteArticle' => '?',
            'App\\Controller\\BlogController::form' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::show' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ApiBlogController:getArticles' => '?',
            'App\\Controller\\ApiBlogController:getOneArticle' => '?',
            'App\\Controller\\BlogController:deleteArticle' => '?',
            'App\\Controller\\BlogController:form' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:show' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}