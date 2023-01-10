<?php

namespace ContainerTvtneyb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreAdmin_Security_UserCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore_admin.security.user_checker' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\UserChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/User/UserChecker.php';

        return $container->services['pimcore_admin.security.user_checker'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserChecker();
    }
}
