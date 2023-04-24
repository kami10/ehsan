<?php

return [
    // Factories
    'factories'=> [
        \App\System\App::class => \App\System\AppFactory::class,
        \App\Controller\HomeController::class => \App\Controller\HomeControllerFactory::class,
    ]

];