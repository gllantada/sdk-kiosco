<?php
// traigo hoja de funciones
  require_once("funciones.php");
// si la persona esta logueada, la redirijo al inicio.

  //declaro variables vacias para persistir datos

  $nombre = "";
  $apellido = "";
  $usuario = "";
  $mail = "";

// declaro  array de errores vacio
  $errores = [];
// si me llega algo por post entro a este if
  if ($_POST) {
    // valido los datos del form y me guardo los errores en $errores
    $errores = validarInformacion($_POST);
// si no tengo errores, entro a este if
    if (count($errores) == 0) {
// guardo la imagen y en caso de que haya problemas, guardo el error aqui
      $errores = guardarImagen("imgPerfil", $errores);
// si tampoco hubo error en la carga de la imagen entro a este if
      if (count($errores) == 0) {
// creo un array con los datos por $_POST y lo guardo en $usuario
        $usuario = crearUsuario($_POST);
// guardo ese array en mi JSON
        guardarUsuario($usuario);
// redirecciono a felicidad
        header("Location:felicidad.php");exit;
      }
    }

// si no tuve errores de validacion, persisto los datos.
    if (!isset($errores["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    if (!isset($errores["edad"])) {
        $edad = $_POST["edad"];
    }
    if (!isset($errores["mail"])) {
        $mail = $_POST["mail"];
    }
    if (!isset($errores["usuario"])) {
        $usuario = $_POST["usuario"];
    }

  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adminstracion de Usuarios</title>
    <link rel="stylesheet" href="css/styless.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
  </head>
  <body>
    <?php @include "header.php"?>
    <?php if(count($errores) > 0) { ?>
      <ul>
          <?php foreach($errores as $error) { ?>
            <li>
              <?=$error?>
            </li>
          <?php } ?>
      </ul>
    <?php } ?>
    <article class="usuarios">
      <h2>Registro de nuevo usuario</h2>
      <form class="" action="test.php" method="post" enctype="multipart/form-data">
        <div class="">
          <label>Nombre:</label>
          <input type="text" name="nombre" value="<?=$nombre?>">
        </div>
        <div class="">
          <label>Usuario:</label>
          <input class="" type="text" name="usuario" value="<?=$usuario?>">
        </div>
        <div class="">
          <label>Mail:</label>
          <input type="text" name="mail" value="<?=$mail?>">
        </div>
        <div class="">
          <label>Contraseña:</label>
          <input type="password" name="password" value="">
        </div>
          <div class="">
            <label>Confirmar contraseña:</label>
            <input type="password" name="cpassword" value="">
          </div>
        <div class="">
          <label for="">Imagen de perfil:</label>
          <input type="file" name="imgPerfil" value="">
        </div>
        <div class="">
          <input type="submit" name="enviar" value="Enviar">
        </div>
      </form>

    </article>

  </body>
</html>
