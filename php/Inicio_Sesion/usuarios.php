<?php

    session_start();
    /*tipo_usuarios
        0=Admin;
        1=Usuario registrado;
        3=usuario no registrado;

    */
    $tipo = "";
    if (!isset($_SESSION['id'])) {
        $tipo_usuario = 3;
    }else{
        $nombre = $_SESSION['nombre'];
        $correo = $_SESSION['correo'];
        $telefono = $_SESSION['telefono'];
        $ocupacion = $_SESSION['ocupacion'];
        $tipo_usuario = $_SESSION['tipo_usuario'];
        if($tipo_usuario==0)$tipo="Basico";
        if($tipo_usuario==1)$tipo="Admin";
    }

?>