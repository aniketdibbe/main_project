<?php

namespace Container1rUtr26;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnitConversionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Model\DataObject\QuantityValue\UnitConversionService' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\QuantityValue\UnitConversionService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/QuantityValue/UnitConversionService.php';

        return $container->services['Pimcore\\Model\\DataObject\\QuantityValue\\UnitConversionService'] = new \Pimcore\Model\DataObject\QuantityValue\UnitConversionService($container);
    }
}
