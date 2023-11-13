<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesion Vendedor</title>
    <link rel="stylesheet" href="../styles/inicio_sesion_vendedor.css" />
    <link rel="shortcut icon" href="../img/descarga.jpg" type="image/x-icon" />
  </head>
  <body>
    <div class="login">
      <form method="post">
        <h1>Login</h1>
        <?php
        include("conexion.php");
        include("controlador_vendedor.php");
        ?>
        <div class="usuario-contraseña">
          <input
            type="tel"
            name="telefono"
            placeholder="Digite su telefono"
            required
          />
        </div>
        <div class="usuario-contraseña">
          <input
            type="password"
            name="contraseña"
            placeholder="Digite su contraseña"
            required
          />
        </div>
        <div>
          <input type="submit" name="Login" value=" Login" class="button" />
        </div>
      </form>
    </div>
  </body>
</html>
