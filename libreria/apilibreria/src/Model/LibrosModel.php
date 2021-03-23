<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class LibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        LibrosModel::$DB = new DB();
    }
   

    public static function getAll(){
        
        $sql = "Select * from libros";
      //  echo $sql;
        LibrosModel::conexionDB();
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    
}