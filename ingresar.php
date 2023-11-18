<?php
    if(!empty($_POST["btningresar"])){
        if (empty($_POST["Correo"] and empty($_POST[".Telefono"]))) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Correo = $_POST["Correo"];
            $Telefono = $_POST["Telefono"];
            $sql = $conn->query("SELECT * FROM cliente WHERE Email_cliente='$Correo' AND Telefono_cliente='$Telefono'");
            if ($datos = $sql->fetch_object()) {
                header("Location: form_pedido.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
            
        }
        
    }
?>