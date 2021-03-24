<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/avusuarios', 'App\Controllers\avUsuariosController:avAll');
$app->post('/avusuarios/new', 'App\Controllers\avUsuariosController:avnew');