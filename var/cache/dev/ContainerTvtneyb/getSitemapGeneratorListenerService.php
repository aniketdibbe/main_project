<?php

namespace ContainerTvtneyb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSitemapGeneratorListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Sitemap\EventListener\SitemapGeneratorListener' shared autowired service.
     *
     * @return \Pimcore\Sitemap\EventListener\SitemapGeneratorListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/EventListener/SitemapGeneratorListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DependencyInjection/ServiceCollection.php';

        return $container->privates['Pimcore\\Sitemap\\EventListener\\SitemapGeneratorListener'] = new \Pimcore\Sitemap\EventListener\SitemapGeneratorListener(new \Pimcore\DependencyInjection\ServiceCollection(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pimcore_documents' => ['privates', 'Pimcore\\Sitemap\\Document\\DocumentTreeGenerator', 'getDocumentTreeGeneratorService', true],
        ], [
            'pimcore_documents' => '?',
        ]), [0 => 'pimcore_documents']));
    }
}
