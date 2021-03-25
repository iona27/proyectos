<?php
namespace App\Model;
use App\Config\DB;

class ionaPerfilesModel {
    private static $table = 'perfiles';
    private static $DB;

    public static function conexionDB(){
        ionaPerfilesModel::$DB = new DB();
    }

    public static function ionagetAll(){
        ionaPerfilesModel::conexionDB();
        $sql = "Select * from perfiles";
        $data = ionaPerfilesModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function ionanew($param){
        try{
             ionaPerfilesModel::conexionDB();
             $sql = "insert into perfiles 
                     (perfilid, email, facebook, instagram, foto, rol, userid) 
                     values (?, ?, ?, ?, ?, ?, ?)";
             $data = ionaPerfilesModel::$DB->run($sql, $param);
             return "Perfil ". $param[0] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}