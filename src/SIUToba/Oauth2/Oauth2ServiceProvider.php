<?php
/**
 * Created by IntelliJ IDEA.
 * User: andres
 * Date: 2/24/15
 * Time: 4:06 PM
 */

namespace SIUToba\Oauth2;


use Illuminate\Support\ServiceProvider;
use OAuth2\GrantType\AuthorizationCode;
use OAuth2\GrantType\ClientCredentials;
use OAuth2\Scope;
use OAuth2\Server;
use OAuth2\Storage\Memory;
use OAuth2\Storage\Pdo;
use DB;

class Oauth2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
//        if(config('saml2_settings.useRoutes', false) == true ){
        include __DIR__.'/../../routes.php';

        $this->publishes([
            __DIR__.'/../../database/migrations' => base_path('/database/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../../database/seeds' => base_path('/database/seeds')
        ], 'seeds');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Oauth2\Server\Storage', function() {
            return new Pdo(DB::connection()->getPdo());
        });

        $this->app->singleton('OAuth2\Server', function () {
//            $config = config('saml2_settings');
//
//            $config['sp']['entityId'] = URL::route('saml_metadata');
//
//            $config['sp']['assertionConsumerService']['url'] = URL::route('saml_acs');
//
//            $config['sp']['singleLogoutService']['url'] = URL::route('saml_sls');
//
//            $auth = new OneLogin_Saml2_Auth($config);
            $storage = $this->app->make('Oauth2\Server\Storage');

            $server  = new Server($storage);
            $server->addGrantType(new ClientCredentials($storage));
            $server->addGrantType(new AuthorizationCode($storage));
//
//            $defaultScope = 'basico';
//            $supportedScopes = array(
//                'basico',
//                'cuenta_bancaria',
//                'mail'
//            );
//            $memory = new Memory(array(
//                'default_scope' => $defaultScope,
//                'supported_scopes' => $supportedScopes
//            ));
//            $scopeUtil = new Scope($memory);

//            $server->setScopeUtil($scopeUtil);
            // SACAR ESTO DE LA CONFIG
//            // Add the "Client Credentials" grant type (it is the simplest of the grant types)
//            $server->addGrantType(new ClientCredentials($storage));
//
//            // Add the "Authorization Code" grant type (this is where the oauth magic happens)
//            $server->addGrantType(new AuthorizationCode($storage));
            return $server;
//            return new Oauth2Server($server);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}