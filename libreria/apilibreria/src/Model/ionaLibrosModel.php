<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class ionaLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        ionaLibrosModel::$DB = new DB();
    }
   

    public static function ionagetAll(){
        
        $sql = "Select * from libros";
        ionaLibrosModel::conexionDB();
        $data = ionaLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    
    public static function ionagetFilter(){
        
        $sql = "Select * from  libros where precio > ? and categoriaid = ?";
        ionaLibrosModel::conexionDB();
        $data = ionaLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    
    
}