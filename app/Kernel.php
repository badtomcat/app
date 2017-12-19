<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/11
 * Time: 17:45
 */

namespace App;
use App\Bootstrap\BootProviders;
use App\Bootstrap\HandleExceptions;
use App\Bootstrap\LoadConfiguration;
use App\Bootstrap\LoadEnvironmentVariables;
use App\Bootstrap\RegisterProviders;

class Kernel extends \Badtomcat\Framework\Kernel
{
    protected $bootstrappers = [
        LoadEnvironmentVariables::class,
        LoadConfiguration::class,
        HandleExceptions::class,
        RegisterProviders::class,
        BootProviders::class,
    ];

    protected $middlewareGroups = [];

    protected $middlewarePriority = [];

    protected $routeMiddleware = [];
    public function registRoute()
    {
//        include dirname(__DIR__) . DIRECTORY_SEPARATOR
//            . "routes" . DIRECTORY_SEPARATOR . "web.php";
    }
}