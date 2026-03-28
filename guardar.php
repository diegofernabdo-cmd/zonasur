<?php
include("conexion.php");

$puesto = $_POST['puesto'];
$nombre = $_POST['nombre'];
$arma = $_POST['arma'];
$tipo_arma = $_POST['tipo_arma'];

$linterna = isset($_POST['linterna']) ? 1 : 0;
$capa = isset($_POST['capa']) ? 1 : 0;
$tonfa = isset($_POST['tonfa']) ? 1 : 0;

$medio = $_POST['medio'];
$im = $_POST['im'];
$celular = $_POST['celular'];

$sql = "INSERT INTO vigilantes 
(puesto_trabajo, nombre_vigilante, tiene_arma, tipo_arma, linterna, capa, tonfa, medio_comunicacion, im, numero_celular)
VALUES 
('$puesto','$nombre','$arma','$tipo_arma','$linterna','$capa','$tonfa','$medio','$im','$celular')";

$conexion->query($sql);

header("Location: index.php");
?>