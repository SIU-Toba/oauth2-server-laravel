<?php

namespace SIUToba\Oauth2\Http\Controllers;

use Illuminate\Routing\Controller;
use OAuth2\HttpFoundationBridge\Request as BridgedRequest;
use Request;
use Oauth2Server;

class Oauth2Controller extends Controller
{

    function __construct()
    {

    }

    function token()
    {
        $bridgedRequest  = BridgedRequest::createFromRequest(Request::instance());
        return Oauth2Server::handleTokenRequest($bridgedRequest);
    }

}
