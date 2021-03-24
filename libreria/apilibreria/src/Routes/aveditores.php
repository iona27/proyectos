<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/aveditores', 'App\Controllers\avEditoresController:avAll');