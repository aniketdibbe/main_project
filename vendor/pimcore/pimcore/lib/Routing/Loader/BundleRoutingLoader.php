<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Routing\Loader;

use Pimcore\Config\BundleConfigLocator;
use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

/**
 * @internal
 */
class BundleRoutingLoader extends Loader
{
    /**
     * @var BundleConfigLocator
     */
    private $locator;

    /**
     * @param BundleConfigLocator $locator
     */
    public function __construct(BundleConfigLocator $locator)
    {
        $this->locator = $locator;
    }

    /**
     * {@inheritdoc}
     */
    public function load($resource, $type = null): mixed
    {
        $collection = new RouteCollection();
        $files = $this->locator->locate('routing');

        if (empty($files)) {
            return $collection;
        }

        foreach ($files as $file) {
            $routes = $this->import($file);
            $collection->addCollection($routes);
        }

        return $collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($resource, $type = null): bool
    {
        return 'pimcore_bundle' === $type;
    }
}
