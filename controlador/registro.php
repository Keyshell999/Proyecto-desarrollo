<?php

include "../modelo/conexion.php";

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $num_documento = $_POST['num_documento'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $num_celular = $_POST['num_celular'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    //Encriptamiento de la contraseña
    $contrasena = hash('sha512', $contrasena);

    //Preparar la consulta SQL con marcadores de posición
    $insertarDatos = "INSERT INTO usuario  (nombre, apellido, tipo_documento, num_documento, correo, contrasena, num_celular, tipo_usuario, fecha_nacimiento) VALUES ('$nombre', '$apellido', '$tipo_documento', '$num_documento', '$correo', '$contrasena', '$num_celular','$tipo_usuario', '$fecha_nacimiento')";


    //Verificar que el numero de documento no se repita en la base de datos
    $verificar_num_doc = mysqli_query($conexion, "SELECT * FROM usuario WHERE num_documento = '$num_documento'");

    if (mysqli_num_rows($verificar_num_doc) > 0) {
        echo
        '<script>
    alert("Este documento ya fue registrado por un usuario. Si es tu documeto, inicia sesion con los datos correspondientes");
    window.location.href = "../registrarse.php";
    </script>';

        exit; //Detiene la ejecución del script y redirecciona al usuario a la pagina de registro
    }

    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo
        '<script>
                alert("Este correo ya fue registrado, intenta con otro diferente");
                window.location.href = "../registrarse.php";
            </script>';

        exit;
    }

    //Verificar que el numero de celular no se repita en la base de datos
    $verificar_num_cel = mysqli_query($conexion, "SELECT * FROM usuario WHERE num_celular = '$num_celular'");

    if (mysqli_num_rows($verificar_num_cel) > 0) {
        echo
        '<script>
                    alert("Este numero ya fue registrado por un usuario. Si es tu numero de celular, inicia sesion con los datos correspondientes");
                    window.location.href = "../registrarse.php";
                </script>';

        exit; //Detiene la ejecución del script y redirecciona al usuario a la pagina de registro
    }

    //Ejecutar la consulta
    $ejecutar = mysqli_query($conexion, $insertarDatos);

    if ($ejecutar) {
        echo
        '<script>
                    alert("Usuario almacenado exitosamente");
                    window.location.href = "../index.php";
                </script>'; //Redirecciona al usuario a la pagina de inicio de sesión
    } else {
        echo
        '<script>
                    alert("Intentalo de nuevo, usuario no almacenado");
                    window.location.href = "../registrarse.php";
                </script>';
    }
    // Cerrar la declaración y la conexión
    mysqli_close($conexion);
}
