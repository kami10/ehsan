<?php

declare(strict_types=1);

namespace App\System;

use App\Interfaces\FactoryInterface;

class AppFactory implements FactoryInterface {

    public function __invoke(ServiceManager $serviceManager): App
    {
        $config = $serviceManager->get('config');
        return new App($config);
    }
}