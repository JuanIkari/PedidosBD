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
    <link rel="stylesheet" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div id="div1" class="container mt-5">
      <div class="row">
        <div class="col-5">
          <h2 class="mb-5">Datos del Cliente</h2>
          <form action="registrar_cliente.php" method="post">
            <div class="form-group">
              <label for="Nombre_cliente">Nombre:</label>
              <input
                type="text"
                class="form-control"
                id="Nombre_cliente"
                name="Nombre_cliente"
                required
              />
            </div>
            <div class="form-group">
              <label for="Apellido_cliente">Apellido:</label>
              <input
                type="text"
                class="form-control"
                id="Apellido_cliente"
                name="Apellido_cliente"
                required
              />
            </div>
            <div class="form-group">
              <label for="Telefono_cliente">Teléfono:</label>
              <input
                type="text"
                class="form-control"
                id="Telefono_cliente"
                name="Telefono_cliente"
                required
              />
            </div>
            <div class="form-group">
              <label for="Direccion_cliente">Dirección:</label>
              <input
                type="text"
                class="form-control"
                id="Direccion_cliente"
                name="Direccion_cliente"
                required
              />
            </div>
            <div class="form-group">
              <label for="Email_cliente">Correo electrónico:</label>
              <input
                type="text"
                class="form-control"
                id="Email_cliente"
                name="Email_cliente"
                required
              />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
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
              <label for="Correo">Correo:</label>
              <input
                type="text"
                class="form-control"
                id="email"
                name="Correo"
              />
            </div>
            <div class="form-group">
              <label for="Telefono">Telefono:</label>
              <input
                type="password"
                class="form-control"
                id="input"
                name="Telefono"
              />
            </div>
            <div class="form-group">
              <input name="btningresar" type="submit" class="btn btn-primary" value="ingresar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
