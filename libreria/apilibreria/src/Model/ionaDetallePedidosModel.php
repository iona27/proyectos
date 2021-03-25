<?php
namespace App\Model;
use App\Config\DB;

class ionaDetallePedidosModel {
    private static $table = 'detallepedidos';
    private static $DB;

    public static function conexionDB(){
        ionaDetallePedidosModel::$DB = new DB();
    }

    public static function ionagetAll(){
        ionaDetallePedidosModel::conexionDB();
        $sql = "Select * from detallepedidos";
        $data = ionaDetallePedidosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function ionanew($param){
        try{
             ionaDetallePedidosModel::conexionDB();
             $sql = "insert into detallepedidos 
                    (CodigoLibro, CodigoUsuario, Cantidad, descuento, fecha) 
                     values (?, ?, ?, ?, ?)";
             $data = ionaDetallePedidosModel::$DB->run($sql, $param);
             return "Compra de ". $param[2] . " libros insertada correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}