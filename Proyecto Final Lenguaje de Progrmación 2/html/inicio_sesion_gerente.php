<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesion gerente</title>
    <link rel="stylesheet" href="/styles/inicio_sesion_gerente.css" />
    <link rel="shortcut icon" href="/img/descarga.jpg" type="image/x-icon" />
  </head>
  <body>
    <div class="login">
      <form action="" method="post">
        <p>
          <!--php-->
          <?php
            include('conexion.php');
            include('controlador_gerente.php');        
          ?>
        </p>

        <h1>Login</h1>
        <div class="usuario-contraseña">
          <input
            type="tel"
            name="telefono"
            placeholder="digite su numero de telefono"
          />
        </div>
        <div class="usuario-contraseña">
          <input
            type="password"
            name="contrasena"
            placeholder="Digite su contraseña"
          />
        </div>
        <div>
          <input type="submit" class="button" name="enviar" value="enviar" />
        </div>
      </form>
    </div>
  </body>
</html>
