<?php
namespace App\Model;
use App\Config\DB;

class ionaLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        ionaLibrosModel::$DB = new DB();
    }

    public static function ionaupdate($param){
        ionaLibrosModel::conexionDB();
        $sql = "UPDATE libros SET precio = precio+'$param[1]', stock = stock+'$param[2]' 
                where categoriaid = '$param[0]'";
        
        $data = ionaLibrosModel::$DB->run($sql, $param);
        return "Libros actualizados correctamente ";
    }

    public static function ionagetFilter($param){
        ionaLibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c 
        on l.categoriaid=c.categoriaid where l.precio > ? and c.nombre_categoria = ?";
        $data = ionaLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function ionagetAll(){
        ionaLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = ionaLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
}