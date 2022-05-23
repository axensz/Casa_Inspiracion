<?php
    include 'php/Inicio_Sesion/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style_dashboard.css?v=<?php echo(rand()); ?>" />
    <script src="js/dashboard.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/modal.js?v=<?php echo(rand()); ?>"></script>
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Dashboard</title>
</head>
<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="dashboard.php" class="inspiracion-logo"><span>Casa Inspiración</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="index.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Inicio</a>
                <a href="" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <?php if ($tipo_usuario == 1) { ?>
                    <div class='dashboard-nav-boton-desplegable'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-boton-desplegable-toggle"><i class="fas fa-users"></i>Usuarios</a>
                        <div class='dashboard-nav-boton-desplegable-menu'>
                            <a href="#" class="dashboard-nav-boton-desplegable-item">Usuarios registrados</a>
                        </div>
                    </div>
                <?php } ?>
                    <a href="editar_perfil.php" class="dashboard-nav-item"><i class="fas fa-cogs"></i>Editar perfil</a>
                <div class="nav-item-divider">
                </div>
                <a href="php/Inicio_Sesion/cerrar_sesion.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            </header>
            <div class='dashboard-contenido'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Bienvenido <?php echo $nombre?></h1>
                        </div>
                        <div class='card-body'>
                            <p>Tu tipo de cuenta es: <?php echo $tipo?></p>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="center"><h5 class="modal-title" id="exampleModalLabel">¿Olvidaste tu contraseña?</h5></div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="text-center"><i class="fa fa-envelope-o fa-5x"></i></div>
                                                    <p>Escribe el correo electronico vinculado a tu cuenta:</p>
                                                    <input type="email" placeholder="Correo electronico" name="correo" required>
                                                    <div class="text-center"><button type="button" class="btn btn-primary" id="center_button">Enviar correo</button></div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
</body>
</html>
