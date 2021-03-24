<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/avcategorias', 'App\Controllers\avCategoriasController:avAll');
