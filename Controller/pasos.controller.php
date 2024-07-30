<?php

require_once 'conexion.php';    

class ControllerEscenario{
    public function PasosController($modpasos)
    {
        $tabla = 'pasos';
        echo 'Llego al controlador PARA INSERTAR '. $modpasos->getTipo();
        $conn = Conexion::conectar();
        
        try {
            $stmt = $conn->prepare("INSERT INTO $tabla (tipo, descripcion) 
            VALUES (:tipo, :descripcion)");
            $stmt->bindParam(':tipo', $modpasos->getTipo(), PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $modpasos->getDescripcion(), PDO::PARAM_STR);

            $stmt->execute();
            echo 'Se inserto correctamente';
            // Puedes retornar el ID del nuevo registro si es necesario
            return $conn->lastInsertId(); 

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            // Puedes lanzar una excepción o manejar el error de acuerdo a tus necesidades
        }

    }
}