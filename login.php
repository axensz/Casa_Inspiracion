<?php

    session_start();
    if (isset($_SESSION['usuario'])) {
        header("location: index.php");
    }

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
</head>
<body>
    
    <main>
        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina:</p>
                    <button id="btn_iniciar-sesion" type="submit">INICIAR SESIÓN</button>
                </div>
                <div class="caja_trasera_registro">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para mas información:</p>
                    <button id="btn_registrarse" type="submit">REGISTRARSE</button>
                </div>
            </div>
            <!--Formulario login y registro-->
            <div class="contenedor_login_registro">
                <!--Login-->
                <form action="php/login_usuario_be.php"  method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <a href="login_contraseña.html"><p>¿Olvidaste tu contraseña?</p></a>
                    <button>Entrar</button>
                    <a href="index.php" class="volver"><p>Volver</p></a>
                </form>
                <!--registro-->
                <form action="php/registro_be.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button name="Registrarse">Registrarse</button>
                    <a href="index.php" class="volver"><p>Volver</p></a>
                </form>

            </div>
        </div>
    </main>
    <script src="js/login.js"></script>
</body>
</html>