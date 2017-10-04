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
    <article class="usuarios">
      <h2>Registro de nuevo usuario</h2>
      <?php echo (isset($_COOKIE['error']) && !empty($_COOKIE['error'])) ? $_COOKIE['error'] : ""; ?>
      <?php echo (isset($_COOKIE['success']) && !empty($_COOKIE['success'])) ? $_COOKIE['success'] : ""; ?>

      <form action="guardar.php" method="post" enctype="multipart/form-data">

        <input
          type="text"
          name="name"
          id="name"
          placeholder="Nombre"
          value="<?php echo (isset($_COOKIE['name']) && !empty($_COOKIE['name'])) ? $_COOKIE['name'] : ""; ?>">
        <br><br>

        <input
          type="text"
          name="lastname"
          id="lastname"
          placeholder="Apellido"
          value="<?php echo (isset($_COOKIE['lastname']) && !empty($_COOKIE['lastname'])) ? $_COOKIE['lastname'] : ""; ?>">
        <br><br>

        <input
          type="text"
          name="username"
          id="username"
          placeholder="Nombre de usuario"
          value="<?php echo (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) ? $_COOKIE['username'] : ""; ?>">
        <br><br>

        <input
          type="email"
          name="useremail"
          id="useremail"
          placeholder="Correo electronico"
          value="<?php echo (isset($_COOKIE['useremail']) && !empty($_COOKIE['useremail'])) ? $_COOKIE['useremail'] : ""; ?>">
        <br><br>

        <input
          type="password"
          name="pass"
          id="pass"
          placeholder="Contraseña">
        <br><br>

        <input
          type="password"
          name="equal_pass"
          id="equal_pass"
          placeholder="Repita la contraseña">
        <br><br>

        <input
          type="file"
          name="profile_pic"
          id="profile_pic" accept="image/*">
        <br><br>

        <button type="submit">
          Guardar
        </button>

      </form>

    </article>

  </body>
</html>