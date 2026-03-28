<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM vigilantes WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id'] ?>">

Puesto: <input type="text" name="puesto" value="<?= $row['puesto_trabajo'] ?>"><br>
Nombre: <input type="text" name="nombre" value="<?= $row['nombre_vigilante'] ?>"><br>

Tipo arma: <input type="text" name="tipo_arma" value="<?= $row['tipo_arma'] ?>"><br>

Celular: <input type="text" name="celular" value="<?= $row['numero_celular'] ?>"><br>

<button type="submit">Actualizar</button>

</form>