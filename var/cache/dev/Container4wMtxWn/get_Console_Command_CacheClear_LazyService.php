<?php

namespace Container4wMtxWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CacheClear_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.cache_clear.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.cache_clear.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:clear', [], 'Clear the cache', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand {
            return ($container->privates['console.command.cache_clear'] ?? $container->load('getConsole_Command_CacheClearService'));
        });
    }
}
