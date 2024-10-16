<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $BaseDeDatos = "mydb";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);

    if (!$enlace) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

?>