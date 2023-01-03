<?php

namespace Container5ICm8iL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilteredTableMetadataStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Migrations\FilteredTableMetadataStorage' shared autowired service.
     *
     * @return \Pimcore\Migrations\FilteredTableMetadataStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Migrations/FilteredTableMetadataStorage.php';

        return $container->services['Pimcore\\Migrations\\FilteredTableMetadataStorage'] = new \Pimcore\Migrations\FilteredTableMetadataStorage();
    }
}
