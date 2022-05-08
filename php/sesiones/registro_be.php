<?php

    include 'conexion_be.php';

    //Se declaran las variables
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    //Se encripta la contraseña
    $password = hash('sha512', $password);

    //metodo para ingresar datos
    $query = "INSERT INTO db_login(nombre, usuario, correo, password) 
              VALUES('$nombre','$usuario','$correo','$password')";
    
    //verificar datos repetidos
    //verificar datos de correo
    $verificar_correo = mysqli_query($mysqli, "SELECT * FROM db_login WHERE correo='$correo'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo'
            <script>
                alert("Correo ya registrado");
                window.location = "../../login.php";
            </script>
        ';
        exit;
    }
    //verificar usuario
    $verificar_usuario = mysqli_query($mysqli, "SELECT * FROM db_login WHERE usuario='$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo'
            <script>
                alert("usuario ya registrado");
                window.location = "../../login.php";
            </script>
        ';
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
        echo '
        <script> 
            alert("Registrado correctamente");
            window.location = "../../login.php";
        </script>';
    }else{
        echo '
        <script> 
            alert("Intentalo de nuevo");
            window.location = "../../login.php";
        </script>';
    }

    mysqli_close($mysqli);

?>