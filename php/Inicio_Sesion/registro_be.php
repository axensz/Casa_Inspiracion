<?php

    include 'conexion_be.php';

    //Se declaran las variables
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    //Se encripta la contraseña
    //$password = hash('sha512', $password);
    //metodo para ingresar datos
    $query = "INSERT INTO db_login(nombre, usuario, correo, password) 
              VALUES('$nombre','$usuario','$correo','$password')";
    
    //verificar datos repetidos
    //verificar datos de correo
    $verificar_correo = mysqli_query($mysqli, "SELECT * FROM db_login WHERE correo='$correo'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        header('Location: ../../login.php?error_registro=1');
        exit;
    }
    //verificar usuario
    $verificar_usuario = mysqli_query($mysqli, "SELECT * FROM db_login WHERE usuario='$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        header('Location: ../../login.php?error_registro=2');
        exit;
    }

    $ejecutar = mysqli_query($mysqli, $query);

    if (isset($_POST["Registrarse"])) {
        $nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
        $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
        $correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    }
    
    if ($ejecutar) {
        header('Location: ../../login.php?registro_correcto=1');
    }else{
        header('Location: ../../login.php?registro_correcto=2');
    }

    mysqli_close($mysqli);

?>