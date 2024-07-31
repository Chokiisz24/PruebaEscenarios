<?php

class ModelMedia{
    private $nombre;
    private $fileb;

    public function __construct($fileb){
        $this->fileb = $fileb;
    }

    public function getFileb(){
        return $this->fileb;
    }

    public function setFileb($fileb){
        $this->fileb = $fileb;
    }


}