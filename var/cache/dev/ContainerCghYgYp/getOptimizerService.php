<?php

namespace ContainerCghYgYp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOptimizerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Image\Optimizer' shared service.
     *
     * @return \Pimcore\Image\Optimizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/ImageOptimizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Optimizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Optimizer/OptimizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Optimizer/SpatieImageOptimizer.php';

        $container->services['Pimcore\\Image\\Optimizer'] = $instance = new \Pimcore\Image\Optimizer();

        $instance->registerOptimizer(new \Pimcore\Image\Optimizer\SpatieImageOptimizer());

        return $instance;
    }
}
