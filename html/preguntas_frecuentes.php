<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Preguntas Frecuentes</title>

    <link rel="stylesheet" href="css/styless-faq.css">

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
  </head>
  <body>
    <div class="container5">
    <?php @include "header.php"; ?>
    <h1>Preguntas Frecuentes</h1>  <br>
    <div
    <div class="respuestas">
        <ol>
          <li class="preg1">El sistema no reconoce mi usuario.</li>
          <p class="rta1">No es normal que pase, pero a veces el sistema falla. No te preocupes, escribinos a soporte-sdk@gmail.com y te responderemos en breve! Es importante que nos escribas desde la dirección de mail con la que te registraste.</p><br>
          <li class="preg2">Al poner "¿Olvidó su contraseña?" no me la envía a mi mail.</li>
          <p class="rta2">Escribinos a soporte-sdk@gmail.com indicándonos tu nombre de usuario. En primera instancia reenviaremos la contraseña al mail con el que te registraste. En caso de no utilizar más ese correo procederemos a unas preguntas de seguridad.</p><br>
          <li class="preg3">El sistema no me permite eliminar artículos, sólo modificarlos.</li>
          <p class="rta3">Si estás intentando eliminar de a más de 1 (un) artículo, no vas a poder. Por el momento el sistema únicamente permite eliminar de un artículo a la vez. Estamos trabajando para en breve puedas eliminar varios productos a la vez!</p><br>
          <li class="preg4">¿Puedo modificarle el código a cada producto o viene por defecto?</li>
          <p class="rta4">Al agregar un nuevo producto, se le asigna un código por defecto. Pero podés modificarlo a tu gusto, haciéndo click derecho sobre el código.</p><br>
          <li class="preg5">¿Cómo hago para asignarle una imagen a cada producto?</li>
          <p class="rta5">Haciendo click en el botón "Modificar", te damos la opción de adjuntar una imagen a cada producto, tiene que ser cuadrada y que no supere los 70 KB. </p><br>
          <li class="preg6">No puedo ver el reporte de ganancia de cada producto, sólamente el total.</li>
          <p class="rta6">En la sección "Reporte de Caja" podés filtrar las ganancias según la marca, el rubro o el código de cada producto, además del total de todos los productos. </p><br>
          <li class="preg7">¿Cómo puedo filtrar las ventas por cada producto?</li>
          <p class="rta7">Al igual que la sección "Reporte de Caja", la sección "Consultar ventas", que se encuentra dentro del menú "Ventas", te permite filtrar las ventas según la marca, el rubro y el código de cada producto, además del total de todos los productos.</p><br>
          <li class="preg8">¿Puedo asociar más de un usuario por cuenta?</li>
          <p class="rta8">Sí. En el menú "Administración", hay una solapa de nombre "Usuarios" que te permite agregar hasta un máximo de 3 usuarios y administrarlos desde la misma cuenta.</p><br>
        </ol>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
      $('.rta1').hide();
      $('.preg1').click(function(){
        $('.rta1').slideToggle(350);
      });
</script><script>
    $('.rta2').hide();
    $('.preg2').click(function(){
      $('.rta2').slideToggle(350);
    });
</script><script>
    $('.rta3').hide();
    $('.preg3').click(function(){
      $('.rta3').slideToggle(350);
    });
</script><script>
    $('.rta4').hide();
    $('.preg4').click(function(){
      $('.rta4').slideToggle(350);
    });
</script><script>
    $('.rta5').hide();
    $('.preg5').click(function(){
      $('.rta5').slideToggle(350);
    });
</script><script>
    $('.rta6').hide();
    $('.preg6').click(function(){
      $('.rta6').slideToggle(350);
    });
</script><script>
    $('.rta7').hide();
    $('.preg7').click(function(){
      $('.rta7').slideToggle(350);
    });
</script><script>
    $('.rta8').hide();
    $('.preg8').click(function(){
      $('.rta8').slideToggle(350);
    });
</script>
<?php @include "footer.php"  ?>
  </body>
</html>
