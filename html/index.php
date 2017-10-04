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
          <form class="login_form" action='validar_login.php' method='post'>
              <div class='container1'>
                <label>Usuario: </label>
                  <input class ="campo" type='text' name='username' id='username' placeholder="Usuario..." /><br/>
              </div>
              <div class='container2'>
                <label>Clave: </label>
                  <input class= "campo" type='password' name='password' id='password' placeholder="Clave..."/>
              </div>
              <!-- <label for="recordar"> Recordame</label> -->
              <div class="container3">
                <!-- <input type="checkbox" name="recordar" value=""> -->
                <input class="boton_login" type='submit' name='Submit' value='Iniciar sesión' />
                <br>
              </div>
          </form>
          <a class="recordar_pass" href="recuperar-pass.php">¿Olvidó su contraseña?</a>
        </div>
    </div>
  </body>
</html>
