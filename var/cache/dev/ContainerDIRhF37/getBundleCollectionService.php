<?php

namespace ContainerDIRhF37;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBundleCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.3MgVtNd.Pimcore\HttpKernel\BundleCollection\BundleCollection' shared service.
     *
     * @return \Pimcore\HttpKernel\BundleCollection\BundleCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.3MgVtNd": it references class "Pimcore\\HttpKernel\\BundleCollection\\BundleCollection" but no such service exists.');
    }
}
