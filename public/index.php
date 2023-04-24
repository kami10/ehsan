<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/global.php';
$routes = include __DIR__ . '/../config/routes.php';
$configTotal = array_merge($config, $routes);


$serviceManager = new \App\System\ServiceManager($configTotal);

/** @var \App\System\App $app */
$app = $serviceManager->get(\App\System\App::class);
var_dump($app);die;
$app->run();
