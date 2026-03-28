<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vigilante</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white text-center">
            <h4>🛡️ Registrar Vigilante - Zona Sur</h4>
        </div>

        <div class="card-body">

            <form action="guardar.php" method="POST">

                <!-- Datos básicos -->
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Puesto de Trabajo</label>
                        <input type="text" name="puesto" class="form-control" required>
                    </div>

                    <div class="col">
                        <label class="form-label">Nombre del Vigilante</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                </div>

                <!-- Arma -->
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">¿Tiene arma?</label>
                        <select name="arma" class="form-select" id="armaSelect">
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>

                    <div class="col">
                        <label class="form-label">Tipo de arma</label>
                        <input type="text" name="tipo_arma" id="tipoArma" class="form-control" disabled>
                    </div>
                </div>

                <!-- Equipamiento -->
                <div class="mb-3">
                    <label class="form-label">Elementos asignados</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="linterna" value="1">
                        <label class="form-check-label">Linterna</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="capa" value="1">
                        <label class="form-check-label">Capa</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tonfa" value="1">
                        <label class="form-check-label">Tonfa</label>
                    </div>
                </div>

                <!-- Comunicación -->
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Medio de Comunicación</label>
                        <input type="text" name="medio" class="form-control">
                    </div>

                    <div class="col">
                        <label class="form-label">IM</label>
                        <input type="text" name="im" class="form-control">
                    </div>

                    <div class="col">
                        <label class="form-label">Número de Celular</label>
                        <input type="text" name="celular" class="form-control">
                    </div>
                </div>

                <!-- Botones -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">💾 Guardar</button>
                    <a href="index.php" class="btn btn-secondary px-4">⬅ Volver</a>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Script para habilitar tipo de arma -->
<script>
    const armaSelect = document.getElementById("armaSelect");
    const tipoArma = document.getElementById("tipoArma");

    armaSelect.addEventListener("change", function() {
        if (this.value == "1") {
            tipoArma.disabled = false;
        } else {
            tipoArma.disabled = true;
            tipoArma.value = "";
        }
    });
</script>

</body>
</html>