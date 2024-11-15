<?php
include "modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="img/LOGO SR APP.jpg">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/6454b76c85.js" crossorigin="anonymous"></script>
  <title>Registro de usuario</title>
</head>

<body class="bg-black">

  <div class="container mt-3">
    <h2><b>Crear usuario</b></h2>
    <form class="row g-3 needs-validation" id="validacion" autocomplete="off" action="controlador/registro.php" method="POST">

      <div class="container-flex">
        <div class="col-lg-4">
          <div class="mb-3 mt-3">
            <label for="validationDefault01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Ingresa tu nombre" name="nombre" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mb-3 mt-3">
            <label for="validationDefault02" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Ingresa tu apellido" name="apellido" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mb-3 mt-3 documento">
            <label id="documento" for="documento">Documento de identidad</label>
            <div class="container-flex">
              <select class="select-1" name="tipo_documento">
                <option value="cedula">C.C.</option>
                <option value="ced_extranjeria">C.E.</option>
                <option value="pasaporte">P.B.</option>
              </select>
              <input type="number" class="form-control" id="num_limitado" min="1000000" max="2000000000" placeholder="Ingresa el numero de documento" name="num_documento" required>
            </div>
          </div>
        </div>
      </div>

      <div class="container-flex">
        <div class="col-md-3">
          <div class="mb-3 mt-3" id="tipo_usuario">
            <label for="validationCustom04" class="form-label">Tipo de usuario</label>
            <br>
            <select class="select-9" id="validationCustom04" name="tipo_usuario" required>
              <option selected disabled value="">--Selecciona tu tipo de usuario--</option>
              <option value="cliente">Cliente</option>
              <option value="profesional">Profesional</option>
              <option value="administrador">Administrador</option>
            </select>
          </div>
        </div>

        <div class="w-100">

          <div class="col-md-6 w-100">
            <div class="mb-3 mt-3">
              <label for="validationCustom03" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" id="validationCustom03" placeholder="ejemplo@gmail.com" name="correo" required>
              <div class="invalid-feedback">
                Debes ingresar una direccion de correo.
              </div>
            </div>
          </div>

          <div class="w-100"></div>

          <div class="col-md-9 w-100">
            <div class="mb-3 mt-3">
              <label for="number">Ingresa tu numero de celular</label>
              <input type="number" class="form-control" id="num_limitado" min="1000000" max="5000000000" placeholder="Número de telefono" name="num_celular">
            </div>
          </div>
        </div>
      </div>

      <label for="fecha_dia">Fecha de nacimiento</label>
      <br>

      <div class="container-flex">
        <input type="date" class="form-control" id="fecha" name="fecha_nacimiento">
        <p id="error-message" style="color: red; display: none;">Debes ser mayor de 18 años.</p>
      </div>

      <div class="container-flex">
        <div class="flex contrasena">
          <div class="mb-3 mt-3" id="contrasena">
            <label for="password">Crea tu contraseña</label>
            <input type="text" class="form-control" id="contrasena" name="contrasena" required>
          </div>
        </div>
      </div>


      <div class="boton">
        <div class="btn-registrarse">
          <input type="submit" name="registro" id="btn-ingresar" value="Registrarse">
        </div>
      </div>

      <div class="boton" id="registrarse-2">
        <a class="ingreso-2 button" href="index.php" target="_self">
          Ingresar
        </a>


      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>