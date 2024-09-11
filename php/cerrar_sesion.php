<?php
    //Despues de iniciar la sesion, se cierra la sesion y se redirecciona al inicio de sesion
    session_start();
    session_destroy();
    header("location: ../index.php");

?>