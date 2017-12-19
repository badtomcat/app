<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/11
 * Time: 17:08
 */
namespace App\Bootstrap;
use App\Application;

class RegisterProviders
{
    public function bootstrap(Application $app)
    {
        $app->registerConfiguredProviders();
    }
}