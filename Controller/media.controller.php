<?php

require_once 'conexion.php';

class ControllerMedia{

    public function MediaController($modmedia){

        $tabla = 'files';
    
        $conn = Conexion::conectar();
        try{

            $stmt = $conn->prepare("INSERT INTO $tabla (fileb) VALUES (:fileb)");
            $stmt->bindParam(':fileb', $modmedia->getFileb(), PDO::PARAM_STR);
            $stmt->execute();
            return $conn->lastInsertId();

        }catch(PDOException $e){}
    }

}