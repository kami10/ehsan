<?php

declare(strict_types=1);

namespace App\System;

class Router
{
    private array $routes;
    private ServiceManager $serviceManager;

    public function __construct(array $routes, ServiceManager $serviceManager)
    {
        $this->routes = $routes;
        $this->serviceManager = $serviceManager;
    }

    public function resolve(): mixed
    {
        $path = $_GET['path'] ?? '/';
        return $this->serviceManager->get($this->routes[$path]);
    }
}