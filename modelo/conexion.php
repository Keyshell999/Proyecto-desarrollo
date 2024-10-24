<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $BaseDeDatos = "mydb";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

?>