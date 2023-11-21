<?php
session_start();
include("conexion.php");

$telefono_cliente = $_SESSION["Telefono_cliente"];

if (!empty($_POST['btnpedido'])) {
    $num_pedido = rand(1, 1000);
    $id_producto = $_POST['productos'];
    $cantidad_producto = $_POST['Cantidad_productos'];
    $forma_pago_pedido = $_POST['Forma_pago_pedido'];

    // Obtener el precio del producto
    $consulta_precio = "SELECT Precio_producto FROM Producto WHERE Id_producto = '$id_producto'";
    $resultado_precio = mysqli_query($conn, $consulta_precio);

    // Verificar si la consulta fue exitosa antes de intentar obtener el precio
    if ($resultado_precio) {
        $fila_precio = mysqli_fetch_assoc($resultado_precio);
        $precio_producto = $fila_precio['Precio_producto'];

        // Calcular el total del pedido
        $total_pedido = $precio_producto * $cantidad_producto;

        // Insertar en la tabla Pedido
        $sql = "INSERT INTO Pedido (Num_pedido, Telefono_cliente, Id_producto, Cantidad_pedido, hora_pedido, Total_pedido, Forma_pago_pedido, Estado_pedido) VALUES ('$num_pedido', '$telefono_cliente', '$id_producto', '$cantidad_producto', NOW(), '$total_pedido', '$forma_pago_pedido', 'En proceso')";
        
        // Ejecutar la consulta
        mysqli_query($conn, $sql);

        // Cerrar la conexión
        mysqli_close($conn);

        echo '<div class="alert alert-info">PEDIDO REALIZADO CON ÉXITO</div>';
    } else {
        // Manejar el error de la consulta
        echo '<div class="alert alert-danger">Error al obtener el precio del producto</div>';
    }
}
?>

