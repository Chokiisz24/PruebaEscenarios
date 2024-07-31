<?php
include_once '../Controller/conexion.php';
$objeto = new Conexion();
$link = $objeto->conectar();
$consulta = "SELECT e.titulo, e.descripcion, u.tipoUser AS user, p.tipo AS pasos, e.folio, e.fecha
FROM `escenario` AS e
INNER JOIN `usuarios` AS u ON e.user = u.id
INNER JOIN `pasos` AS p ON e.pasos = p.id;  ";

$resultado = $link->prepare($consulta);
$resultado->execute();
$escenario = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/status.css">
    <!-- estilos de boostrap para la tabla -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
    <!-- iconos de boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Estatus</title>
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
    <div class="pt-4 text-light" id="logostatus">
        <img src="../img/status.png" class="center" width="60px">
        <h1 class="m-2">ESTADOS</h1>
    </div>


    <div class="m-5">
        <table id="example" class="table table-striped" style="width:100%">
            <thead class="text-center table-info">
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Tester Asignado</th>
                <th>Tipo de paso</th>
                <th>Media</th>
                <th>Folio</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                <?php
                foreach ($escenario as $escenarios) {
                ?>
                    <tr>
                        <td> <?php echo $escenarios['titulo'] ?></td>
                        <td> <?php echo $escenarios['descripcion'] ?></td>
                        <td> <?php echo $escenarios['user'] ?></td>
                        <td> <?php echo $escenarios['pasos'] ?></td>
                        <td> <?php echo $escenarios['media'] ?></td>
                        <td> <?php echo $escenarios['folio'] ?></td>
                        <td> <?php echo $escenarios['fecha'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="../js/scriptdataTable.js"></script>
</body>

</html>