<?php
namespace App\Model;
use App\Config\DB;

class ionaUsuariosModel {
    private static $table = 'usuarios';
    private static $DB;

    public static function conexionDB(){
        ionaUsuariosModel::$DB = new DB();
    }

    public static function ionagetAll(){
        ionaUsuariosModel::conexionDB();
        $sql = "Select * from usuarios";
        $data = ionaUsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function ionanew($param){
        try{
             ionaUsuariosModel::conexionDB();
             $sql = "insert into usuarios 
                    (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                     values (?, ?, ?, ?, ?, ?)";
             $data = ionaUsuariosModel::$DB->run($sql, $param);
             return "Usuario ". $param[1] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}