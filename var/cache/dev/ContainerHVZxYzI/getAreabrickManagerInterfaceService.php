<?php

namespace ContainerHVZxYzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAreabrickManagerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Extension\Document\Areabrick\AreabrickManagerInterface' shared autowired service.
     *
     * @return \Pimcore\Extension\Document\Areabrick\AreabrickManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AreabrickManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Extension/Document/Areabrick/AreabrickManager.php';

        return $container->services['Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface'] = new \Pimcore\Extension\Document\Areabrick\AreabrickManager(($container->services['Pimcore\\Extension\\Config'] ?? $container->get('Pimcore\\Extension\\Config', 1)), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []));
    }
}
