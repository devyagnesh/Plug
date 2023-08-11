<?php

namespace Plug\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class PlugServiceProvider
 * @package Plug\Providers
 */
class PlugServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(PlugRouteServiceProvider::class);
    }
}