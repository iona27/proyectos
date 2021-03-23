<?php
namespace App\Model;
use App\Config\DB;

//definimos LibrosModel como una clase estática:
//no se puede hacer un new, no hay $this, no hay método __contruct()
class CategoriasModel {
    private static $table = 'categorias';
    private static $DB;

    public static function conexionDB(){
        CategoriasModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = CategoriasModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function getAll(){
        CategoriasModel::conexionDB();
        $sql = "Select * from categorias";
        $data = CategoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function delete($param){
        CategoriasModel::conexionDB();
        $sql = "DELETE FROM categorias WHERE categoriaid = ?";
        $data = CategoriasModel::$DB->run($sql, $param);
        return "Categoria ". $param[0] . " borrada correctamente ";
    }
    public static function new($param){
        try{
            CategoriasModel::conexionDB();
             $sql = "insert into categorias (categoriaid, nombre_categoria, logo) 
                     values (?, ?, ?)";
             $data = CategoriasModel::$DB->run($sql, $param);
             return "Categoria ". $param[1] . " insertado correctamente ";
        } catch(Exception $e){
           return $e->getMessage();
        }
     }
}