<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/detallepedidos', 'App\Controllers\ionaDetallePedidosController:ionagetAll');
$app->post('/detallepedidos/new', 'App\Controllers\ionaDetallePedidosController:ionanew');
