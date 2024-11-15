<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "sql201.infinityfree.com";
$usuario = "if0_37659048";
$clave = "Key300106";
$BaseDeDatos = "if0_37659048_mydb";

$conexion = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>