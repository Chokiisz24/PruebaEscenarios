
<?php
class ModeloPasos{

    private $tipo;
    private $descripcion;

    public function __construct($tipo, $descripcion){
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }


}
?>