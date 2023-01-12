<?php

namespace ContainerB1NiP9l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdBM97eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kdBM97e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kdBM97e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exportService' => ['privates', 'Pimcore\\Translation\\ExportService\\ExportServiceInterface', 'getExportServiceInterfaceService', true],
            'translationExporter' => ['privates', 'Pimcore\\Translation\\ExportService\\Exporter\\ExporterInterface', 'getExporterInterfaceService', true],
        ], [
            'exportService' => 'Pimcore\\Translation\\ExportService\\ExportServiceInterface',
            'translationExporter' => 'Pimcore\\Translation\\ExportService\\Exporter\\ExporterInterface',
        ]);
    }
}
