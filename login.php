<?php
    include 'php/Inicio_Sesion/login.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_login.css?v=<?php echo(rand()); ?>" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
    
    <main>
        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para ingresar a la pagina:</p>
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
                <form method="POST" class="formulario_login" <?php echo $_SERVER['PHP_SELF']; ?>>
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                        <?php if ($error == 1) { ?>
                            <script>Swal.fire({
                                    icon: 'error',
                                    text: 'Usuario o contraseña incorrecta',
                                    })
                            </script>
                            <?php $error=0; ?>
                        <?php } ?>
                    <a><p><button2 type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">¿Olvidaste tu contraseña?</button2></p></a>
                    <button>Entrar</button>
                    <a href="index.php" class="volver"><p>Volver</p></a>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="center"><h5 class="modal-title" id="exampleModalLabel">¿Olvidaste tu contraseña?</h5></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="php/Inicio_Sesion/olvidar.php" method="POST">
                            <div class="modal-body">
                                
                                    <div class="text-center"><i class="fa fa-envelope-o fa-5x"></i></div>
                                    <p>Escribe el correo electrónico vinculado a tu cuenta:</p>
                                    <input type="email" placeholder="Correo electronico" name="correo_olvidar" required autocomplete="off">
                                    <div class="text-center"><button type="submit" class="btn btn-primary" id="center_button">Enviar correo</button></div>

                                    <?php 
                                        ini_set('display_errors','Off'); 
                                        $error_olvidar=$_GET["error_olvidar"];
                                        if ($error_olvidar == 1) { ?>
                                        <script>Swal.fire({
                                                icon: 'error',
                                                text: 'El correo electronico no existe',
                                                })
                                        </script>
                                        <?php $error_olvidar=0; ?>
                                    <?php } ?>
                                
                            </div>
                            </form>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <!--registro-->
                <form action="php/Inicio_Sesion/registro_be.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button name="Registrarse">Registrarse</button>
                    <a href="index.php" class="volver"><p>Volver</p></a>
                </form>

            </div>
        </div>
    </main>
    <script src="js/login.js?v=<?php echo(rand()); ?>"></script>

    <?php 
        ini_set('display_errors','Off'); 
        $error_f=$_GET["error_f"];
        if ($error_f == 1) { ?>
            <script>Swal.fire({
            icon: 'info',
            title: 'Correo enviado exitosamente',
            text: 'Revisa tu correo electronico.',
            })
            </script>
    <?php } ?>    

    <?php 
        ini_set('display_errors','Off'); 
        $error_registro=$_GET["error_registro"];
        if ($error_registro == 1) { ?>
            <script>Swal.fire({
            icon: 'error',
            title: 'Correo ya registrado',
            text: 'El correo ingresado ya es usado.',
            })
            </script>
    <?php } ?>            
    <?php 
        ini_set('display_errors','Off'); 
        $error_registro=$_GET["error_registro"];
        if ($error_registro == 2) { ?>
            <script>Swal.fire({
            icon: 'error',
            title: 'usuario ya registrado',
            text: 'El usuario ingresado ya es usado.',
            })
            </script>
    <?php } ?>  

    <?php 
        ini_set('display_errors','Off'); 
        $registro_correcto=$_GET["registro_correcto"];
        if ($registro_correcto == 1) { ?>
            <script>Swal.fire({
            icon: 'success',
            title: 'Registrado correctamente.',
            })
            </script>
    <?php } ?>  
    <?php 
        ini_set('display_errors','Off'); 
        $registro_correcto=$_GET["registro_correcto"];
        if ($registro_correcto == 2) { ?>
            <script>Swal.fire({
            icon: 'warning',
            title: 'Intentalo de nuevo',
            text: 'Ha ocurrido un error.',
            })
            </script>
    <?php } ?>  

</body>
</html>