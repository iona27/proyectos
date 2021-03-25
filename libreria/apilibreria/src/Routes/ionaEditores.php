<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/editores', 'App\Controllers\ionaEditoresController:ionagetAll');