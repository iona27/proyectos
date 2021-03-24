<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/avdetallepedidos', 'App\Controllers\avDetallePedidosController:avAll');
$app->post('/avdetallepedidos/new', 'App\Controllers\avDetallePedidosController:avnew');
$app->get('/avdetallepedidos/{id}', 'App\Controllers\avDetallePedidosController:avshow');