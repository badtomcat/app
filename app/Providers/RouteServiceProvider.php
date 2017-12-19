<?php

namespace App\Providers;

use Badtomcat\Framework\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->getLogger()->info("router register");
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->getLogger()->info("router booting");
//        $this->app->getLogger()->warn('mapping routers.');
        include dirname(dirname(__DIR__)). DIRECTORY_SEPARATOR
            . "routes" . DIRECTORY_SEPARATOR . "web.php";
    }

}
