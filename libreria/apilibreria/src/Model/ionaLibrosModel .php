<?php
namespace App\Model;
use App\Config\DB;


class ionaLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        ionaLibrosModel::$DB = new DB();
    }
   
        public static function ionagetAll(){
        ionaLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = ionaLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}