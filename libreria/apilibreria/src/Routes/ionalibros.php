<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/libros
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

//contendrá los entrypoints (acciones CRUD) de la 
$app->group('/api', function(RouteCollectorProxy $group){
   
    $group->post('/libros/new', 'App\Controllers\LibrosController:new'); 
    $group->get('/libros/filter', 'App\Controllers\ionaLibrosController:ionagetFilter');
    $group->get('/libros/categoria', 'App\Controllers\LibrosController:getLibrosYCategorias');
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});

    $app->get('/libros', 'App\Controllers\ionaLibrosController:ionagetAll');

/*//FUNCION DE PRUEBA /index.php/libros
$app->get("/libros", function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, I'm your libros.php file");
    return $response;
});*/






