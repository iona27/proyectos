<?php
namespace App\Model;
use App\Config\DB;

class ionaCategoriasModel {
    private static $table = 'categorias';
    private static $DB;

    public static function conexionDB(){
        ionaCategoriasModel::$DB = new DB();
    }

    public static function ionagetAll(){
        ionaCategoriasModel::conexionDB();
        $sql = "Select * from categorias";
        $data = ionaCategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}