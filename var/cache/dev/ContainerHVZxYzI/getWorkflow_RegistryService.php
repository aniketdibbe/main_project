<?php

namespace ContainerHVZxYzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkflow_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'workflow.registry' shared autowired service.
     *
     * @return \Symfony\Component\Workflow\Registry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/workflow/Registry.php';

        return $container->privates['workflow.registry'] = new \Symfony\Component\Workflow\Registry();
    }
}
