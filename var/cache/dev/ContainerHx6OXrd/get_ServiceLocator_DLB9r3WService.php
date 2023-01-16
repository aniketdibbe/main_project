<?php

namespace ContainerHx6OXrd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DLB9r3WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dLB9r3W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dLB9r3W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.pimcore_admin' => ['privates', 'security.event_dispatcher.pimcore_admin', 'getSecurity_EventDispatcher_PimcoreAdminService', true],
            'security.event_dispatcher.pimcore_admin_webdav' => ['privates', 'security.event_dispatcher.pimcore_admin_webdav', 'getSecurity_EventDispatcher_PimcoreAdminWebdavService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.pimcore_admin' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.pimcore_admin_webdav' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
