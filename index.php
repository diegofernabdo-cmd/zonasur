<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vigilantes Zona Sur</title>
</head>
<body>

<h2>Vigilantes Zona Sur</h2>
<a href="crear.php">➕ Nuevo Vigilante</a>

<table border="1">
<tr>
    <th>Puesto</th>
    <th>Nombre</th>
    <th>Arma</th>
    <th>Tipo</th>
    <th>Linterna</th>
    <th>Capa</th>
    <th>Tonfa</th>
    <th>Comunicación</th>
    <th>IM</th>
    <th>Celular</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM vigilantes");

while($row = $resultado->fetch_assoc()) {
?>
<tr>
    <td><?= $row['puesto_trabajo'] ?></td>
    <td><?= $row['nombre_vigilante'] ?></td>
    <td><?= $row['tiene_arma'] ? "Sí" : "No" ?></td>
    <td><?= $row['tipo_arma'] ?></td>
    <td><?= $row['linterna'] ? "Sí" : "No" ?></td>
    <td><?= $row['capa'] ? "Sí" : "No" ?></td>
    <td><?= $row['tonfa'] ? "Sí" : "No" ?></td>
    <td><?= $row['medio_comunicacion'] ?></td>
    <td><?= $row['im'] ?></td>
    <td><?= $row['numero_celular'] ?></td>
    <td>
        <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
        <a href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>


</table>

</body>
</html>