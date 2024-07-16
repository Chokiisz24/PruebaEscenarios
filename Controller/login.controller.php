<?php
require_once 'conexion.php';

class ControllerLogin
{
    public function loginController($moduser)
    {
        $tabla = 'session';
        // echo $moduser->getUsuario().'--aquitoy--'.$moduser->getPasswd();
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("SELECT * FROM $tabla WHERE username = :username AND passwd = :passwd");

        $stmt->bindParam(':username', $moduser->getUsuario(), PDO::PARAM_STR);
        $stmt->bindParam(':passwd', $moduser->getPasswd(), PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);  // entrega un numero de filas encontradas
        // var_dump('llegue : datos result    ' . $result);     
        $val = $stmt->fetchAll();
        try {
            if ($val == null || $val == '' || $val == [] || $val == false) {
                throw new Exception('No se encontro el usuario');
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
        for ($i = 0; $i < count($val); $i++) {
            if ($val[$i]['username'] == $moduser->getUsuario() && $val[$i]['passwd'] == $moduser->getPasswd()) {
                header('Location: View/home.php');
                exit();
                // return $val; // Devuelve el primer registro como un objeto de clase
            }
        }
    }
}
