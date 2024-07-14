<?php


// Credenciales para la conexión a la base de datos
$server = "127.0.0.1";      // Servidor de la base de datos
$username = "root";         // Usuario de la base de datos
$database = "escenarios";   // Nombre de la base de datos
$passwd = "";               // Contraseña de la base de datos

// Crear una nueva conexión usando mysqli
$conn = mysqli_connect($server, $username, $passwd, $database);


if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_SERVER['REQUEST_METHOD']) == 'POST'){

    $usermail = $_POST['emailuser'];
    $passwd = $_POST['passwd'];

    var_dump($usermail, $passwd);
    // Preparar y ejecutar la consulta
    $sql = " SELECT * FROM session  WHERE username = ?  AND passwd = ? ;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usermail, $passwd); // Asociación de parámetros: 'ss' indica que ambos parámetros son cadenas (strings)
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        header("Location: ../html/home.html");
    } else {
        echo "<p>Usuario o contraseña incorrectos</p>";
    }

    $stmt->close();
    
}

mysqli_close($conn);
?>
