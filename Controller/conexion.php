<?php

class Conexion{
    // Configuración de la conexión a la base de datos
    static private $host = 'localhost';
    static private $dbname = 'escenarios';
    static private $username = 'root';
    static private $password = 'root';
    
    static public function conectar(){
        try {
            $link = new PDO("mysql:host=" . self::$host . "; dbname=" . self::$dbname, self::$username, self::$password);
           // $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully".'---';
            return $link;
        
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}

}
