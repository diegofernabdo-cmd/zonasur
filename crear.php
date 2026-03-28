<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Vigilante</title>
</head>
<body>

<h2>Registrar Vigilante</h2>

<form action="guardar.php" method="POST">

Puesto: <input type="text" name="puesto"><br>
Nombre: <input type="text" name="nombre"><br>

Tiene arma:
<select name="arma">
    <option value="1">Sí</option>
    <option value="0">No</option>
</select><br>

Tipo arma: <input type="text" name="tipo_arma"><br>

Linterna: <input type="checkbox" name="linterna" value="1"><br>
Capa: <input type="checkbox" name="capa" value="1"><br>
Tonfa: <input type="checkbox" name="tonfa" value="1"><br>

Medio comunicación: <input type="text" name="medio"><br>
IM: <input type="text" name="im"><br>
Celular: <input type="text" name="celular"><br>

<button type="submit">Guardar</button>

</form>

</body>
</html>