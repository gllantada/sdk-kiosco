<?php
  require_once "funciones.php";
session_start();
  $_SESSION["log"]=false;
  $_SESSION["name"]="juan";
  if(validarLogin($_POST)){

$_SESSION["log"]=true;
    redirect("home.php",true);
  }
  else {
    redirect("index.php",true);
  }



?>
