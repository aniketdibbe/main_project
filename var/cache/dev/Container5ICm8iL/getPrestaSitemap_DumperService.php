<?php

namespace Container5ICm8iL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestaSitemap_DumperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'presta_sitemap.dumper' shared service.
     *
     * @return \Presta\SitemapBundle\Service\Dumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/Service/UrlContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/Service/AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/Service/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/Service/Dumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['presta_sitemap.dumper'])) {
            return $container->services['presta_sitemap.dumper'];
        }

        $container->services['presta_sitemap.dumper'] = $instance = new \Presta\SitemapBundle\Service\Dumper($a, ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), 'sitemap', 50000, ($container->services['router'] ?? $container->getRouterService()));

        $instance->setDefaults($container->parameters['presta_sitemap.defaults']);

        return $instance;
    }
}
