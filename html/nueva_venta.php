<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/styles-nueva_venta.css">
  </head>
  <body>
    <?php @include "header.php" ?>
    <div class="header-venta">
    <label>Factura: </label><span>1</span>
    <label>Vendedor: </label><span>1</span>
    <label for="Fecha" style="border:1px solid">Fecha:
      <script>
  var f = new Date();
  document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
  </script></label>
    <article class="venta">
      <label for="articulo">Articulo </label><input type="search" name="articulo" placeholder="Nombre o codigo">
      <input type="button" name="" value="Buscar">
      <table>
        <thead>
          <th>Cantidad</th>
          <th>Codigo</th>
          <th>Descripcion</th>
          <th>Precio Unit.</th>
          <th>Precio Total</th>
        </tdead>
        <tbody>
          <tr>
            <td><input type="number" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
          <tr>
            <td><input type="number" value="" widtd="10px"></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
          <tr>
            <td><input type="number" value="" widtd="10px"></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
          <tr>
            <td><input type="number" value="" widtd="10px"></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
          <tr>
            <td><input type="number" value="" widtd="10px"></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
          <tr>
            <td><input type="number" value="" widtd="10px"></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="text" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
            <td><input type="number" name="" value=""></td>
          </tr>
        </tbody>
      </table>

    </article>
    <?php @include "footer.php" ?>

  </body>
</html>
