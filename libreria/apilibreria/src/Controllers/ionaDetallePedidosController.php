<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    use App\Model\ionaDetallePedidosModel;    

    class ionaDetallePedidosController {
        
        public function ionagetAll($request, $response, $args){
            $DetallePedidos = ionaDetallePedidosModel::ionagetAll();
            $DetallePedidosJson = json_encode($DetallePedidos);
            $response->getBody()->write($DetallePedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            
        }

        public function ionanew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
           
            $codigolibro = (int)$parametros['CodigoLibro'];
            $codigousu = $parametros['CodigoUsuario'];
            $Cantidad = $parametros['Cantidad'];
            $Descuento = $parametros['descuento'];
            $fecha = $parametros['fecha'];

            $valores = array($codigolibro, $codigousu, $Cantidad, $Descuento, $fecha);

            $DetallePedidos = ionaDetallePedidosModel::ionanew($valores);
            $DetallePedidosJson = json_encode($DetallePedidos);
            $response->getBody()->write($DetallePedidosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

    }