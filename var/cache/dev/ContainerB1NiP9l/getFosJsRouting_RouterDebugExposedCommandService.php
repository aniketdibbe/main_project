<?php

namespace ContainerB1NiP9l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_RouterDebugExposedCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_js_routing.router_debug_exposed_command' shared service.
     *
     * @return \FOS\JsRoutingBundle\Command\RouterDebugExposedCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Command/RouterDebugExposedCommand.php';

        $container->privates['fos_js_routing.router_debug_exposed_command'] = $instance = new \FOS\JsRoutingBundle\Command\RouterDebugExposedCommand(($container->services['fos_js_routing.extractor'] ?? $container->load('getFosJsRouting_ExtractorService')), ($container->services['router'] ?? $container->getRouterService()));

        $instance->setName('fos:js-routing:debug');

        return $instance;
    }
}
