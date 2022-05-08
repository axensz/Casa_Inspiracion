<?php

    require 'conexion_be.php';
    session_start();
    $error = 0;
    if ($_POST) {
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $password = hash('sha512', $password);

        $sql = "Select id, password, tipo_usuario, nombre FROM db_login WHERE correo = '$correo'";
        //echo $sql;
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;

        if ($num>0) {
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
            header("Location: index.php");
            
        }else{
            $error = 1;
        }


    }

?>