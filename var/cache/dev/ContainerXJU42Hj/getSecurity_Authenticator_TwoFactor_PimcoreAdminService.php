<?php

namespace ContainerXJU42Hj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_TwoFactor_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.two_factor.pimcore_admin' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Authenticator\TwoFactorAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Authenticator/TwoFactorAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->privates['security.firewall_config.two_factor.pimcore_admin'] ?? $container->getSecurity_FirewallConfig_TwoFactor_PimcoreAdminService());
        $b = ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService());

        return $container->privates['security.authenticator.two_factor.pimcore_admin'] = new \Scheb\TwoFactorBundle\Security\Http\Authenticator\TwoFactorAuthenticator($a, ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), new \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, $a, []), new \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationFailureHandler($b, $a), ($container->privates['security.authentication.authentication_required_handler.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authentication_AuthenticationRequiredHandler_TwoFactor_PimcoreAdminService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
