<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/11
 * Time: 17:50
 */

namespace App;
use App\Providers\RouteServiceProvider;
use Badtomcat\Container;
use Badtomcat\Http\Request;
use Badtomcat\Routing\RequestContext;
use Badtomcat\Routing\Router;
use Badtomcat\View\Badtomcat;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class Application extends \Badtomcat\Framework\Application
{
    /**
     * 这里包括数组和其它scalar
     * @var array
     */
    protected $scalars = array();
    /**
     * 类别名
     * @var array
     */
    protected $alias = [
        'app'                  => [Application::class, Container::class],
//        'config'               => [\Illuminate\Config\Repository::class, \Illuminate\Contracts\Config\Repository::class],
        'log'                  => [Logger::class, LoggerInterface::class],
        'request'              => [Request::class],
        'context'              => [RequestContext::class],
        'router'               => [Router::class],
//        'url'                  => [\Illuminate\Routing\UrlGenerator::class, \Illuminate\Contracts\Routing\UrlGenerator::class],
//        'validator'            => [\Illuminate\Validation\Factory::class, \Illuminate\Contracts\Validation\Factory::class],
        'view'                 => [Badtomcat::class],
    ];

    protected $providers = [
        RouteServiceProvider::class
    ];
}