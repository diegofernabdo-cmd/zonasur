<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vigilantes Zona Sur</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .card {
            border-radius: 15px;
        }
        .badge-si {
            background-color: #28a745;
        }
        .badge-no {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>🛡️ Vigilantes Zona Sur</h2>
        <a href="crear.php" class="btn btn-primary">➕ Nuevo Vigilante</a>
    </div>

    <!-- Card -->
    <div class="card shadow-lg">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">

                    <thead class="table-dark">
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
                    </thead>

                    <tbody>

                    <?php
                    $resultado = $conexion->query("SELECT * FROM vigilantes");

                    while($row = $resultado->fetch_assoc()) {
                    ?>

                        <tr>
                            <td><?= $row['puesto_trabajo'] ?></td>
                            <td><?= $row['nombre_vigilante'] ?></td>

                            <!-- Arma -->
                            <td>
                                <span class="badge <?= $row['tiene_arma'] ? 'badge-si' : 'badge-no' ?>">
                                    <?= $row['tiene_arma'] ? "Sí" : "No" ?>
                                </span>
                            </td>

                            <td><?= $row['tipo_arma'] ?></td>

                            <!-- Equipos -->
                            <td><?= $row['linterna'] ? "🔦" : "❌" ?></td>
                            <td><?= $row['capa'] ? "🧥" : "❌" ?></td>
                            <td><?= $row['tonfa'] ? "🪵" : "❌" ?></td>

                            <td><?= $row['medio_comunicacion'] ?></td>
                            <td><?= $row['im'] ?></td>
                            <td><?= $row['numero_celular'] ?></td>

                            <!-- Acciones -->
                            <td>
                                <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">✏️</a>

                                <a href="eliminar.php?id=<?= $row['id'] ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('¿Seguro que deseas eliminar este vigilante?');">
                                   🗑️
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>