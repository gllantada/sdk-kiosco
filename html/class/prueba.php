<?php
include_once "clases.php";
$users=listarUsuarios();
echo "<pre>";
// echo var_dump($users);
echo "</pre>";
foreach ($users as $key => $value) {
echo $value["name"]." ".$value["id"];
echo "<BR>";

}

 ?>
