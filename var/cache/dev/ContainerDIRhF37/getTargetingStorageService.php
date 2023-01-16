<?php

namespace ContainerDIRhF37;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTargetingStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\DataProvider\TargetingStorage' shared autowired service.
     *
     * @return \Pimcore\Targeting\DataProvider\TargetingStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/TargetingStorage.php';

        return $container->privates['Pimcore\\Targeting\\DataProvider\\TargetingStorage'] = new \Pimcore\Targeting\DataProvider\TargetingStorage(($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService()));
    }
}
