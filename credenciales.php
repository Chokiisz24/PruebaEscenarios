<?php

require_once "Controller/login.controller.php"; //Agregamos el controlador
require_once "Model/inicio.model.php"; //Agregamos el modelo

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
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}