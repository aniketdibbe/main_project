<?php

namespace ContainerGWvoD9Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmailController' shared autowired service.
     *
     * @return \App\Controller\EmailController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmailController.php';

        $container->services['App\\Controller\\EmailController'] = $instance = new \App\Controller\EmailController();

        $instance->setContainer(($container->privates['.service_locator.Z3eEsyj'] ?? $container->load('get_ServiceLocator_Z3eEsyjService'))->withContext('App\\Controller\\EmailController', $container));

        return $instance;
    }
}
