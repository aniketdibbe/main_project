<?php

namespace ContainerHhTQYNY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W3N5DEgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w3N5DEg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w3N5DEg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'gridHelperService' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService', 'getGridHelperServiceService', true],
        ], [
            'eventDispatcher' => '?',
            'gridHelperService' => 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService',
        ]);
    }
}
