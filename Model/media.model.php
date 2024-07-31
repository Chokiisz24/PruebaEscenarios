<?php

class ModelMedia{
    private $nombre;
    private $fileb;

    public function __construct($nombre, $fileb){
        $this->nombre = $nombre;
        $this->fileb = $fileb;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getFileb(){
        return $this->fileb;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setFileb($fileb){
        $this->fileb = $fileb;
    }


}