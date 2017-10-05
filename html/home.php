<?php
// me traigo hoja de funciones
  require_once("funciones.php");
// si NO esta logueado, redirijo al login
  if(!estaLogueado()) {
    header("location:index.php");exit;
  }
  // si esta logueado, busco al usuario por el id que me llega por $_GET
  // y me lo guardo en la variable $usuario
  // $_SESSION["idUser"] = $usuario["id"];
  $id = $_GET["id"];
  $usuario = buscarPorId($id);
  if ($_POST) {
	 // en el array "errores", declarado vacio anteriormente, guardo los errores que devuelve la validacion, solo en caso de que existan los mismos.
    $errores = validarLogin($_POST);

// si valirdarLogin , no me devuelve ningun error, es decir, SI MI ARRAY ERRORES SE ENCUENTRA VACIO, entro al if
    if(empty($errores)) {
	// me guardo en la variable $usuario los datos del usuario que se quiere loguear
      $usuario = buscarPorMail($_POST["mail"]);
	 // guardo al ID del usuario en session.
      loguear($usuario);

	  // si checkean "recordarme" guardo al usuario en su cookie por 30 dias
      if (isset($_POST["recordame"])) {
        setcookie("idUser", $usuario["id"], time() + 60 * 60 * 24 * 30);
      }
// redirecciono al usuario a su perfil
      header("location:home.php?id=" . $usuario["id"]);exit;
    }
  }
// me guardo en la variable $file, la foto del usuario

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles-home.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <div class="container5">
      <?php @include "header.php"; ?>
        <div class="main_home">
          <h1>Bienvenido <?=$usuario["nombre"]?></h1>
          <p>Gracias por utilizar nuestro sistema de gestión. <br>
          Navegue por los diferentes menúes, en la sección FAQ se encuentran las preguntas más frecuentes. <br>
          Desde la opción "Contacto" puede enviarnos cualquier duda, reclamo, sugerencia o información que desee.</p>
        </div>
        <img src="imagenes/kiosco-imagen.jpg" alt="">
    </div>
    <?php @include "footer.php"  ?>
  </body>
</html>
