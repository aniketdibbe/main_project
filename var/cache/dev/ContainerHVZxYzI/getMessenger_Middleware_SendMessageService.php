<?php

namespace ContainerHVZxYzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Pimcore\\Messenger\\SendNewsletterMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\VideoConvertMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\CleanupThumbnailsMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\SearchBackendMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\SanityCheckMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\AssetUpdateTasksMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\AssetPreviewImageMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\GeneratePagePreviewMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\GenerateWeb2PrintPdfMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\VersionDeleteMessage' => [0 => 'pimcore_core'], 'Pimcore\\Messenger\\OptimizeImageMessage' => [0 => 'pimcore_image_optimize'], 'Pimcore\\Messenger\\MaintenanceTaskMessage' => [0 => 'pimcore_maintenance']], ($container->privates['.service_locator.U4iQVQO'] ?? $container->load('get_ServiceLocator_U4iQVQOService'))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        if ($container->has('monolog.logger.messenger')) {
            $instance->setLogger(($container->services['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
        }

        return $instance;
    }
}
