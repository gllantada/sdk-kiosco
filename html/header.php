<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles-home.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">

        <link rel="stylesheet" href='css/styles.css'>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <header class="main_header">
      <div class="init">
        <h1>SDK KIOSCO</h1>
        <img src='imagenes/candy.svg' alt="logo" class="logo_index">
      </div>
      <a href="#" class="toggle-nav">
        <span class="ion-navicon-round"></span>
      </a>
      <nav class="nav_home">
        <ul>
          <li><a href="home.php">Inicio</a></li>
          <li><a href="#"class="sub-articulos">Artículos</a>
            <ul>
              <li><a href="agregar_modif.php"class="art">Agregar / Modificar</a></li>
              <li><a href="#"class="art">Actualizar precios</a></li>
            </ul>
          </li>
          <li><a href="#"class="comp">Compras</a>
            <ul>
              <li><a href="#"class="comp1">Ingreso de mercadería</a></li>
              <li><a href="#"class="comp1">Actualizar precios</a></li>
            </ul>
          </li>
          <li><a href="#"class="ven">Ventas</a>
            <ul>
              <li><a href="nueva_venta.php"class="ven1">Nueva venta</a></li>
              <li><a href="#"class="ven1">Consultar ventas</a></li>
            </ul>
          </li>
          <li><a href="#"class="caja">Caja</a>
            <ul>
              <li><a href="#"class="caja1">Caja diaria</a></li>
              <li><a href="#"class="caja1">Reporte de Caja</a></li>
            </ul>
          </li>
          <li><a href="#" class="add">Administración</a>
            <ul>

              <li><a  href="admin_usuarios.php" class="add1">Usuarios</a></li>
              <li><a href="#" class="add1">Configuración</a></li>
            </ul>
          </li>
          <li><a href="index.php">Salir</a></li>
        </ul>
      </nav>

    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script>
  		$('.toggle-nav').click(function (){
  			$('.nav_home').slideToggle(350);
  		});
      </script>
      <script>
      $('.art').hide();
      $('.sub-articulos').click(function(){
        $('.art').slideToggle(350);
      });
      </script>
      <script>
      $('.caja1').hide();
      $('.caja').click(function(){
        $('.caja1').slideToggle(350);
      });
      </script>
      <script>
       $('.ven1').hide();
        $('.ven').click(function(){
          $('.ven1').slideToggle(350);
      });
      </script>
      <script>
          $('.add1').hide();
          $('.add').click(function(){
            $('.add1').slideToggle(350);
          });
  	</script>
    <script>
        $('.comp1').hide();
        $('.comp').click(function(){
          $('.comp1').slideToggle(350);
        });
  </script>
  </body>
