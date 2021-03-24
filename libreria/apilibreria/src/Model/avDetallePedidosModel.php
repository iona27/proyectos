<?php
namespace App\Model;
use App\Config\DB;

class avDetallePedidosModel {
    private static $table = 'detallepedidos';
    private static $DB;

    public static function conexionDB(){
        avDetallePedidosModel::$DB = new DB();
    }

    public static function avshow($param){
        avDetallePedidosModel::conexionDB();
        $sql = 'SELECT * from detallepedidos where CodigoUsuario = ?';
        $data = avDetallePedidosModel::$DB->run($sql, $param);
        return $data->fetch();
    }

    public static function avAll(){
        avDetallePedidosModel::conexionDB();
        $sql = "Select * from detallepedidos";
        $data = avDetallePedidosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function avnew($param){
        try{
             avDetallePedidosModel::conexionDB();
             $sql = "insert into detallepedidos (CodigoLibro, CodigoUsuario, Cantidad, descuento, fecha) 
                     values (?, ?, ?, ?, ?)";
             $data = avDetallePedidosModel::$DB->run($sql, $param);
             return "Compra de ". $param[2] . " libros insertada correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}