<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaPerfilesModel;    

    class ionaPerfilesController {
        
        public function ionagetAll($request, $response, $args){
            $Perfiles = ionaPerfilesModel::ionagetAll();
            $PerfilesJson = json_encode($Perfiles);
            $response->getBody()->write($PerfilesJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }

        public function ionanew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $pid = (int)$parametros['perfilid'];
            $email = $parametros['email'];
            $facebook = $parametros['facebook'];
            $instagram = $parametros['instagram'];
            $foto = $parametros['foto'];
            $rol = $parametros['rol'];
            $userid = $parametros['userid'];

            $valores = array
            ($pid, $email, $facebook, $instagram, $foto, $rol, $userid);
            $perfiles = ionaPerfilesModel::ionanew($valores);
            $perfilesJson = json_encode($perfiles);
            $response->getBody()->write($perfilesJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }