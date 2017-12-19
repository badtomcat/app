<?php


define('LARAVEL_START', microtime(true));
require __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/Application.php';


$app = new App\Application(__DIR__."/..");

$app->instance(\Badtomcat\Http\Request::class,\Badtomcat\Http\Request::createFromGlobals());

$kernel = new \App\Kernel($app, $app->make('router'));
$context = $app->make(\Badtomcat\Routing\RequestContext::class);
$response = $kernel->handle($context->fromRequest($app->make('request')));
$response->send();







