<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register() {
        $this->app['panier'] = $this->app->share(function($app) {
            $storage = $app['session']; // laravel session storage
            $events = $app['events']; // laravel event handler
            $instanceName = 'panier'; // your cart instance name
            $session_key = 'AsASDMCks0ks1'; // your unique session key to hold cart items

            return new Cart(
                    $storage, $events, $instanceName, $session_key
            );
        });
    }

}
