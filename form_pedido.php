<!DOCTYPE html>
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
    <h2 class="col-8 mt-5 mb-5">Datos del Pedido</h2>
    <div class="form-group m-3">
      <label for="Productos">Productos:</label>
      <div id="Productos">
        <select name="id_producto[]" id="productos" class="form-control col-8">
          <option value="1">Leche</option>
          <option value="2">Huevo</option>
          <option value="3">Harina</option>
          <option value="4">Aceite</option>
        </select>

        <input
          type="number"
          class="form-control col-4 mb-3"
          name="Cantidad_producto[]"
          id="cantidades"
          placeholder="Cantidad"
          required
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
        required
      >
        <option value="1">Efectivo</option>
        <option value="2">Cheque</option>
        <option value="3">Tarjeta débito</option>
        <option value="4">Tarjeta crédito</option>
      </select>

      <button type="submit" class="btn btn-success">Realizar Pedido</button>
    </div>

    <script>
      // Función para agregar campos de productos al formulario
      function agregarProducto() {
        var productosDiv = document.getElementById("Productos");

        var productoDiv = document.createElement("div");
        productoDiv.className = "form-group";

        var productoSelect = document.createElement("select");
        productoSelect.className = "form-control col-8";
        productoSelect.name = "id_producto[]";

        var productos = ["Leche", "Huevo", "Harina", "Aceite"];
        for (var i = 0; i < productos.length; i++) {
          var option = document.createElement("option");
          option.value = i + 1;
          option.text = productos[i];
          productoSelect.appendChild(option);
        }

        var cantidadInput = document.createElement("input");
        cantidadInput.type = "number";
        cantidadInput.className = "form-control col-4";
        cantidadInput.name = "Cantidad_producto[]";
        cantidadInput.placeholder = "Cantidad";
        cantidadInput.required = true;

        productoDiv.appendChild(productoSelect);
        productoDiv.appendChild(cantidadInput);

        productosDiv.appendChild(productoDiv);
      }
    </script>
  </body>
</html>
