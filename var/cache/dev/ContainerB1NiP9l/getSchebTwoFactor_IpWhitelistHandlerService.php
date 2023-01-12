<?php

namespace ContainerB1NiP9l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_IpWhitelistHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.ip_whitelist_handler' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['scheb_two_factor.ip_whitelist_handler'] = $container->createProxy('IpWhitelistHandler_06fe2b0', function () use ($container) {
                return \IpWhitelistHandler_06fe2b0::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/IpWhitelistHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/IpWhitelist/IpWhitelistProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/IpWhitelist/DefaultIpWhitelistProvider.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler(($container->privates['scheb_two_factor.provider_handler'] ?? $container->load('getSchebTwoFactor_ProviderHandlerService')), new \Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\DefaultIpWhitelistProvider([]));
    }
}
