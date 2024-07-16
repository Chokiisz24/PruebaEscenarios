<?php


class ModelLogin {
    private $usuario;
    private $passwd;

    public function  __construct($usuario, $passwd){ 
        $this->usuario = $usuario;
        $this->passwd = $passwd;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setPasswd($passwd){
        $this->passwd = $passwd;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getPasswd(){
        return $this->passwd;
    }
    
}
