<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database Connection to use
    |--------------------------------------------------------------------------
    |
    | Set the default database connection to use for the repositories,
    | when set to default, it uses whatever connection you specified in your laravel db config.
    |
    */
    'database' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Routes file
    |--------------------------------------------------------------------------
    | If set to true it will use the provided routes.php file.
    |
    */
    'use_default_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | Supported Grant Types
    |--------------------------------------------------------------------------
    |
    | Your OAuth2 Server can issue an access token based on different grant types
    | you can even provide your own grant type.
    | The config arrays are specific per grant type. Look at grant type doc here: http://bshaffer.github.io/oauth2-server-php-docs/grant-types/

    | Available grant types are:
    |
    | 'grant_types' => [
    |
    |    'authorization_code' => [
    |        'class'   => 'OAuth2\GrantType\AuthorizationCode',
    |        'config'  => []
    |    ],
    |
    |    'password' => [
    |        'class'            => 'OAuth2\GrantType\UserCredentials',
    |        'config'  => []
    |    ],
    |
    |    'client_credentials' => [
    |        'class'                 => 'OAuth2\GrantType\ClientCredentials',
    |        'config'  => []
    |    ],
    |
    |    'refresh_token' => [
    |        'class'                 => 'OAuth2\GrantType\RefreshToken',
    |        'config'  => []
    |    ],
    |
    | ],
    |
    */

    'grant_types' => [

    ],

    /*
     * SACAR?
    |--------------------------------------------------------------------------
    | Output Token Type
    |--------------------------------------------------------------------------
    |
    | This will tell the authorization server the output format for the access token
    | and will tell the resource server how to parse the access token used.
    |
    | Default value is League\OAuth2\Server\TokenType\Bearer
    |
    */
    'token_type' => 'League\OAuth2\Server\TokenType\Bearer',

    /*
    |--------------------------------------------------------------------------
    | Access Token TTL
    |--------------------------------------------------------------------------
    |
    | For how long the issued access token is valid (in seconds)
    | this can be also set on a per grant-type basis
    |
    */
    'access_token_ttl' => 3600,
];
