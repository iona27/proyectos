<?php
namespace App\Model;
use App\Config\DB;

class avUsuariosModel {
    private static $table = 'usuarios';
    private static $DB;

    public static function conexionDB(){
        avUsuariosModel::$DB = new DB();
    }

    public static function avAll(){
        avUsuariosModel::conexionDB();
        $sql = "Select * from usuarios";
        $data = avUsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function avnew($param){
        try{
             avUsuariosModel::conexionDB();
             $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                     values (?, ?, ?, ?, ?, ?)";
             $data = avUsuariosModel::$DB->run($sql, $param);
             return "Usuario ". $param[1] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}