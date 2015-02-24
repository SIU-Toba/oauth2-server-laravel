<?php

namespace Aacotroneo\Saml2\Http\Controllers;

use Illuminate\Routing\Controller;
use Config;
use Event;
use Log;
use Redirect;
use Response;
use Session;
use SIUToba\Oauth2\Oauth2Server;


class Oauth2Controller extends Controller
{

    protected $oauth2Server;

    /**
     * @param Oauth2Server $oauth2Server injected.
     */
    function __construct(Oauth2Server $oauth2Server)
    {
        $this->oauth2Server = $oauth2Server;
    }

    function token()
    {

    }

}
