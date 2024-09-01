<?php 

class DataBase{
    const host="localhost";
    const user="root";
    const password="";
    const database="Delu24";
    
    public static function Conectar(){
        try {
            $conexion = new PDO("mysql:host=".self::host.";dbname=".self::database.";charset=utf8",self::user,self::password);
            
            $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            return "Fallo ".$e -> getMessage();
        }
    }
}