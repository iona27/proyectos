<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaLibrosModel;    

    class ionaLibrosController {

        public function avupdate(Request  $request, Response $response, $args){
            $parametros = $request->getQueryParams();
           
            $catid = $parametros['categoriaid'];
            $precio = $parametros['precio'];
            $stock = $parametros['stock'];

            $valores = array($catid, $precio, $stock);
            $libros = avLibrosModel::avupdate($valores);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function avFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $precio = $parametros['precio'];
            $categoria = $parametros['nombre_categoria'];

            $valoresParametros = array ($precio, $categoria);

            $libros = avLibrosModel::avFilter($valoresParametros);
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