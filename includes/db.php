<?php


    class DB{
        //Datos de conexion
    static $host="localhost";
    static $user="root";
    static $password= "";
    static $bd="personas";
        public static function init(){
            echo "Iniciando base de datos";
        }
        public static function query($sql){
            //Crear conexion
            $conexion= new mysqli(self::$host, self::$user, self::$password, self::$bd);
            $result = $conexion->query($sql);
            $conexion->close();
            return $result;

        }
    }
    ?>