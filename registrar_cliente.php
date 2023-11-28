<?php

    if(!empty($_POST["btningresar1"])){
        if (empty($_POST["Nombre_cliente"]) or empty($_POST["Apellido_cliente"]) or empty($_POST["Telefono_cliente"]) or empty($_POST["Direccion_cliente"]) or empty($_POST["Contraseña_cliente"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Nombre_cliente = $_POST['Nombre_cliente'];
            $Apellido_cliente = $_POST['Apellido_cliente'];
            $Telefono_cliente = $_POST['Telefono_cliente'];
            $Direccion_cliente = $_POST['Direccion_cliente'];
            $Contraseña_cliente = $_POST['Contraseña_cliente'];
        
            include("conexion.php");

            $lel = $conn->query("SELECT * FROM cliente WHERE Telefono_cliente ='$Telefono_cliente'");
            if ($datos = $lel->fetch_object()) {
                echo '<div class="alert alert-danger">EL USUARIO YA EXISTE</div>';
            } else {
                $sql = "INSERT INTO Cliente (Nombre_cliente, Apellido_cliente, Telefono_cliente, Direccion_cliente, Contraseña_cliente) VALUES ('$Nombre_cliente', '$Apellido_cliente', '$Telefono_cliente', '$Direccion_cliente', '$Contraseña_cliente')";

                mysqli_query($conn, $sql);
    
                mysqli_close($conn);
                echo '<div class="alert alert-info">REGISTRADO EXISOTASAMENTE</div>';
            }
        }
    }

?>