<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/usuarios', 'App\Controllers\ionaUsuariosController:ionagetAll');
$app->post('/usuarios/new', 'App\Controllers\ionaUsuariosController:ionanew');