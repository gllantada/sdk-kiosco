<?php
require_once "funciones.php";
if(doSave($_POST, $_FILES)){
Redirect("home.php");
}
?>
