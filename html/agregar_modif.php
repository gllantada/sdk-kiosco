<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styless-articulos.css">

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">

  </head>
  <body class"articulos">
    <div class="container5">
      <?php @include "header.php"; ?>
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
        <thead>
          <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Rubro</th>
            <th>Precio Venta</th>
            <th>Precio Contado</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>
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
        </tbody>
      </table>
      </div>
    </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<?php @include "footer.php"  ?>
  </body>

</html>
