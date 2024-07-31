<?php

require_once 'conexion.php';

class ControllerMedia{

    public function MediaController($modmedia){

        $tabla = 'files';
    
        $conn = Conexion::conectar();
        try{

            $stmt = $conn->prepare("INSERT INTO $tabla (nombre, fileb) VALUES (:nombre, :fileb)");
            $stmt->bindParam(':nombre', $modmedia->getNombre(), PDO::PARAM_STR);
            $stmt->bindParam(':fileb', $modmedia->getFileb(), PDO::PARAM_STR);
            $stmt->execute();
            return $conn->lastInsertId();

        }catch(PDOException $e){}
    }

}