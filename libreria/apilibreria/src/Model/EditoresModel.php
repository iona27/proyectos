<?php
namespace App\Model;
use App\Config\DB;

class EditoresModel{
    private static $table = 'editores';
    private static $DB;

    
    public static function conexionDB(){
        EditoresModel::$DB = new DB();
    }
    
    public static function getEditoresYLibros(){
        EditoresModel::conexionDB();
        $sql = "Select * from editores e inner join libros l on e.editorid=l.editorid";
        $data = EditoresModel::$DB->run($sql, []);
        return $data->fetchALL();
    }

    public static function getFilter($sql, $param){
        EditoresModel::conexionDB();
        $data = EditoresModel::$DB->run($sql, $param);
        return $data->fetchALL();
    }

    public static function getALL(){
        EditoresModel::conexionDB();
        $sql = "Select * from editores";
        $data = EditoresModel::$DB->run($sql, []);
        return $data->fetchALL();
    }

    public static function show($param){
        EditoresModel::conexionDB();
        $sql = 'SELECT * From editores where editorid = ?';
        $data = EditoresModel::$DB->run($sql, $param);
        return $data->fetch();
    }
}