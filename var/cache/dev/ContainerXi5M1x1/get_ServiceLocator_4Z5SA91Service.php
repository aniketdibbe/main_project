<?php

namespace ContainerXi5M1x1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4Z5SA91Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4Z5SA91' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4Z5SA91'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'service' => ['services', 'Pimcore\\Model\\Notification\\Service\\NotificationService', 'getNotificationServiceService', true],
        ], [
            'service' => 'Pimcore\\Model\\Notification\\Service\\NotificationService',
        ]);
    }
}
