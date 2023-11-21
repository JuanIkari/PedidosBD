<!DOCTYPE html>
<?php
    include("conexion.php");
    $query = mysqli_query($conn, "SELECT Id_producto, Nombre_producto FROM Producto")
    ?>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pedido</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h2 class="col-8 mt-5 mb-5">Realizar Pedido</h2>
    <?php
    include("procesar_pedido.php");
    ?>
    <form action="" method="post">
    <div class="form-group m-3">
      <label for="Productos">Productos:</label>
      <div id="Productos">

        <select name="productos" id="productos" class="form-control col-8">

          <?php
          while($datos = mysqli_fetch_array($query)){
            ?>
            <option value="<?php echo $datos['Id_producto']; ?>"><?php echo $datos['Nombre_producto']; ?></option>
            <?php
            }
          ?>
        </select>

        <input
          type="number"
          class="form-control col-4 mb-3"
          name="Cantidad_productos"
          id="cantidades"
          placeholder="Cantidad"
        />
      </div>
      <button type="button" class="btn btn-primary" onclick="agregarProducto()">
        Agregar Producto
      </button>
    </div>

    <div class="form-group m-3">
      <label for="Forma_pago_pedido">Forma de pago:</label>
      <select
        class="form-select"
        name="Forma_pago_pedido"
        id="Forma_pago_pedido"
      >
        <option value="Efectivo">Efectivo</option>
        <option value="Cheque">Cheque</option>
        <option value="Tarjeta débito">Tarjeta débito</option>
        <option value="Tarjeta crédito">Tarjeta crédito</option>
      </select>

      <input name="btnpedido" type="submit" class="btn btn-success" value="Realizar Pedido">
    </div>
    </form>

    <script>
  // Función para agregar campos de productos al formulario
  function agregarProducto() {
    var productosDiv = document.getElementById("Productos");

    var productoDiv = document.createElement("div");
    productoDiv.className = "form-group";

    var productoSelect = document.createElement("select");
    productoSelect.className = "form-control col-8";
    productoSelect.name = "productos";

    <?php
    include("conexion.php");
    $getProductos = "SELECT * FROM Producto";
    $getProductos2 = mysqli_query($conn, $getProductos);

    while ($row = mysqli_fetch_array($getProductos2)) {
      $id_producto = $row["Id_producto"];
      $nombre_producto = $row["Nombre_producto"];
      $descripcion_producto = $row["Descripcion_producto"];
      $precio_producto = $row["Precio_producto"];
    ?>
      var option = document.createElement("option");
      option.value = "<?php echo $id_producto; ?>";
      option.text = "<?php echo $nombre_producto; ?>";
      productoSelect.appendChild(option);
    <?php
    }
    ?>

    var cantidadInput = document.createElement("input");
    cantidadInput.type = "number";
    cantidadInput.className = "form-control col-4";
    cantidadInput.name = "Cantidad_productos";
    cantidadInput.placeholder = "Cantidad";
    cantidadInput.required = true;

    productoDiv.appendChild(productoSelect);
    productoDiv.appendChild(cantidadInput);

    productosDiv.appendChild(productoDiv);
  }
</script>
 

  </body>
</html>
