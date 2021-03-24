<?php
namespace App\Model;
use App\Config\DB;

class avPerfilesModel {
    private static $table = 'perfiles';
    private static $DB;

    public static function conexionDB(){
        avPerfilesModel::$DB = new DB();
    }

    public static function avAll(){
        avPerfilesModel::conexionDB();
        $sql = "Select * from perfiles";
        $data = avPerfilesModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function avnew($param){
        try{
             avPerfilesModel::conexionDB();
             $sql = "insert into perfiles (perfilid, email, facebook, instagram, foto, rol, userid) 
                     values (?, ?, ?, ?, ?, ?, ?)";
             $data = avPerfilesModel::$DB->run($sql, $param);
             return "Perfil ". $param[1] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}