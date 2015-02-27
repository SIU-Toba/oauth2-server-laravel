<?php
/**
 * Created by IntelliJ IDEA.
 * User: andres
 * Date: 2/24/15
 * Time: 4:11 PM
 */

namespace SIUToba\Oauth2;


use Oauth2\HttpFoundationBridge\Request as BridgedRequest;
use OAuth2\HttpFoundationBridge\Response as BridgedResponse;
use OAuth2\Server;
use Request;

class Oauth2Server
{
    protected $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function handleTokenRequest()
    {
        $bridgedRequest  = BridgedRequest::createFromRequest(Request::instance());
        $bridgedResponse = new BridgedResponse();

        $this->server->handleTokenRequest($bridgedRequest, $bridgedResponse);
    }
} 