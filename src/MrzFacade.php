<?php

namespace Savannabits\Mrz;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Savannabits\Mrz\Skeleton\SkeletonClass
 */
class MrzFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mrz';
    }
}
