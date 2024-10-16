<?php

session_start(); //Inicia una sesión

include("conexion.php");

if (isset($_POST['ingreso'])) {

    $id_tipo_usuario = $_POST['tipoUsuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //Valida la existencia del usuario en la base de datos
    $validar_login = mysqli_query($enlace, "SELECT * FROM cliente WHERE id_tipo_usuario='$id_tipo_usuario' AND 
        correo='$correo' AND contrasena='$contrasena'");


    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo; //Crea una sesión basandose en la variable correo
        echo
        '<script>
            alert("Ha ingresado correctamente");
            window.location.href = "../servicios.php";
        </script>';
        exit;
    } else {
        echo
        '<script>
            alert("El usuario no existe, por favor verifique los datos introducidos");
            window.location.href = "../index.php";
        </script>';
        exit;
    }
}
