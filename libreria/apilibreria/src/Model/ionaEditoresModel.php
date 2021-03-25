<?php
namespace App\Model;
use App\Config\DB;

class ionaEditoresModel {
    private static $table = 'editores';
    private static $DB;

    public static function conexionDB(){
        ionaEditoresModel::$DB = new DB();
    }

    public static function ionagetAll(){
        ionaEditoresModel::conexionDB();
        $sql = "Select * from editores";
        $data = ionaEditoresModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}