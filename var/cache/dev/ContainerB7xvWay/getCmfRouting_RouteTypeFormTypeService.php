<?php

namespace ContainerB7xvWay;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmfRouting_RouteTypeFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cmf_routing.route_type_form_type' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony-cmf/routing-bundle/src/Form/Type/RouteTypeType.php';

        return $container->privates['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }
}
