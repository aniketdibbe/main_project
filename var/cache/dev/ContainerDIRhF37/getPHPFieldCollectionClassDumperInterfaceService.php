<?php

namespace ContainerDIRhF37;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPHPFieldCollectionClassDumperInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\ClassBuilder\PHPFieldCollectionClassDumperInterface' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassBuilder\PHPFieldCollectionClassDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPFieldCollectionClassDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPFieldCollectionClassDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldCollectionClassBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldCollectionClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilder.php';

        return $container->services['Pimcore\\DataObject\\ClassBuilder\\PHPFieldCollectionClassDumperInterface'] = new \Pimcore\DataObject\ClassBuilder\PHPFieldCollectionClassDumper(new \Pimcore\DataObject\ClassBuilder\FieldCollectionClassBuilder(($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] ?? ($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] = new \Pimcore\DataObject\ClassBuilder\FieldDefinitionDocBlockBuilder()))));
    }
}
