<?php
include("conexion.php");

// Verificar si se ha proporcionado un valor de producto en la solicitud
if (isset($_GET['producto'])) {
    $productoSeleccionado = $_GET['producto'];

    // Realizar la consulta para obtener la información del producto seleccionado
    $consulta = "SELECT * FROM Producto WHERE Id_producto = '$productoSeleccionado'";
    $resultado = mysqli_query($conn, $consulta);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        $producto = mysqli_fetch_assoc($resultado);

        // Verificar si se encontró información para el producto seleccionado
        if ($producto) {
            ?>
            <h3 class="nombre"><?php echo $producto['Nombre_producto']; ?></h3>
            <div class="info">
              <img src="assets/images/<?php echo $producto['Id_producto']; ?>.jpeg" alt="Imagen del Producto">
                <p class="descripcion mt-2"><?php echo $producto['Descripcion_producto']; ?></p>
                <p class="precio text-left">$<?php echo $producto['Precio_producto']; ?></p>
            </div>
            <?php
        } else {
            echo "";
        }
    } else {
        echo "Error en la consulta SQL: " . mysqli_error($conn);
    }

    // Liberar el conjunto de resultados
    mysqli_free_result($resultado);
} else {
    echo "No se proporcionó un valor de producto.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

