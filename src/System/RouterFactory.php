<?php

namespace App\System;

class RouterFactory implements \App\Interfaces\FactoryInterface
{

    public function __invoke(ServiceManager $serviceManager): Router
    {
        $routes = $serviceManager->get('config')['routes'];
        return new Router($routes, $serviceManager);
    }
}