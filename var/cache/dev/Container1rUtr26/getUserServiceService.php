<?php

namespace Container1rUtr26;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Model\Notification\Service\UserService' shared autowired service.
     *
     * @return \Pimcore\Model\Notification\Service\UserService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Notification/Service/UserService.php';

        return $container->privates['Pimcore\\Model\\Notification\\Service\\UserService'] = new \Pimcore\Model\Notification\Service\UserService();
    }
}
