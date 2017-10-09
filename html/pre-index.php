<?php
@include_once "funciones.php";
session_start();
$_SESSION["log"]=false;
session_destroy();
redirect("index.php");
 ?>
