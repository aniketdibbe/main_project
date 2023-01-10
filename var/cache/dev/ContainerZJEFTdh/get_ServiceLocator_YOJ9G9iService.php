<?php

namespace ContainerZJEFTdh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YOJ9G9iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yOJ9G9i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yOJ9G9i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'db' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'db' => '?',
            'kernel' => '?',
        ]);
    }
}
