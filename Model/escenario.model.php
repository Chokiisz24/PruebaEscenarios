<?php

class ModeloEscenario{

    private $titulo;
    private $descripcion;
    private $media;
    private $fecha;
    private $folio;

    public function __construct($titulo, $descripcion, $folio, $fecha, $media){
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->folio = $folio;
        $this->fecha = $fecha;
        $this->media = $media;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getMedia(){
        return $this->media;
    }
    public function getFolio(){
        return $this->folio;
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setMedia($media){
        $this->media = $media;
    }

    public function setFolio($folio){
        $this->folio = $folio;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

}