<?php

namespace ContainerXi5M1x1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_js_routing.controller' shared service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Controller/Controller.php';

        return $container->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller(($container->services['fos_js_routing.serializer'] ?? $container->load('getFosJsRouting_SerializerService')), ($container->services['fos_js_routing.extractor'] ?? $container->load('getFosJsRouting_ExtractorService')), $container->parameters['fos_js_routing.cache_control'], true);
    }
}
