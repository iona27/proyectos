<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\avUsuariosModel;    

    class avUsuariosController {
        
        public function avAll($request, $response, $args){
            $Usuarios = avUsuariosModel::avAll();
            $UsuariosJson = json_encode($Usuarios);
            $response->getBody()->write($UsuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }

        public function avnew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $uid = (int)$parametros['usuarioid'];
            $nombre = $parametros['nombre'];
            $apellidos = $parametros['apellidos'];
            $direccion = $parametros['direccion'];
            $anionac = (int)$parametros['anioNac'];
            $ciudad = $parametros['ciudad'];
            $valores = array($uid, $nombre, $apellidos, $direccion, $ciudad, $anionac);
            $usuarios = avUsuariosModel::avnew($valores);
            $usuariosJson = json_encode($usuarios);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }