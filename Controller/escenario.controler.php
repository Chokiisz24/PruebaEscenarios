<?php
require 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
// $pasos = $_POST[''];
// $TesterAsignado = $_POST[''];
// $archivo = $_POST[''];

$insertar = "INSERT INTO escenario VALUES ('$titulo','$descripcion')";

$query = mysqli_query($link, $insertar);

if($query){

    
}

?>