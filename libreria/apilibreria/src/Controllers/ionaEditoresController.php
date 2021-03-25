<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaEditoresModel;    

    class ionaEditoresController {
        
        public function ionagetAll($request, $response, $args){
            $Editores = ionaEditoresModel::ionagetAll();
            $EditoresJson = json_encode($Editores);
            $response->getBody()->write($EditoresJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }