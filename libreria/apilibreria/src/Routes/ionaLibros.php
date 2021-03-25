<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/libros', 'App\Controllers\ionaLibrosController:ionagetAll');
$app->post('/libros/new', 'App\Controllers\ionaLibrosController:ionanew');
$app->get('/libros/filter', 'App\Controllers\ionaLibrosController:ionagetFilter');