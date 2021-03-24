<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\avDetallePedidosModel;    

    class avDetallePedidosController {

        public function avshow(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $id = $parametros['id'];

            $valoresParametros = array ($id);
            $DetallePedidos = avDetallePedidosModel::avshow($valoresParametros);
            $DetallePedidosJson = json_encode($DetallePedidos);
            $response->getBody()->write($DetallePedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200); 
        }
        
        public function avAll($request, $response, $args){
            $DetallePedidos = avDetallePedidosModel::avAll();
            $DetallePedidosJson = json_encode($DetallePedidos);
            $response->getBody()->write($DetallePedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }

        public function avnew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $codlibro = (int)$parametros['CodigoLibro'];
            $codusu = $parametros['CodigoUsuario'];
            $Cantidad = $parametros['Cantidad'];
            $Descuento = $parametros['descuento'];
            $fecha = $parametros['fecha'];

            $valores = array($codlibro, $codusu, $Cantidad, $Descuento, $fecha);

            $DetallePedidos = avDetallePedidosModel::avnew($valores);
            $DetallePedidosJson = json_encode($DetallePedidos);
            $response->getBody()->write($DetallePedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

    }