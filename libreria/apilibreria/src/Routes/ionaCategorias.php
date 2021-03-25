<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/categorias', 'App\Controllers\ionaCategoriasController:ionagetAll');
