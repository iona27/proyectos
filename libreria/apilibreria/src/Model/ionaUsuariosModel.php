<?php 
namespace App\Model;
use App\Config\DB;
use Exception;


class ionaUsuariosModel {
    private static $table = 'usuarios';
    private static $DB; 

    public static function conexionDB(){
        ionaUsuariosModel::$DB = new DB();
    }

    /*public static function update($param){
        UsuariosModel::conexionDB();
        $sql = "UPDATE usuarios SET nombre = '$param[1]', apellidos = '$param[2]', ciudad = '$param[4]', direccion = '$param[3]', anioNac = $param[5]  where usuarioid = $param[0]";
        $data = UsuariosModel::$DB->run($sql, $param);
        return "Usuario cambiado correctamente ";
    }

    public static function delete($param){
             UsuariosModel::conexionDB();
             $sql = "DELETE FROM usuarios WHERE usuarioid = ?";
             $data = UsuariosModel::$DB->run($sql, $param);
             return "Usuario ". $param[0] . " borrado correctamente ";
    }

    public static function getAll(){
        UsuariosModel::conexionDB();
        $sql = "Select * from usuarios";
        $data = UsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }*/

    public static function ionanew($param){
       try{
            UsuariosModel::conexionDB();
            $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                    values (?, ?, ?, ?, ?, ?)";
            $data = UsuariosModel::$DB->run($sql, $param);
            return "Usuario ". $param[1] . " insertado correctamente ";
       } catch(Exception $e){
          return $e->getMessage();
       }
    }
}