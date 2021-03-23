<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\CategoriasModel;

    class CategoriasController {
    
        public function new(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $catid = (int)$parametros['categoriaid'];
            $nombre_categoria = $parametros['nombre_categoria'];
            $logo = $parametros['logo'];
            $valores = array($catid, $nombre_categoria, $logo);
            $Categorias = CategoriasModel::new($valores);
            $CategoriasJson = json_encode($Categorias);
            $response->getBody()->write($CategoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function delete(Request  $request, Response $response, $args){
            $parametros = $request->getQueryParams();
           
            $catid = (int)$parametros['categoriaid'];

            $valores = array($catid);
            $categorias = CategoriasModel::delete($valores);
            $categoriasJson = json_encode($categorias);
            $response->getBody()->write($categoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
       
        public function getAll($request, $response, $args){
            $categorias = CategoriasModel::getALL();
            $categoriasJson = json_encode($categorias);
            $response->getBody()->write($categoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }