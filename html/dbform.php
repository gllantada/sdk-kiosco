<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/dbform.css">
    <link rel="stylesheet" href="css/styles-contacto.css">

    <link rel="stylesheet" href="css/styles.css">

    <title>Erro en Base de Datos!!!</title>
  </head>
  <body>
    <form class="" action="db_create.php" method="post">
      <?php
session_start();
if(isset($_SESSION["db"])){
if($_SESSION["db"]==true){
  echo "La base de Datos fue creada con Exito!!";
  echo "<br>";
}else{
  echo "Ups. te falto crear la base de datos ";
  echo "<br>";
  $_SESSION["table"]=false;
  $_SESSION["jason"]=false;
  $_SESSION["error_tbl"]=false;
}
if(isset($_SESSION["table"])){
if($_SESSION["table"]==true && $_SESSION["db"]==true){
  echo "La tabla usuarios Fue creada con Exito!!!";
echo "<br>";
  echo "ahora te falta migrar los usuarios ya creados";
  echo "<br>";
}else if($_SESSION["table"]==true){
echo "Te falto crear la Base de Datos!!";
}
if(isset($_SESSION["jason"])){
if($_SESSION["table"]==true && $_SESSION["db"]==true && $_SESSION["jason"]==true){
  Redirect();
}
if ($_SESSION["error_tbl"]) {
echo "Dios mio, de que estas echo? tenes que crear la base de datos antes que la tabla.";
}}}}
       ?>
       <h3>Si vas a completar con tus datos es importante que completes el host y el usuario. la contraseña puede estar vacia pero si no completas los 2 usa por defecto los que estan escritos
       </h3><br><br>
       <label for="host">Host: </label>
       <input type="text" name="host" value=""placeholder="localhost">
       <br><label for="user">Usuario: </label>
       <input type="text" name="user" value=""placeholder="root">
       <br>
       <label for="pass">Contraseña: </label>
       <input type="text" name="pass" value=""placeholder="">
<br>
<span class="botonera">
      <button type="submit" name="new_db">Crear Base</button>

      <button type="submit" name="new_tbl">Crear tabla</button>

      <button type="submit" name="migrar">Migrar de Jason</button>
      <button type="submit" name="destruir">Destruir</button>
</span>
    </form>

  </body>
</html>
