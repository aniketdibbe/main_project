<?php

namespace Container4wMtxWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersisterInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Scheb\TwoFactorBundle\Model\PersisterInterface' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Scheb\\TwoFactorBundle\\Model\\PersisterInterface'] = $container->createProxy('DoctrinePersister_a694024', function () use ($container) {
                return \DoctrinePersister_a694024::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersisterFactory.php';

        return (new \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersisterFactory(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL))->getPersister();
    }
}
