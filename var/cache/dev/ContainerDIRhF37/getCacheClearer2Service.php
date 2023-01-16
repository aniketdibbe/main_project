<?php

namespace ContainerDIRhF37;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheClearer2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Cache\Symfony\CacheClearer' shared autowired service.
     *
     * @return \Pimcore\Cache\Symfony\CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Cache/Symfony/CacheClearer.php';

        return $container->services['Pimcore\\Cache\\Symfony\\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer();
    }
}
