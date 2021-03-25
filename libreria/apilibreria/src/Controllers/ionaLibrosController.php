<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaLibrosModel;    

    class ionaLibrosController {

        public function ionaupdate(Request  $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            
            $categoriaid = $parametros['categoriaid'];
            $precio = $parametros['precio'];
            $stock = $parametros['stock'];

            $valores = array($categoriaid, $precio, $stock);
            
            $libros = ionaLibrosModel::ionaupdate($valores);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function ionagetFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $precio = $parametros['precio'];
            $categoria = $parametros['nombre_categoria'];

            $valoresParametros = array ($precio, $categoria);

            $libros = ionaLibrosModel::ionagetFilter($valoresParametros);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        
        public function ionagetAll($request, $response, $args){
            $libros = ionaLibrosModel::ionagetAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }