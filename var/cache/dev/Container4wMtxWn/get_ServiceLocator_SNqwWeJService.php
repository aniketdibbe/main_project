<?php

namespace Container4wMtxWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SNqwWeJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SNqwWeJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SNqwWeJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager', 'getManager2Service', true],
        ], [
            'manager' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager',
        ]);
    }
}
