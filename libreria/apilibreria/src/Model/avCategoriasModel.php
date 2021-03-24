<?php
namespace App\Model;
use App\Config\DB;

class avCategoriasModel {
    private static $table = 'categorias';
    private static $DB;

    public static function conexionDB(){
        avCategoriasModel::$DB = new DB();
    }

    public static function avAll(){
        avCategoriasModel::conexionDB();
        $sql = "Select * from categorias";
        $data = avCategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}