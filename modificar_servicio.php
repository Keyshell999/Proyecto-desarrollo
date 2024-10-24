<?php
include_once "modelo/conexion.php";
include_once "controlador/actualizar_servicio.php";

// Verifica si 'id' está definido en $_GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Puedes usar una consulta preparada para mayor seguridad
    $sql = $conexion->query("SELECT * FROM servicio WHERE id_servicio = $id");
} else {
    // Manejar el caso en que 'id' no está presente
    echo "El ID no está definido.";
    exit; // Termina el script si no hay ID
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar producto</title>
</head>

<body>

    <div class="container-fluid row">

        <form class="col-4 p3 m-auto" method="POST">

            <h3 class="text-center text-secondary">Modificar servicio</h3>
            <input type="hidden" name="id_servicio" value="<?= $_GET["id"]; ?>">

            <?php

            while ($datos = $sql->fetch_object()) { ?>

                <input type="hidden" name="id" value="<?= htmlspecialchars($datos->id_servicio) ?>">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ubicacion</label>
                    <input type="text" class="form-control" name="ubicacion" value="<?= htmlspecialchars($datos->ubicacion); ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="<?= htmlspecialchars($datos->descripcion); ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Objeto a reparar</label>
                    <input type="text" class="form-control" name="objeto_a_reparar" value="<?= htmlspecialchars($datos->objeto_a_reparar); ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipo de servicio</label>
                    <select class="select-9" name="tipo_servicio">
                        <option value="Tecnico" <?= $datos->tipo_servicio == 'Tecnico' ? 'selected' : '' ?>>Tecnico</option>
                        <option value="Electricista" <?= $datos->tipo_servicio == 'Electricista' ? 'selected' : '' ?>>Electricista</option>
                        <option value="Pintor" <?= $datos->tipo_servicio == 'Pintor' ? 'selected' : '' ?>>Pintor</option>
                        <option value="Carpintero" <?= $datos->tipo_servicio == 'Carpintero' ? 'selected' : '' ?>>Carpintero</option>
                        <option value="Plomero" <?= $datos->tipo_servicio == 'Plomero' ? 'selected' : '' ?>>Plomero</option>
                        <option value="Limpieza" <?= $datos->tipo_servicio == 'Limpieza' ? 'selected' : '' ?>>Limpieza</option>
                        <option value="Instalador" <?= $datos->tipo_servicio == 'Instalador' ? 'selected' : '' ?>>Instalador</option>
                        <option value="Albañil" <?= $datos->tipo_servicio == 'Albañil' ? 'selected' : '' ?>>Albañil</option>
                        <option value="Gas" <?= $datos->tipo_servicio == 'Gas' ? 'selected' : '' ?>>Gas</option>
                    </select>
                </div>
            <?php }
            ?>

            <button type="submit" class="btn btn-primary" name="actualizar" value="OK">Actualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>