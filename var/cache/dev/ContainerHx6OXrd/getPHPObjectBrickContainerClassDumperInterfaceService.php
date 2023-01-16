<?php

namespace ContainerHx6OXrd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPHPObjectBrickContainerClassDumperInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\ClassBuilder\PHPObjectBrickContainerClassDumperInterface' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassBuilder\PHPObjectBrickContainerClassDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPObjectBrickContainerClassDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPObjectBrickContainerClassDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ObjectBrickContainerClassBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ObjectBrickContainerClassBuilder.php';

        return $container->services['Pimcore\\DataObject\\ClassBuilder\\PHPObjectBrickContainerClassDumperInterface'] = new \Pimcore\DataObject\ClassBuilder\PHPObjectBrickContainerClassDumper(new \Pimcore\DataObject\ClassBuilder\ObjectBrickContainerClassBuilder());
    }
}
