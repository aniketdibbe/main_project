<?php

namespace Container4wMtxWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_CustomReport_Adapter_FactoriesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.custom_report.adapter.factories' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['pimcore.custom_report.adapter.factories'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'analytics' => ['privates', 'pimcore.custom_report.adapter.factory.analytics', 'getPimcore_CustomReport_Adapter_Factory_AnalyticsService', true],
            'sql' => ['privates', 'pimcore.custom_report.adapter.factory.sql', 'getPimcore_CustomReport_Adapter_Factory_SqlService', true],
        ], [
            'analytics' => '?',
            'sql' => '?',
        ]);
    }
}
