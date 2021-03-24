<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__. '/../../vendor/autoload.php';
 
 
// creamos la aplicación php
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");


require __DIR__. "/../Routes/ionalibros.php";
require __DIR__. "/../Routes/avcategorias.php";
require __DIR__. "/../Routes/aveditores.php";
require __DIR__. "/../Routes/avusuarios.php";
require __DIR__. "/../Routes/avperfiles.php";
require __DIR__. "/../Routes/avdetallepedidos.php";

$app->run();


