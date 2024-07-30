<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>pasos</h1>
        <div>
            <h2>Pasos</h2>
            <form action="../credenciales.php" method="post">
                <select class="form-select" name="tipo" id="tipo">
                    <option>Seleccione</option>
                    <option value="Entrada" require>Entrada</option>
                    <option value="Salida" require>Salida</option>
                </select>

                <h3>Ingresa los pasos</h3>
                <input type="text" name="pasos" id="pasos" placeholder="">
                <button type="submit">Guardar</button>
            </form>
            <hr>
            <h2>Archivo</h2>
            <div>
                <form action="../credenciales.php" method="post">

                    <div id="hero" class="mb-3" name="media">
                        <label for="input-file" id="drop-area">
                        <input type="file" name="fileb" accept="" id="input-file" hidden>
                        <div id="img-view">
                            <img src="../img/inputfile.png" height="100px">
                            <p>Da click o arrastra un archivo para subirlo</p>
                            <span>Sube cualquier archivo desde tu escritorio</span>
                        </div>
                        <div id="nombre" name="nombre"></div>
                    </label>
                </div>
                <div>
                    <button type="submit">Enviar archivo</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>

</html>