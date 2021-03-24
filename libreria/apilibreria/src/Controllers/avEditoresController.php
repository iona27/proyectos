<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\avEditoresModel;    

    class avEditoresController {
        
        public function avAll($request, $response, $args){
            $Editores = avEditoresModel::avAll();
            $EditoresJson = json_encode($Editores);
            $response->getBody()->write($EditoresJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }
    }