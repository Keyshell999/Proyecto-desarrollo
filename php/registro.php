<?php

include("conexion.php");

    if (isset($_POST['registro'])) {
        $nombre_CL = $_POST['nombre'];
        $apellido_CL = $_POST['apellido'];
        $correo = $_POST['correo'];
        $num_celular = $_POST['num_celular'];
        $num_documento = $_POST['num_doc'];
        $fecha_nacimiento = $_POST['fecha_dia'];
        $contrasena = $_POST['contrasena'];
        $id_tipo_documento = $_POST['tipo_documento'];
        $id_tipo_usuario = $_POST['tipoUsuario'];
        $id_tipo_metodo = $_POST['tipoMetodo'];
        
        //Encriptamiento de la contraseña
        $contrasena = hash('sha512', $contrasena);
        
        //Preparar la consulta SQL con marcadores de posición
        $insertarDatos = "INSERT INTO cliente (nombre_CL, apellido_CL, correo, num_celular, num_documento, 
        fecha_nacimiento, contrasena, id_tipo_documento, id_tipo_usuario, id_tipo_metodo) VALUES ('$nombre_CL', 
        '$apellido_CL', '$correo', '$num_celular', '$num_documento', '$fecha_nacimiento', '$contrasena', '$id_tipo_documento', 
        '$id_tipo_usuario', '$id_tipo_metodo')";

        //Verificar que el correo no se repita en la base de datos
        $verificar_correo = mysqli_query($enlace, "SELECT * FROM cliente WHERE correo = '$correo'");

        if (mysqli_num_rows($verificar_correo) > 0) {
            echo     
                '<script>
                    alert("Este correo ya fue registrado, intenta con otro diferente");
                    window.location.href = "../registrarse.php";
                </script>';

            exit;
        }

        //Verificar que el numero de documento no se repita en la base de datos
        $verificar_num_doc = mysqli_query($enlace, "SELECT * FROM cliente WHERE num_documento = '$num_documento'");

        if (mysqli_num_rows($verificar_num_doc) > 0) {
            echo     
                '<script>
                    alert("Este documento ya fue registrado por un usuario, si es tu documento, inicia sesion con los datos correspondientes");
                    window.location.href = "../registrarse.php";
                </script>';
            
            exit; //Detiene la ejecución del script y redirecciona al usuario a la pagina de registro
        }

        //Ejecutar la consulta
        $ejecutar = mysqli_query($enlace, $insertarDatos);
        
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
        mysqli_close($enlace);
    }
?>
