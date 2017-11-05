<?php
include_once "funciones.php";
include_once "class/conexion.php";
echo var_dump($_POST);
if(validarEmail($_POST["Email"])){
doConect();
closeConn();
  mail($_POST["Email"],"Recupera tu contraseña con el link","http://www.sdg-kiosco.com/reset-pass.php");
}

 ?>
