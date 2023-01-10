<?php

namespace ContainerB7xvWay;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Mail\Mailer' shared autowired service.
     *
     * @return \Pimcore\Mail\Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Mail/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Mail/Plugins/RedirectingPlugin.php';

        return $container->services['Pimcore\\Mail\\Mailer'] = new \Pimcore\Mail\Mailer(new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), new \Pimcore\Mail\Plugins\RedirectingPlugin());
    }
}
