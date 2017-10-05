<?php
  require_once "funciones.php";

  if(validarLogin($_POST)){
    redirect("home.php");
  }
  else {
    redirect("index.php");
  }

  

?>
