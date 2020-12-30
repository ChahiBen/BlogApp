<?php

namespace ContainerEQnEVwh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2hGigqCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2hGigqC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2hGigqC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.2hGigqC.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.2hGigqC": it references class "App\\Entity\\Article" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'article' => 'App\\Entity\\Article',
            'entityManager' => '?',
        ]);
    }
}
