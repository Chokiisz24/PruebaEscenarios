<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pasos</title>
    <link rel="stylesheet" href="../Style/pasos.css">
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
                            <a class="nav-link" id="crear" href="home-crear.php">Crear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="crear" href="status.php">Estados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="crear" href="pasos.php">Pasos</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="pt-4 text-light" id="logopasos">
        <img src="../img/pasos.png" class="center" width="60px">
        <h1 class="m-2">PASOS</h1>
    </div>
    <form action="../credenciales.php" method="POST">
        <div class="container">
            <div class="formulario-content">
                <h1 class="text-center text-light mb-3">Crear Pasos</h1>
                <div class="form-floating">
                <select class="form-select" name="tipo" id="tipo">
                    <option>Seleccione</option>
                    <option value="Entrada" require>Entrada</option>
                    <option value="Salida" require>Salida</option>
                </select>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="pasos" id="pasos" class="form-control" placeholder="">
                    <label for="floatingInput1">Pasos</label>
                </div>
                <div class="w-33">
                    <div class="center text-light">
                        <button type="submit" class="btn">GUARDAR</button>
                    </div>
                </div>
                <h1 class="text-center text-light mb-3 pt-4">Crear Archivo</h1>
                <form action="../credenciales.php" method="post">
                    <div id="hero" class="mb-3" name="media">
                        <label for="input-file" id="drop-area">
                        <input type="file" name="fileb" value="" id="input-file" hidden>
                        <div id="img-view">
                            <img src="../img/inputfile.png" height="100px">
                            <p>Da click o arrastra un archivo para subirlo</p>
                            <span>Sube cualquier archivo desde tu escritorio</span>
                        </div>
                        <div id="nombre" name="nombre"></div>
                    </label>
                </div>
                <div class="w-33">
                    <div class="center text-light">
                        <button type="submit" class="btn">GUARDAR</button>
                    </div>
                </div>
                </form>


            </div>
        </div>



            
            
            
            
                
        // Captura el contenido del div y lo coloca en el campo oculto
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="../js/home-crear.js"></script>
        
</body>

</html>