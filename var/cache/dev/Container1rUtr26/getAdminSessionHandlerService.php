<?php

namespace Container1rUtr26;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminSessionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Session/Handler/AdminSessionHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Session/Handler/AdminSessionHandler.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler'] = $instance = new \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler(($container->services['Pimcore\\Http\\RequestHelper'] ?? $container->getRequestHelperService()));

        $a = ($container->services['monolog.logger.pimcore_admin.session'] ?? $container->load('getMonolog_Logger_PimcoreAdmin_SessionService'));

        $instance->setLogger($a);
        $instance->setLogger($a);
        $instance->setPimcoreContextResolver(($container->services['Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver'] ?? $container->getPimcoreContextResolverService()));

        return $instance;
    }
}
