<?php

namespace ContainerZJEFTdh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBreadcrumbsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Navigation\Renderer\Breadcrumbs' shared autowired service.
     *
     * @return \Pimcore\Navigation\Renderer\Breadcrumbs
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/AbstractRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/Breadcrumbs.php';

        $a = ($container->services['pimcore.templating.engine.delegating'] ?? $container->getPimcore_Templating_Engine_DelegatingService());

        if (isset($container->privates['Pimcore\\Navigation\\Renderer\\Breadcrumbs'])) {
            return $container->privates['Pimcore\\Navigation\\Renderer\\Breadcrumbs'];
        }

        return $container->privates['Pimcore\\Navigation\\Renderer\\Breadcrumbs'] = new \Pimcore\Navigation\Renderer\Breadcrumbs($a);
    }
}
