<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Style/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container login-container">
    <div class="login-form">
      <h1 class="text-center">Bienvenido!</h1>
      <h3 class="text-center">Inicia Sesión</h3>
      <img src="./img/IconoUser.png" alt="" class="imguser mt-3 mb-5 mx-auto d-block" height="70px">
      <form  action="credenciales.php" method="POST">
        <div class="form-group">
          <label for="emailuser">Username</label>
          <input type="text" class="form-control" id="emailuser" name="emailuser" placeholder="nombre de usuario" >
        </div>
        <div class="form-group">
          <label for="passwd">Contraseña:</label>
          <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Ingrese su contraseña" >
        </div>
        <button type="submit" id="btniniciar" name="btniniciar" class="btn btn-primary btn-block" >Iniciar Sesion</button>
        <a href="#" class="forgotpass">¿Olvidaste tu contraseña?</a>
      </form>
    </div>
  </div>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
