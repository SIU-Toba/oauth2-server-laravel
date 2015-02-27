<?php
/**
 * Created by IntelliJ IDEA.
 * User: andres
 * Date: 2/24/15
 * Time: 4:06 PM
 */

namespace SIUToba\Oauth2;


use Illuminate\Support\ServiceProvider;
use OAuth2\Server;
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
        $this->publishes([
            __DIR__.'/../../config/oauth2.php' => config_path('oauth2.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../../database/migrations' => base_path('/database/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../../database/seeds' => base_path('/database/seeds')
        ], 'seeds');

        if(config('oauth2.use_default_routes', false) === true ) {
            include __DIR__ . '/../../routes.php';
        }
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
            $storage = $this->app->make('Oauth2\Server\Storage');

            $server  = new Server($storage);
            $grantTypes = config('oauth2.grant_types', []);

            foreach ($grantTypes as $grantType) {
                $config = isset($grantType['config']) ? $grantType['config'] : [];
                $grant  = new $grantType['class']($storage, $config);
                $server->addGrantType($grant);
            }

            return $server;
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