<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datos Cliente</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div id="div1" class="container mt-5">
      <div class="row">
        <div class="col-5">
          <h2 class="mb-5">Registrarse</h2>
          <?php
          include("registrar_cliente.php");
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="Nombre_cliente">Nombre:</label>
              <input
                type="text"
                class="form-control"
                id="Nombre_cliente"
                name="Nombre_cliente"
              />
            </div>
            <div class="form-group">
              <label for="Apellido_cliente">Apellidos:</label>
              <input
                type="text"
                class="form-control"
                id="Apellido_cliente"
                name="Apellido_cliente"
              />
            </div>
            <div class="form-group">
              <label for="Telefono_cliente">Teléfono:</label>
              <input
                type="text"
                class="form-control"
                id="Telefono_cliente"
                name="Telefono_cliente"
              />
            </div>
            <div class="form-group">
              <label for="Direccion_cliente">Dirección:</label>
              <input
                type="text"
                class="form-control"
                id="Direccion_cliente"
                name="Direccion_cliente"
              />
            </div>
            <div class="form-group">
              <label for="Contraseña_cliente">Contraseña:</label>
              <input
                type="password"
                class="form-control"
                id="Contraseña_cliente"
                name="Contraseña_cliente"
              />
            </div>
            <div class="form-group">
              <input name="btningresar1" type="submit" class="btn btn-primary" value="ingresar">
            </div>
          </form>
        </div>

        <div class="linea-separadora"></div>

        <div id="div2" class="col-5">
            <form action="" method="POST">
            <h2 class="mb-5">Ingresar</h2>
            <?php
            include("conexion.php");
            include("ingresar.php");
            ?>
            <div class="form-group">
              <label for="Telefono_cliente">Telefono: </label>
              <input
                type="text"
                class="form-control"
                id="Telefono_cliente"
                name="Telefono_cliente"
              />
            </div>
            <div class="form-group">
              <label for="Contraseña_cliente">Contraseña:</label>
              <input
                type="password"
                class="form-control"
                id="Contraseña_cliente"
                name="Contraseña_cliente"
              />
            </div>
            <div class="form-group">
              <input name="btningresar2" type="submit" class="btn btn-primary" value="ingresar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
