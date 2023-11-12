<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesion Vendedor</title>
    <link rel="stylesheet" href="/styles/inicio_sesion_vendedor.css" />
    <link rel="shortcut icon" href="/img/descarga.jpg" type="image/x-icon" />
  </head>
  <body>
    <div class="login">
      <form action="index.html" method="post">
        <h1>Login</h1>
        <div class="usuario-contraseña">
          <input
            type="text"
            name="usuario"
            placeholder="Digite su nombre de suario"
            required
          />
        </div>
        <div class="usuario-contraseña">
          <input
            type="password"
            name="contraseña"
            placeholder="Dgite su contraseña ontraseña"
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
