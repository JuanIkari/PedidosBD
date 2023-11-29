<?php
session_start();

    if(!empty($_POST["btningresar2"])){
        if (empty($_POST["Telefono_cliente"]) or empty($_POST["Contraseña_cliente"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Telefono_cliente = $_POST["Telefono_cliente"];
            $Contraseña_cliente = $_POST["Contraseña_cliente"];
            $sql = $conn->query("SELECT * FROM cliente WHERE Telefono_cliente ='$Telefono_cliente' AND Contraseña_cliente ='$Contraseña_cliente'");
            if ($datos = $sql->fetch_object()) {
                $_SESSION["Telefono_cliente"] = $datos->Telefono_cliente;
                header("Location: form_pedido.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
            
        }
        
    }
?>