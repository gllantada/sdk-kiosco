<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contactenos</title>
    <link rel="stylesheet" href="css/styles-contacto.css">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <meta name="viewport" content="width=device-width initial-scale=1">
  </head>
  <body>
  <div class="container5">
<?php @include "header.php"; ?>

    <div class="main_contacto">
      <h1>Contactenos</h1>
      <form class="contacto" action="" method="post">
        <label for=""> Nombre:*</label>
        <input type="text" name="" value="" placeholder="Nombre">

        <label for="">Email:*</label>
        <input type="email" name="" value="" placeholder="E-mail"required>
        <label for="">Asunto</label>
        <input type="text" name="" value=""placeholder="Titulo">
        <br>
        <textarea name="Mensaj" rows="8" cols="80"placeholder="Aqui escriba su consulta..."></textarea>
        <br>
        <button type="submit" name="button"class="enviar">Enviar Mensaje</button>
      </form>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </body>
</html>
