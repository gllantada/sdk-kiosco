<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styless-articulos.css">
    <link rel="stylesheet" href='css/styles.css'>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">

  </head>
  <body class"articulos">
    <div class="container5">
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
                <li><a href="#"class="ven1">Nueva venta</a></li>
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
                <li><a  href="#" class="add1">Usuarios</a></li>
                <li><a href="#" class="add1">Configuración</a></li>
              </ul>
            </li>
            <li><a href="preguntas_frecuentes.php">FAQ</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>

      </header>
      <div class="not-res">


      <h1>Error!!!!!!</h1>
      <h3>Esta Seccion de la Pagina Puede ser abierta unicamente en PC</h3><br>
      <h3>Disculpe las molestias ocasionadas...</h3>
  </div>
      <section class="tabla_art">
      <h2>Modificación de Artículos</h2>
      <div class="botonera">
        <button type="button" name="nuevo">Nuevo</button>
        <button type="button" name="nodificar">Modificar</button>
        <button type="button" name="borrar">Borrar</button>
        <button type="button" name="borrar">Buscar</button>
        <button type="button" name="borrar">Ordenar</button>
      </div>
      <div class="table-master">


      <table>
        <tr>
          <th>Código</th>
          <th>Descripción</th>
          <th>Marca</th>
          <th>Rubro</th>
          <th>Precio Venta</th>
          <th>Precio Contado</th>
          <th>Stock</th>
        </tr>
        <tr>
          <td>12334</td>
          <td>Coca cola 1,5L</td>
          <td>Coca Cola</td>
          <td>Gaseosas</td>
          <td>45</td>
          <td>37</td>
          <td>20</td>
        </tr>
        <tr>
          <td>12368798733</td>
          <td>Sprite 2,25L</td>
          <td>Coca Cola</td>
          <td>Gaseosas</td>
          <td>47</td>
          <td>39</td>
          <td>16</td>
        </tr>
        <tr>
          <td>123656543</td>
          <td>Coca Cola 600ml</td>
          <td>Coca Cola</td>
          <td>Gaseosas</td>
          <td>25</td>
          <td>19</td>
          <td>30</td>
        </tr>
        <tr>
          <td>cabecera</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
          <td>cabecera</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
        </tr>
        <tr>
          <td>cabecera</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
          <td>cabecera</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
          <td>cuerpo</td>
        </tr>
      </table>
      </div>
    </section>
    </div>
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
</html>
