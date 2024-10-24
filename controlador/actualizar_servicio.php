<?php

// Recibir los datos del formulario
if (!empty($_POST['actualizar'])) {
    if (!empty($_POST['ubicacion']) and !empty($_POST['descripcion']) and !empty($_POST['objeto_a_reparar']) and !empty($_POST['tipo_servicio'])) {

        $id = $_POST['id'];
        $ubicacion = $_POST['ubicacion'];
        $descripcion = $_POST['descripcion'];
        $objeto_a_reparar = $_POST['objeto_a_reparar'];
        $tipo_servicio = $_POST['tipo_servicio'];

        // Consulta para actualizar el servicio
        $sql = $conexion->query("UPDATE servicio SET ubicacion = '$ubicacion', descripcion = '$descripcion', objeto_a_reparar = '$objeto_a_reparar', tipo_servicio = '$tipo_servicio' WHERE id_servicio = '$id'");

        if ($sql) {
            echo '<div class="alert alert-success">Servicio actualizado correctamente.</div>';
        } else {
            echo '<div class="alert alert-danger">Error al actualizar el servicio:</div>' . $conexion->error;
        }
        // Redireccionar de vuelta a la lista
        header("Location: ../roles/administrador.php");
        exit();
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }
}
