<?php

declare(strict_types=1);

namespace App\System;

use App\Interfaces\ControllerInterface;

class App {

    private Router $router;

    public function __construct(array $config, Router $router)
    {
        $this->router = $router;
    }

    public function run() {
        $controller =  $this->router->resolve();
        if ($controller instanceof ControllerInterface) {
            return $controller->handle();
        }

    }
}