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
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/modal_editar.js?v=<?php echo(rand()); ?>"></script>
    <title>Editar perfil</title>
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
                <a href="dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <?php if ($tipo_usuario == 1) { ?>
                    <div class='dashboard-nav-boton-desplegable'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-boton-desplegable-toggle"><i class="fas fa-users"></i>Usuarios</a>
                        <div class='dashboard-nav-boton-desplegable-menu'>
                            <a href="#" class="dashboard-nav-boton-desplegable-item">Usuarios registrados</a>
                        </div>
                    </div>
                <?php } ?>
                    <a href="" class="dashboard-nav-item"><i class="fas fa-cogs"></i>Editar perfil</a>
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
                    <div class="editarperfil">
                        <div class="container rounded bg-white mt-5 mb-5" >
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    <span class="font-weight-bold">Imagen de perfil</span>
                                    <span class="text-black-50"></span>
                                    <span></span>
                                </div>
                                </div>
                                <div class="col-md-5 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right" id="tittle">Editar Perfil</h4>
                                        </div>  
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nombre</label><input id="nombre" type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $nombre ?>" readonly="readonly" style="background-color: white;"></div>
                                            <div class="col-md-12"><label class="labels">Usuario</label><input id="nombre" type="text" class="form-control" placeholder="Usuario" value="<?php echo $usuario ?>" readonly="readonly" style="background-color: white;"></div>
                                            <div class="col-md-12"><label class="labels">Email</label><input id="correo" type="text" class="form-control" placeholder="Email" value="<?php echo $correo?>" readonly="readonly" style="background-color: white;"></div>
                                            <div class="col-md-12"><label class="labels">Ocupación</label><input id="ocupacion"type="text" class="form-control" placeholder="Ocupación" value="<?php echo $ocupacion?>" readonly="readonly" style="background-color: white;"></div>
                                            <?php if ($telefono == 0){ ?>
                                            <div class="col-md-12"><label class="labels">Telefono</label><input id="telefono"type="text" class="form-control" placeholder="Telefono" value="" readonly="readonly" style="background-color: white;"></div>
                                            <?php } ?>
                                            <?php if ($telefono > 0){ ?>
                                            <div class="col-md-12"><label class="labels">Telefono</label><input id="telefono"type="text" class="form-control" placeholder="Telefono" value="<?php echo $telefono?>" readonly="readonly" style="background-color: white;"></div>
                                            <?php } ?>
                                            <div class="col-md-12"><label class="labels">Contraseña</label><input id="contraseña"type="text" class="form-control" placeholder="Contraseña" value="*******" readonly="readonly" style="background-color: white;"></div>
                                        </div>
                                        <div class="mt-5 text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar datos</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <?php
                        if(isset($_POST["enviar"]))
                        {
                        $usuario = $_POST['usuario'];
                        $password = $_POST['password'];
                        $ocupacion = $_POST['ocupacion'];
                        
                        
                        $update = 'UPDATE productos SET
                        usuario=TRIM("'.$usuario.'"),
                        password=TRIM("'.$password.'"),
                        ocupacion=TRIM("'.$ocupacion.'")
                        WHERE id=TRIM('.$id.')';
                        
                        
                        if ($conn->query($update) === TRUE) 
                        {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("EDICION CORRECTA. YA PUEDE CERRAR ESTA VENTANA ");'; 
                        echo 'window.location = "javascript:history.back(1)";';
                        echo '</script>';
                        
                        }
                        else
                        {
                        
                        echo '<script type="text/javascript">'; 
                        echo 'alert("ERROR REVISAR SI FALTAN DATOS");'; 
                        echo 'window.location = "javascript:history.back(1)";';
                        echo '</script>';
                        }
                        
                        }
                    
                    ?> 

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <div class="center"><h5 class="modal-title" id="exampleModalLabel">Editar datos</h5></div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mt-2">
                                <form action="editar_perfil.php" method="POST">
                                <div class="col-md-12"><label class="labels">Nombre</label><input id="nombre" type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $nombre ?>" name="nombre"></div>
                                <div class="col-md-12"><label class="labels">Usuario</label><input id="nombre" type="text" class="form-control" placeholder="Usuario" value="<?php echo $usuario ?>" name="usuario"></div>
                                <div class="col-md-12"><label class="labels">Email</label><input id="correo" type="text" class="form-control" placeholder="Email" value="<?php echo $correo?>" readonly="readonly" style="background-color: white;" name="correo"></div>
                                <div class="col-md-12"><label class="labels">Ocupación</label><input id="ocupacion"type="text" class="form-control" placeholder="Ocupación" value="<?php echo $ocupacion?>" name="ocupacion"></div>
                                <?php if ($telefono == 0){ ?>
                                <div class="col-md-12"><label class="labels">Ingresa un telefono</label><input id="telefono"type="text" class="form-control" placeholder="Telefono" value="" name="telefono"></div>
                                <?php } ?>
                                <?php if ($telefono > 0){ ?>
                                <div class="col-md-12"><label class="labels">Cambiar telefono</label><input id="telefono"type="text" class="form-control" placeholder="Telefono" value="<?php echo $telefono?>" name="telefono"></div>
                                <?php } ?>
                                <div class="col-md-12"><label class="labels">cambiar contraseña</label><input id="contraseña"type="text" class="form-control" placeholder="Contraseña" value="" name="contraseña"></div>
                                </div>
                                <div class="divbutton"><button type="submit" class="btn btn-primary editbtn" name="enviar">Guardar cambios</button></div>
                                </form>
                            </div>
                        <div class="modal-footer">
                            
                        </div>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>
