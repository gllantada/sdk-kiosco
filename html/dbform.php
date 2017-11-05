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
<div class="textos">
  <h3>Recuerde que es necesario completar todos los datos, a excepción de la contraseña si no posee.</h3><br>
  <h3>Caso contrario, los valores serán los mostrados inicialmente.</h3><br>

      <?php
session_start();
if(isset($_SESSION["db"])){
if($_SESSION["db"]==true){
  echo "La base de datos fue creada con éxito!!";
  echo "<br>";
}else{
  echo "Ups, te faltó crear la base de datos. ";
  echo "<br>";
  $_SESSION["table"]=false;
  $_SESSION["jason"]=false;
  $_SESSION["error_tbl"]=false;
}
if(isset($_SESSION["table"])){
if($_SESSION["table"]==true && $_SESSION["db"]==true){
  echo "La tabla usuarios fue creada con éxito!!";
echo "<br>";
  echo "Ahora te falta migrar los usuarios ya creados.";
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

       </div>
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
