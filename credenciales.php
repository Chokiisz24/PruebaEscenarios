<?php

require_once "Controller/login.controller.php"; //Agregamos el controlador
require_once "../PruebaEscenarios/Model/inicio.model.php"; //Agregamos el modelo

require_once "Model/escenario.model.php"; //Agregamos el modelo
require_once "../PruebaEscenarios/Controller/escenario.controler.php"; //Agregamos el controlador

try{
    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){

        $usern = $_POST['emailuser'];
        $password = $_POST['passwd'];

        $modusu = new ModelLogin($usern, $password); //lo pasamos al constructor

        
        $login = new ControllerLogin();//Llamamos a nuestro controlador
        
        $usu = $login->loginController($modusu); //Llamamos al método loginController que se encarga de hacer el login
    }else{
        echo 'Error: No se puede procesar la solicitud';
    }
    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST'){

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $media = $_POST['media'];
        $folio = $_POST['folio'];
        $fecha = $_POST['fecha'];

        $modesc = new ModeloEscenario($titulo, $descripcion, $media, $folio, $fecha); //lo pasamos al constructor

        echo 'Llego al controlador '. $modesc->getTitulo(). ' <br>';
        echo 'Llego al controlador '. $modesc->getDescripcion(). ' <br>';
        echo 'Llego al controlador '. $modesc->getMedia(). ' <br>';
        echo 'Llego al controlador '. $modesc->getFecha(). ' <br>';
        echo 'Llego al controlador '. $modesc->getFolio(). ' <br>';

        try{
        $escenario = new ControlleEscenario();//Llamamos a nuestro controlador
        echo 'Instancio el controlador ';

        $esc = $escenario->EscenarioController($modesc); //Llamamos al método escenarioController que se encarga de hacer el login
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
        echo 'Se inserto correctamente';
    }else{
        echo 'Error: No se puede procesar la solicitud';
    }
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}