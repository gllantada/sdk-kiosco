<?php
// incluyo oja de funciones
  require_once("funciones.php");


// si el usuario esta logueado redirecciono a pagina de inicio
  // if(estaLogueado()) {
  //   header("location:home.php");exit;
  // }
//declaro array de errores vacio !
  $errores = [];

//si me envian algo por post, entro a este if
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
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema Gestion Kiosco</title>
    <link rel="stylesheet" href='css/styles-index.css'>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <div class="container5">
        <div class="home">
          <div class="logo_h1">
            <img src='imagenes/candy.svg' alt="logo" class="logo_index">
            <br><br>
                  <h1>      Sistema de</h1>
                   <br>
                  <h1> Gestión de Kiosco</h1>
                  <!-- <img src='imagenes/candy.svg' alt="logo" class="logo_index"> -->
          </div>
          <?php if(count($errores) > 0) { ?>
            <ul>
                <?php foreach($errores as $error) { ?>
                  <li>
                    <?=$error?>
                  </li>
                <?php } ?>
            </ul>
          <?php } ?>
          <form class="login_form" action='index.php' method='post'>
              <div class='container1'>
                <label>Email: </label>
                  <input class ="campo" type='text' name='mail' id='username' placeholder="Email..." /><br/>
              </div>
              <div class='container2'>
                <label>Contraseña: </label>
                  <input class= "campo" type='password' name='password' id='password' placeholder="Contraseña..."/>
              </div>

              <!-- <label for="recordar"> Recordame</label> -->
              <div class="container3">
                <!-- <input type="checkbox" name="recordar" value=""> -->
                <input class="boton_login" type='submit' name='Submit' value='Iniciar sesión' />
                <br>
              </div>
              <div class="container4">
                <input type="checkbox" name="recordame">Recordame
              </div>
          </form>
          <a class="recordar_pass" href="recuperar-pass.php">¿Olvidó su contraseña?</a>
        </div>
    </div>
  </body>
</html>
