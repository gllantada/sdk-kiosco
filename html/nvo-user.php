<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-contacto.css">
    <link rel="stylesheet" href="css/styles-nvo-user.css">
  </head>
  <body>
    <?php @include "header.php"; ?>
    <h3>CREAR USUARIO</h3>
<div class="main-contacto">
  <form class="contacto" action="index.html" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre....." >
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" placeholder="Apellido....." >
    <label for="dni">DNI: </label>
    <input type="text" name="dni" placeholder="DNI....." >
    <label for="tel">Teléfono: </label>
    <input type="text" name="tel" placeholder="Telefono....." >
    <label for="email">Email: </label>
    <input type="text" name="email" placeholder="Email....." >
<div class="botonera">


    <input class="buton" type="submit" name="crear" value="Crear">
    <input class="buton" type="submit" name="descartar" value="descartar">
</div>
  </form>

</div>







    <?php @include "footer.php"; ?>
  </body>
</html>
