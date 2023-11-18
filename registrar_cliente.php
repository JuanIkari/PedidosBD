<?php
    $Nombre_cliente = $_POST['Nombre_cliente'];
    $Apellido_cliente = $_POST['Apellido_cliente'];
    $Telefono_cliente = $_POST['Telefono_cliente'];
    $Direccion_cliente = $_POST['Direccion_cliente'];
    $Email_cliente = $_POST['Email_cliente'];

    include("conexion.php");

    $sql = "INSERT INTO Cliente (Nombre_cliente, Apellido_cliente, Telefono_cliente, Direccion_cliente, Email_cliente) VALUES ('$Nombre_cliente', '$Apellido_cliente', '$Telefono_cliente', '$Direccion_cliente', '$Email_cliente')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">
<body>
    <script type = "text/javascript">
        alert("Cliente registrado exitosamente");
        window.location.href = "form_cliente.php";
    </script>
</body>
</html>