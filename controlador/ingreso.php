<?php
include "../modelo/conexion.php";

session_start(); //Inicia una sesión

if (isset($_POST['ingreso'])) {

    $tipo_usuario = $_POST['tipo_usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //Valida la existencia del usuario en la base de datos
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE tipo_usuario='$tipo_usuario' AND 
        correo='$correo' AND contrasena='$contrasena'");


    if (mysqli_num_rows($validar_login) > 0) {

        $crear_usuario = $_SESSION['usuario'] = $correo; //Crea una sesión basandose en la variable correo

        if ($tipo_usuario == 'administrador') {
            // Redirigir a la página de registro de administrador
            header('Location: ../roles/administrador.php');
            exit();
        }
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
