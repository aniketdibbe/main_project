<?php

namespace Container64qWnUv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\BlockDataMarshaller\Date' shared autowired service.
     *
     * @return \Pimcore\DataObject\BlockDataMarshaller\Date
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/BlockDataMarshaller/Date.php';

        return $container->services['Pimcore\\DataObject\\BlockDataMarshaller\\Date'] = new \Pimcore\DataObject\BlockDataMarshaller\Date();
    }
}
