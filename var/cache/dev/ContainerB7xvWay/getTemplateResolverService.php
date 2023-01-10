<?php

namespace ContainerB7xvWay;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemplateResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Http\Request\Resolver\TemplateResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\TemplateResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Http/Request/Resolver/TemplateResolver.php';

        return $container->services['Pimcore\\Http\\Request\\Resolver\\TemplateResolver'] = new \Pimcore\Http\Request\Resolver\TemplateResolver(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
