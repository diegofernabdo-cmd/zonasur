<?php
$conexion = new mysqli("mysql-apithediego.alwaysdata.net", "apithediego", "clase1234", "apithediego_zonasur");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>