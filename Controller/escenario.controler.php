<?php

require_once 'conexion.php';

class ControllerEscenario{
    public function escenarioController($modescenario){
        $tabla = 'escenario';
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("INSERT INTO $tabla (nombre) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $modescenario->getNombre(), PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $val = $stmt->fetchAll();
        try {
            if ($val == null || $val == '' || $val == [] || $val == false) {
                throw new Exception('No se encontro el escenario');
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
        for ($i = 0; $i < count($val); $i++) {
            if ($val[$i]['nombre'] == $modescenario->getNombre()) {
                header('Location: View/home-crear.php');
                exit();
            }
        }
    }
}

?>