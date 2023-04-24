<?php

namespace App\Controller;

use App\System\ServiceManager;

class HomeControllerFactory implements \App\Interfaces\FactoryInterface
{

    public function __invoke(ServiceManager $serviceManager): HomeController
    {
        return new HomeController();
    }
}