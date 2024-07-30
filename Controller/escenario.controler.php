<?php

require_once 'conexion.php';

class ControlleEscenario
{
    public function EscenarioController($modescenario)
    {
        $tabla = 'escenario';
        echo 'Llego al controlador PARA INSERTAR '. $modescenario->getTitulo();
        $conn = Conexion::conectar();
        
        try {
            $stmt = $conn->prepare("INSERT INTO $tabla (titulo, descripcion, media, folio, fecha) 
            VALUES (:titulo, :descripcion, :media, :folio, :fecha)");
            $stmt->bindParam(':titulo', $modescenario->getTitulo(), PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $modescenario->getDescripcion(), PDO::PARAM_STR);
            $stmt->bindParam(':media', $modescenario->getMedia(), PDO::PARAM_STR);
            $stmt->bindParam(':folio', $modescenario->getFolio(), PDO::PARAM_STR);
            $stmt->bindParam(':fecha', $modescenario->getFecha(), PDO::PARAM_STR);

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
