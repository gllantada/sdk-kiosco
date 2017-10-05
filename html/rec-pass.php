<?php
@include_once "funciones.php";
echo var_dump($_POST);
if(validarEmail($_POST["Email"])){

  mail($_POST["Email"],"Recupera tu contraseña con el link","localhost/reset-pass.php");
}

 ?>
