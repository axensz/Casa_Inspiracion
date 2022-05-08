<?php

    session_start();
    /*tipo_usuarios
        0=Admin;
        1=Usuario registrado;
        3=usuario no registrado;

    */
    if (!isset($_SESSION['id'])) {
        $tipo_usuario = 3;
    }else{
        $nombre = $_SESSION['nombre'];
        $tipo_usuario = $_SESSION['tipo_usuario'];
    }

?>