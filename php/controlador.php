<?php


// Credenciales para la conexión a la base de datos

if (!empty($_POST['btniniciar'])) {
    if (empty($_POST['emailuser']) and empty($_POST['passwd'])) {
        echo "Los campos están vacíos";
    }else{

        if (!empty($_POST['btniniciar'])) {
            if (empty($_POST['emailuser']) and empty($_POST['passwd'])) {
                echo "Los campos están vacíos";
            }else{
                $usermail = $_POST['emailuser'];
                $passwd = $_POST['passwd'];
                $sql = "SELECT * FROM usuarios WHERE username = '$usermail' AND passwd = '$passwd'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    header("Location: ../html/home.html");
                    echo "Bienvenido";
                }else{
                    echo "Usuario o contraseña incorrectos";
                }
                
            }
        }
    }
}