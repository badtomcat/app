<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/11
 * Time: 17:57
 */
/**
 * @var \Badtomcat\Routing\Router $router
 */
$router = $this->app->make("router");

$router->get("/",function (){
    return "hi";
});

