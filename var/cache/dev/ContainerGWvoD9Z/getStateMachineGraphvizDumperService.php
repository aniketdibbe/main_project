<?php

namespace ContainerGWvoD9Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStateMachineGraphvizDumperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\Dumper\StateMachineGraphvizDumper' shared autowired service.
     *
     * @return \Pimcore\Workflow\Dumper\StateMachineGraphvizDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/workflow/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Dumper/GraphvizDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Dumper/StateMachineGraphvizDumper.php';

        return $container->services['Pimcore\\Workflow\\Dumper\\StateMachineGraphvizDumper'] = new \Pimcore\Workflow\Dumper\StateMachineGraphvizDumper(($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')));
    }
}
