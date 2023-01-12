<?php

namespace Container1rUtr26;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebsiteConfigValueResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/ArgumentValueResolver/WebsiteConfigValueResolver.php';

        return $container->privates['debug.Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver(), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
