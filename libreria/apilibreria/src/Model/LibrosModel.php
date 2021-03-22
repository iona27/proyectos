<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class LibrosModel {
    private static $table = 'libros';
    private static $DB;

      public static function getLibrosYCategorias(){
        LibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c on l.categoriaid=c.categoriaid";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function conexionDB(){
        LibrosModel::$DB = new DB();
    }

    public static function getAll(){
        LibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = LibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        LibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = LibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }

    public static function getFilter($valores){
        LibrosModel::conexionDB();
        $param = array_values($valores);
        $sql = 'SELECT * FROM libros WHERE precio > ? AND nombre_libro LIKE ?';
        $data = LibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }
}