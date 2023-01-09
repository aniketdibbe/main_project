<?php

namespace ContainerXJU42Hj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ElQeov4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ElQeov4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ElQeov4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'db' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
        ], [
            'db' => '?',
        ]);
    }
}
