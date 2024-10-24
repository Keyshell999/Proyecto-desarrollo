<?php

session_start(); //Inicia una sesión

//Verifica que la sesion no ha sido iniciada y muestra un mensaje redireccionando a la pagina de inicio de sesion
if (!isset($_SESSION['usuario'])) {
    echo
    '<script>
        alert("Por favor debes iniciar sesión primero");
        window.location.href = "index.php";
      </script>';
    session_destroy(); //destrulle la sesion
    die(); //Detiene la sentencia y no ejecuta demas codigo
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="index.js">
  <link rel="stylesheet" href="img/LOGO SR APP.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>Nuestros servicios</title>
</head>

<body class="cuerpo">

  <div class="container mt-3">

    <!--Menu desplegable-->
    <div class="menu" onclick="openNav()">
      <i class="material-icons" id="menu-des">menu</i>
    </div>

    <div id="mySidenav" class="sidenav">
      <a class="closebtn" onclick="closeNav()">&times;</a>
      <div class="linea">
        <div class="flex tipo">
          <a href="#">Mi perfil</a>
        </div>
        <div class="flex icon">
          <i class="material-icons left">account_circle</i>
        </div>
      </div>

      <div class="linea">
        <div class="flex tipo">
          <a href="#">Atencion al cliente</a>
        </div>
        <div class="flex icon">
          <i class="material-icons left">support_agent</i>
        </div>
      </div>

      <div class="linea">
        <div class="flex tipo">
          <a href="#">Acerca de SR APP</a>
        </div>
        <div class="flex icon">
          <i class="material-icons left">groups</i>
        </div>
      </div>

      <div class="linea">
        <div class="flex tipo">
          <a href="#">Preguntas frecuentes</a>
        </div>
        <div class="flex icon">
          <i class="material-icons left">contact_support</i>
        </div>
      </div>

      <!--Boton de cerrar sesion-->
      <div class="flex tipo">
        <div class="button">
          <a class="cerrar_s" href="controlador/cerrar_sesion.php">Cerrar sesión</a>
        </div>
      </div>


    </div>

    <div class="image">
      <img class="img-1" src="img/LOGO SR APP.jpg" alt="No se encontro la imagen">
    </div>
    <div class="titulo-servicios">
      <h2><b>Conoce nuestros Servicios</b></h2>
    </div>

    <div class="registro">

      <!--Lista de servicios-->
      <div class="container-flex">
        <div class="col-12">
          <div class="row fila-style p-3">
            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/tecnico.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Técnico</span>
                </a>
              </div>
            </div>


            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/electricista.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Electricista</span>
                </a>
              </div>
            </div>

            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/pintor.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Pintor</span>
                </a>
              </div>
            </div>
          </div>

          <div class="row fila-style p-3">
            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/carpintero.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Carpintero</span>
                </a>
              </div>
            </div>


            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/plomero.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Plomero</span>
                </a>
              </div>
            </div>

            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/limpieza.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Limpieza</span>
                </a>
              </div>
            </div>
          </div>

          <div class="row fila-style p-3">
            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/instalador.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Instalador</span>
                </a>
              </div>
            </div>


            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/albañil.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Albañil</span>
                </a>
              </div>
            </div>

            <div class="col-4">
              <div class="boton">
                <a class="btn-servicios button" href="#" target="_self">
                  <img class="img-menu" src="img/gas.jpg" alt="No se encontro la imagen">
                  <span class="tip-icon">Gas</span>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <footer>

      <!--Iconos de navegacion principales-->
      <div class="fixed">
        <div class="row fila-style p-3">
          <div class="col-4">
            <div class="boton">
              <a class="btn-servicios button" href="#" target="_self">
                <div class="icon-selector">
                  <i class="material-icons" id="footer">home</i>
                  <span class="selector">Home</span>
                </div>
              </a>
            </div>
          </div>


          <div class="col-4">
            <div class="boton">
              <a class="btn-servicios button" href="#" target="_self">
                <div class="icon-selector">
                  <i class="material-icons" id="footer">question_answer</i>
                  <span class="selector">Chats</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-4">
            <div class="boton">
              <a class="btn-servicios button" href="#" target="_self">
                <div class="icon-selector">
                  <i class="material-icons" id="footer">credit_card</i>
                  <span class="selector">Pagos</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
<script src="index.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous">
</script>

</html>