<?php

namespace Plug\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class PlugRouteServiceProvider
 * @package Plug\Providers
 */
class PlugRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','Plug\Controllers\PlugController@getHelloWorldPage');
    }
}