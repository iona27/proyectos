<?php
use Slim\Routing\RouteCollectorProxy;

$app->get('/avperfiles', 'App\Controllers\avPerfilesController:avAll');
$app->post('/avperfiles/new', 'App\Controllers\avPerfilesController:avnew');