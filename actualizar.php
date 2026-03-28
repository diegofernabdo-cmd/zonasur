<?php
include("conexion.php");

$id = $_POST['id'];
$puesto = $_POST['puesto'];
$nombre = $_POST['nombre'];
$tipo_arma = $_POST['tipo_arma'];
$celular = $_POST['celular'];

$sql = "UPDATE vigilantes SET 
puesto_trabajo='$puesto',
nombre_vigilante='$nombre',
tipo_arma='$tipo_arma',
numero_celular='$celular'
WHERE id=$id";

$conexion->query($sql);

header("Location: index.php");
?>