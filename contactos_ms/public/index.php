<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ .'/../app/Config/database.php';

$cors = require __DIR__ . '/../app/Middlewares/CorsMiddleware.php';
$endpoints = require __DIR__ . '/../app/Contactos/Presentation/Routers/endpoints.php';

$app = AppFactory::create();

$cors($app);

$endpoints($app);

$app->run();
