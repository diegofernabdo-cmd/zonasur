<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM vigilantes WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vigilante</title>

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #eef1f5;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark text-center">
            <h4><i class="bi bi-pencil-square"></i> Editar Vigilante</h4>
        </div>

        <div class="card-body">

            <form action="actualizar.php" method="POST">

                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <!-- Datos -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Puesto de Trabajo</label>
                        <input type="text" name="puesto" class="form-control" 
                               value="<?= $row['puesto_trabajo'] ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nombre del Vigilante</label>
                        <input type="text" name="nombre" class="form-control" 
                               value="<?= $row['nombre_vigilante'] ?>" required>
                    </div>
                </div>

                <!-- Arma -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">¿Tiene arma?</label>
                        <select name="arma" id="armaSelect" class="form-select">
                            <option value="0" <?= $row['tiene_arma'] == 0 ? 'selected' : '' ?>>No</option>
                            <option value="1" <?= $row['tiene_arma'] == 1 ? 'selected' : '' ?>>Sí</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tipo de arma</label>
                        <input type="text" name="tipo_arma" id="tipoArma" class="form-control"
                               value="<?= $row['tipo_arma'] ?>">
                    </div>
                </div>

                <!-- Equipamiento -->
                <div class="mb-3">
                    <label class="form-label">Elementos asignados</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="linterna" value="1"
                            <?= $row['linterna'] ? 'checked' : '' ?>>
                        <label class="form-check-label">Linterna</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="capa" value="1"
                            <?= $row['capa'] ? 'checked' : '' ?>>
                        <label class="form-check-label">Capa</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tonfa" value="1"
                            <?= $row['tonfa'] ? 'checked' : '' ?>>
                        <label class="form-check-label">Tonfa</label>
                    </div>
                </div>

                <!-- Comunicación -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Medio de Comunicación</label>
                        <input type="text" name="medio" class="form-control"
                               value="<?= $row['medio_comunicacion'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">IM</label>
                        <input type="text" name="im" class="form-control"
                               value="<?= $row['im'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Número de Celular</label>
                        <input type="text" name="celular" class="form-control"
                               value="<?= $row['numero_celular'] ?>">
                    </div>
                </div>

                <!-- Botones -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-save"></i> Actualizar
                    </button>

                    <a href="index.php" class="btn btn-secondary px-4">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

<!-- Script UX -->
<script>
const armaSelect = document.getElementById("armaSelect");
const tipoArma = document.getElementById("tipoArma");

function toggleArma() {
    if (armaSelect.value == "1") {
        tipoArma.disabled = false;
    } else {
        tipoArma.disabled = true;
        tipoArma.value = "";
    }
}

armaSelect.addEventListener("change", toggleArma);
window.onload = toggleArma;
</script>

</body>
</html>