<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/perfiles', 'App\Controllers\ionaPerfilesController:ionagetAll');
$app->post('/perfiles/new', 'App\Controllers\ionaPerfilesController:ionanew');