<?php
// Conectando, seleccionando la base de datos
require_once '../Controller/conexion.php';

$conn = Conexion::conectar();
$tabla = 'pasos';

// // Consulta para obtener tipos únicos
$stmt_tipo = $conn->prepare("SELECT DISTINCT p.tipo FROM $tabla p WHERE tipo = 'Entrada' or tipo = 'Salida'");
$stmt_tipo->execute();
$result = $stmt_tipo->setFetchMode(PDO::FETCH_ASSOC);  // entrega un numero de filas encontradas
$valt = $stmt_tipo->fetchAll();

//filas de descripcion

$stmt_desc = $conn->prepare("SELECT p.descripcion FROM $tabla p");
$stmt_desc->execute();
$result = $stmt_desc->setFetchMode(PDO::FETCH_ASSOC);  // entrega un numero de filas encontradas
$vald = $stmt_desc->fetchAll();

//usuario
$stmt_user = $conn->prepare("SELECT u.nombre FROM usuarios u");
$stmt_user->execute();
$result = $stmt_user->setFetchMode(PDO::FETCH_ASSOC);  // entrega un numero de filas encontradas
$valu = $stmt_user->fetchAll();
?>
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
                        <a class="nav-link" id="crear" href="status.php">Estados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="crear" href="../View/pasos.php">pasos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="../credenciales.php" method="POST">
        <div class="container">
            <div class="formulario-content">
                <h1 class="text-center text-light mb-3">Crear Escenarios</h1>
                <!-- titulo -->
                <div class="form-floating mb-3">
                    <input type="text" name="titulo" class="form-control" placeholder="">
                    <label for="floatingInput1">Titulo</label>
                </div>
                <!-- descripcion -->
                <div class="form-floating mb-3">
                    <input type="text" name="descripcion" class="form-control" placeholder="">
                    <label for="floatingInput2">Descripcion</label>
                </div>
                <!-- Pasos -->
                <div class="input-group">
                    <select class="form-select" name="tipo" id="tipo">

                        <?php
                        if ($valt) {
                            foreach ($valt as $row) {

                                echo "<option value='>" . $row['id'] . "'/>" . $row['tipo'] . "</option>";
                            }
                        } else {
                            echo "Datos no cargados";
                        }

                        ?>

                    </select>
                    <div class="form-floating flex-grow-1">
                        <select class="form-select" name="tipo" id="tipo">

                            <?php
                            if ($vald) {
                                foreach ($vald as $row) {

                                    echo "<option value='>" . $row['id'] . "'/>" . $row['descripcion'] . "</option>";
                                }
                            } else {
                                echo "Datos no cargados";
                            }

                            ?>

                        </select>
                    </div>
                </div>
                <!-- Tester -->
                <div class="form-floating mb-3">
                    <select class="form-select" name="tester" id="tester">

                        <?php
                        if ($valu) {
                            foreach ($valu as $row) {

                                echo "<option value='>" . $row['id'] . "'/>" . $row['nombre'] . "</option>";
                            }
                        } else {
                            echo "Datos no cargados";
                        }

                        ?>
                    </select>
                </div>
                <!-- folio -->
                <div class="form-floating mb-3">
                    <input type="text" name="folio" class="form-control" placeholder="" disabled>
                    <label for="floatingInput4">Folio</label>
                </div>
                <!-- fecha -->
                <div class="form-floating mb-3">
                    <input type="date" name="fecha" class="form-control" placeholder="">
                    <label for="floatingInput4">Fecha</label>
                </div>
                <!-- file -->
                <div id="hero" class="mb-3">
                    <label for="input-file" id="drop-area">
                        <input type="file" name="media" accept="" id="input-file" hidden>
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
    <script src="../js/home-crear.js"></script>
</body>

</html>