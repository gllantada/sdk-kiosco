<?php
  require_once "funciones.php";

  if(validarLogin($_POST)){
    redirect("home.php",true);
  }
  else {
    redirect("index.php",true);
  }



?>
