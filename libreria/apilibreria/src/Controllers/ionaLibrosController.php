<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\ionaLibrosModel;    

    class ionaLibrosController {

        /*rosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        
        public function new($request, $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }*/

        public function ionagetFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $precio = $parametros['precio'];
            $categoria = $parametros['categoriaid'];
            $valoresParametros = array ($precio, $categoria);
            $libros = ionaLibrosModel::ionagetFilter($valoresParametros);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200); 
        }
        
        public function ionagetAll(Request $request, Response $response, $args){
            
            $libros = ionaLibrosModel::ionagetAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }