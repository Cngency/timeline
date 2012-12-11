<?php

namespace Spy\Timeline\Filter\DataHydrator\Locator;

use Spy\Timeline\Model\ComponentInterface;

/**
 * LocatorInterface
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
interface LocatorInterface
{
    /**
     * @param string $model model
     *
     * @return boolean
     */
    public function supports($model);

    /**
     * @param string                    $model      model
     * @param array<ComponentInterface> $components components
     *
     * @return array
     */
    public function locate($model, array $components);
}
