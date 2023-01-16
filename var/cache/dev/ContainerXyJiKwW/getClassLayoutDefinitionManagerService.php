<?php

namespace ContainerXyJiKwW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassLayoutDefinitionManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Model\DataObject\ClassDefinition\ClassLayoutDefinitionManager' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\ClassLayoutDefinitionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/ClassLayoutDefinitionManager.php';

        return $container->services['Pimcore\\Model\\DataObject\\ClassDefinition\\ClassLayoutDefinitionManager'] = new \Pimcore\Model\DataObject\ClassDefinition\ClassLayoutDefinitionManager();
    }
}
