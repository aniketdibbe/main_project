<?php

namespace ContainerB1NiP9l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\Manager' shared autowired service.
     *
     * @return \Pimcore\Workflow\Manager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Manager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/workflow/Registry.php';

        return $container->services['Pimcore\\Workflow\\Manager'] = new \Pimcore\Workflow\Manager(($container->privates['workflow.registry'] ?? ($container->privates['workflow.registry'] = new \Symfony\Component\Workflow\Registry())), ($container->privates['Pimcore\\Workflow\\EventSubscriber\\NotesSubscriber'] ?? $container->load('getNotesSubscriberService')), ($container->services['Pimcore\\Workflow\\ExpressionService'] ?? $container->load('getExpressionServiceService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
