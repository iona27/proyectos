<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaCategoriasModel;    

    class ionaCategoriasController {
        
        public function ionagetAll($request, $response, $args){
            $Categorias = ionaCategoriasModel::ionagetAll();
            $CategoriasJson = json_encode($Categorias);
            $response->getBody()->write($CategoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }