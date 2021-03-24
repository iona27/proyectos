<?php
namespace App\Model;
use App\Config\DB;

class avEditoresModel {
    private static $table = 'editores';
    private static $DB;

    public static function conexionDB(){
        avEditoresModel::$DB = new DB();
    }

    public static function avAll(){
        avEditoresModel::conexionDB();
        $sql = "Select * from editores";
        $data = avEditoresModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}