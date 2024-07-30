<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Style/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <div id="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <a class="navbar-brand text-light" href="#">
                        <img src="../img/iconbug.png" alt="" width="25" class="d-inline-block align-text-top">Bug Free
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" id="projectos" href="#">Projectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="aplicaciones" href="#">Aplicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="crear" href="#">Crear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="crear" href="status.php">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="../Controller/escenario.controler.php" method="POST">
        <div class="container">
            <div class="formulario-content">
                <h1 class="text-center text-light mb-3">Crear Escenarios</h1>
                <div class="form-floating mb-3">
                    <input type="text" name="titulo" class="form-control"  placeholder="">
                    <label for="floatingInput1">Titulo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="descripcion" class="form-control"placeholder="">
                    <label for="floatingInput2">Descripcion</label>
                </div>
                <div class="input-group">
                    <select class="form-select">
                        <option selected>Seleccione</option>
                        <option value="1">Entrada</option>
                        <option value="2">Salida</option>
                    </select>
                    <div class="form-floating flex-grow-1">
                        <input type="text" class="form-control"placeholder="">
                        <label for="floatingInput3">Pasos</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="">
                    <label for="floatingInput4">Tester Asignado</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="" disabled>
                    <label for="floatingInput4">Folio</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="">
                    <label for="floatingInput4">Fecha</label>
                </div>
                <div id="hero" class="mb-3">
                    <label for="input-file" id="drop-area">
                        <input type="file" accept="" id="input-file" hidden>
                        <div id="img-view">
                            <img src="../img/inputfile.png" height="100px">
                            <p>Da click o arrastra un archivo para subirlo</p>
                            <span>Sube cualquier archivo desde tu escritorio</span>
                        </div>
                        <div id="file-name"></div>
                    </label>
                </div>
                <div class="w-33">
                    <div class="center text-light">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/js/home-crear.js"></script>
</body>
</html>