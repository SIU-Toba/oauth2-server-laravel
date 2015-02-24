<?php
/**
 * Created by IntelliJ IDEA.
 * User: andres
 * Date: 2/24/15
 * Time: 4:06 PM
 */

namespace SIUToba\Oauth2;


use Illuminate\Support\ServiceProvider;

class Oauth2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('SIUToba\Oauth2\Oauth2Server', function ($app) {
//            $config = config('saml2_settings');
//
//            $config['sp']['entityId'] = URL::route('saml_metadata');
//
//            $config['sp']['assertionConsumerService']['url'] = URL::route('saml_acs');
//
//            $config['sp']['singleLogoutService']['url'] = URL::route('saml_sls');
//
//            $auth = new OneLogin_Saml2_Auth($config);

            return new \Aacotroneo\Saml2\Saml2Auth($auth);
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