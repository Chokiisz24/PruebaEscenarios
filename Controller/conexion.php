<?php

class Conexion{
    // Configuración de la conexión a la base de datos
    static private $host = '127.0.0.1';
    static private $dbname = 'escenarios';
    static private $username = 'root';
    static private $password = '';
    
    static public function conectar(){
        try {
            $link = new PDO("mysql:host=" . self::$host . "; dbname=" . self::$dbname, self::$username, self::$password);
           // $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully".'---';
            return $link;
        
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}

}
