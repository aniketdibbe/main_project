<?php

namespace ContainerB1NiP9l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QFrTj0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QFrTj0_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QFrTj0_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profiler' => ['services', '.container.private.profiler', 'get_Container_Private_ProfilerService', false],
        ], [
            'profiler' => '?',
        ]);
    }
}
