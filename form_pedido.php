<!DOCTYPE html>
<?php
   include("conexion.php");
   $query = mysqli_query($conn, "SELECT * FROM Producto");
    ?>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pedido</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 class="col-8 mt-5 mb-5">Realizar Pedido</h2>
    <?php
    include("procesar_pedido.php");
    ?>
    <div class="container">
        <div class="form-container">
            <form action="" method="post">
                <div class="form-group m-3">
                    <label for="Productos">Productos:</label>
                    <div id="Productos">

                        <select name="productos" id="productos" class="form-control col-4 mb-3">
                            <option value="0"></option>
                            <?php
          while($datos = mysqli_fetch_array($query)){
            ?>
                            <option value="<?php echo $datos['Id_producto']; ?>">
                                <?php echo $datos['Nombre_producto']; ?></option>
                            <?php
            }
          ?>

                        </select>

                        <input type="number" class="form-control col-4 mb-3" name="Cantidad_productos" id="cantidades"
                            placeholder="Cantidad" />
                    </div>
                </div>

                <div class="form-group m-3">
                    <label for="Forma_pago_pedido">Forma de pago:</label>
                    <select class="form-select" name="Forma_pago_pedido" id="Forma_pago_pedido">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Cheque">Cheque</option>
                        <option value="Tarjeta débito">Tarjeta débito</option>
                        <option value="Tarjeta crédito">Tarjeta crédito</option>
                    </select>
                    <input name="btnpedido" type="submit" class="btn btn-success" value="Realizar Pedido">
                </div>
            </form>
        </div>

        <div name="informacion" id="informacion">
          
        </div>
    </div>

    <script>
    // Obtener el elemento select
    var selectProductos = document.getElementById("productos");

    // Escuchar el evento change del select
    selectProductos.addEventListener("change", function() {
        // Obtener el valor seleccionado
        var productoSeleccionado = selectProductos.value;

        // Realizar una solicitud AJAX a obtener_informacion_producto.php (o tu script PHP correspondiente)
        // Pasar el productoSeleccionado como parámetro
        fetch('info.php?producto=' + productoSeleccionado)
            .then(response => response.text())
            .then(data => {
                // Actualizar el contenido de la div de información
                document.getElementById("informacion").innerHTML = data;
            })
            .catch(error => {
                console.error('Error al obtener información:', error);
            });
    });
    </script>

</body>

</html>