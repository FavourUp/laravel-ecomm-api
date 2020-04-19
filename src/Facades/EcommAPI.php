<?php

namespace FavourUp\EcommAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FavourUp\EcommAPI\EcommAPIManager
 */

class EcommAPI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'favourup.ecommAPI';
    }

}
