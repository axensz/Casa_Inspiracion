<?php
    session_start();
    require 'conexion_be.php';

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and password='$password'");

    if (mysqli_num_rows($validar_login)) {
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, verifique datos introducidos");
            window.location = "../login.php";
        </script>
        ';
        exit;
    }

?>