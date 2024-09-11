<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="img/">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registro de usuario</title>
</head>

<body class="cuerpo">
  
  <div class="container mt-3">
    <h2><b>Crear usuario</b></h2>
    <form autocomplete="off" action="php/registro.php" method="POST">
      
      <div class="formulario">
        
        <div class="container-flex">
          <div class="flex nombre">
            <div class="mb-3 mt-3" id="name">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" name="nombre" >
            </div>
          </div>

          <div class="flex apellido">
            <div class="mb-3 mt-3">
              <label for="lastname">Apellido</label>
              <input type="text" class="form-control" id="lastname" placeholder="Ingresa tu apellido" name="apellido" >
            </div>
          </div>
        </div>
          
          <div class="container-flex">
            <div class="flex email">
              <div class="mb-3 mt-3" id="name">
                <label for="email">Correo electronico</label>
                <input type="email" class="form-control" id="name" placeholder="ejemplo@gmail.com" name="correo">
              </div>
            </div>
          </div>

          <div class="container-flex">
            <div class="flex tipo_usuario">
              <div class="mb-3 mt-3" id="tipo_usuario">
                <label for="tipo_usuario">Tipo de usuario</label>
                <br>
                <select class="select-9" name="tipoUsuario">
                  <option value="1">Cliente</option>
                  <option value="2">Profesional</option>
                  <option value="3">Administrador</option>
                </select>
              </div>
            </div>

            <div class="flex num_celular">
              <div class="mb-3 mt-3">
                <label for="number">Ingresa tu numero de celular</label>
                <input type="number" class="form-control" id="numero" placeholder="Número de telefono" name="num_celular" >
              </div>
            </div>
          </div>

          <div class="mb-3 mt-3">
            <label id="documento" for="documento">Tipo de documento</label>
              <div class="container-flex">
                <select class="select-1" name="tipo_documento">
                  <option value="1">C.C.</option>
                  <option value="2">C.E.</option>
                  <option value="3">P.B.</option>
                </select>
                <input type="number" class="form-control" id="num" placeholder="Ingresa el numero de documento" name="num_doc" >
              </div>
          </div>
          <label for="fecha_dia">Fecha de nacimiento</label>
          <br>
          
          <div class="container-flex">
            <input type="date" class="form-control" id="fecha" name="fecha_dia">
          </div>

          <div class="container-flex">
            <div class="flex contrasena">
              <div class="mb-3 mt-3" id="contrasena">
                <label for="password">Crea tu contraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" required>
              </div>
            </div>
          </div>

          <div class="container-flex">
            <div class="mb-3 mt-3" id="tipo_usuario">
              <label for="tipo_metodo">Elija su metodo de pago</label>
              <br>
              <select class="select-9" name="tipoMetodo">
                <option value="1">Banco</option>
                <option value="2">Pse</option>
                <option value="3">Tarjeta_credito</option>
                <option value="4">Tarjeta_debito</option>
              </select>
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

      </div>
    </form>
  </div>

</body>
</html>
