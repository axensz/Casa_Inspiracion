<?php

    include 'conexion_be.php';

    //Se declaran las variables
    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    //Se encripta la contraseña
    $password = hash('sha512', $password);

    //metodo para ingresar datos
    $query = "INSERT INTO usuarios(nombre_completo, usuario, correo, password) 
              VALUES('$nombre_completo','$usuario','$correo','$password')";
    
    //verificar datos repetidos
    //verificar datos de correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo'
            <script>
                alert("Correo ya registrado");
                window.location = "../login.php";
            </script>
        ';
        exit;
    }
    //verificar usuario
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo'
            <script>
                alert("usuario ya registrado");
                window.location = "../login.php";
            </script>
        ';
        exit;
    }

    $ejecutar = mysqli_query($conexion, $query);

    
    if ($ejecutar) {
        echo '
        <script> 
            alert("Registrado correctamente");
            window.location = "../login.php";
        </script>';
    }else{
        echo '
        <script> 
            alert("Intentalo de nuevo");
            window.location = "../login.php";
        </script>';
    }

    mysqli_close($conexion);

?>