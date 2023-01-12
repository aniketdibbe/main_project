<?php

namespace ContainerGWvoD9Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGraphvizDumperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\Dumper\GraphvizDumper' shared autowired service.
     *
     * @return \Pimcore\Workflow\Dumper\GraphvizDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/workflow/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Dumper/GraphvizDumper.php';

        return $container->services['Pimcore\\Workflow\\Dumper\\GraphvizDumper'] = new \Pimcore\Workflow\Dumper\GraphvizDumper(($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')));
    }
}
