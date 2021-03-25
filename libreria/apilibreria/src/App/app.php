<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__. '/../../vendor/autoload.php';
 
 
// creamos la aplicación php
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");


require __DIR__. "/../Routes/ionaLibros.php";
require __DIR__. "/../Routes/ionaCategorias.php";
require __DIR__. "/../Routes/ionaEditores.php";
require __DIR__. "/../Routes/ionaUsuarios.php";
require __DIR__. "/../Routes/ionaPerfiles.php";
require __DIR__. "/../Routes/ionaDetallePedidos.php";

$app->run();


