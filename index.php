<?php

include "modelo/conexion.php";

session_start();

if (isset($_SESSION['usuario'])) {

  header("location: servicios.php");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="img/">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Login</title>
</head>

<body class="cuerpo">

  <div class="container mt-3">
    <div class="image">
      <img class="img-1" src="img/LOGO SR APP.jpg" alt="No se encontro la imagen">
    </div>
    <h2><b>Iniciar Sesión</b></h2>
    <h6 class="subtitulo">La App que necesitas para tu hogar</h6>
    <form id="login" autocomplete="off" action="controlador/ingreso.php" method="POST">

      <div class="container-flex">
        <div class="mb-3 mt-3" id="tipo_usuario">
          <label for="tipo_usuario">Tipo de usuario</label>
          <br>
          <select class="select-9" name="tipo_usuario" required>
            <option selected disabled value="">--Selecciona tu tipo de usuario--</option>
            <option value="cliente">Cliente</option>
            <option value="profesional">Profesional</option>
            <option value="administrador">Administrador</option>
          </select>
        </div>
      </div>

      <div class="container-flex">
        <div class="flex email">
          <div class="mb-3 mt-3" id="email">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="name" placeholder="ejemplo@gmail.com" name="correo" required>
          </div>
        </div>
      </div>
      <div class="container-flex">
        <div class="flex contrasena">
          <div class="mb-3 mt-3" id="contrasena">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="contre" name="contrasena" required>
          </div>
        </div>
      </div>

      <div class="btn-login">
        <input type="submit" name="ingreso" id="btn-ingresar" value="Ingresar">
      </div>

      <div class="texto">
        O usa alguna de tus perfiles sociales
      </div>

      <div class="container-flex">
        <div class="flex google">
          <div class="mt-3">
            <div class="boton">
              <a class="btn-google button" href="https://myaccount.google.com/" target="_blank">
                <img class="img-2" src="img/icons8-logo-de-google-48.png" alt="No se encontro la imagen">
                Google
              </a>
            </div>
          </div>
        </div>


        <div class="flex facebook">
          <div class="mt-3">
            <div class="boton">
              <a class="btn-facebook button" href="https://www.facebook.com/" target="_blank">
                <img class="img-2" src="img/icons8-f-50.png" alt="No se encontro la imagen">
                Facebook
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="boton" id="registrarse-2">
        <a class="btn-registrarse button" href="registrarse.php" target="_self">
          Registrarse
        </a>

      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>