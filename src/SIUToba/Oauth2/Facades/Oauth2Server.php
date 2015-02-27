<?php
namespace SIUToba\Oauth2\Facades;

use Illuminate\Support\Facades\Facade;

class Oauth2Server extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        //        return 'SIUToba\Oauth2\Oauth2Server';
        return 'OAuth2\Server';
    }

} 