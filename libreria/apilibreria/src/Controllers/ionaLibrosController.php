<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    use App\Model\ionaLibrosModel;    

    class ionaLibrosController {

        
        public function ionagetAll($request, $response, $args){
            
            $libros = ionaLibrosModel::ionagetAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }