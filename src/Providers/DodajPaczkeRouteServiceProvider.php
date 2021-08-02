<?php

namespace DodajPaczke\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class DodajPaczkeRouteServiceProvider
 * @package DodajPaczke\Providers
 */
class DodajPaczkeRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','DodajPaczke\Controllers\DodajPaczkeController@getHelloWorldPage');
    }
}