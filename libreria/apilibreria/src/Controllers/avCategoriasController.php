<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\avCategoriasModel;    

    class avCategoriasController {
        
        public function avAll($request, $response, $args){
            $Categorias = avCategoriasModel::avAll();
            $CategoriasJson = json_encode($Categorias);
            $response->getBody()->write($CategoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }