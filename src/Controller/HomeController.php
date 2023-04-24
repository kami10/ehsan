<?php

namespace App\Controller;

use App\Interfaces\ControllerInterface;

class HomeController implements ControllerInterface
{

    public function handle(): string
    {
        return 'here is home page';
    }
}