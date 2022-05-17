<?php
    include 'php/sesiones/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_arte.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Arte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>
<body>
    <section class="header">
        <div class="headernav">
            <nav>
                <div class="logo">
                    <a href="index.php"><img src="img/Logos/PNG/LogoPNG_color.png" alt="Logo Image"></a>
                </div>
                <div class="hamburger">
                    <div class="bars1"></div>
                    <div class="bars2"></div>
                    <div class="bars3"></div>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="arte.php">Galerías</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <?php if ($tipo_usuario == 3) { ?>
                    <li><a href="login.php">Login</a></li>
                    <?php } ?>
                    <?php if ($tipo_usuario == 0 || $tipo_usuario == 1 ) { ?>
                    <li><a href="php/sesiones/cerrar_sesion.php">Cerrar sesion</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <script src="js/Index.js"></script>
        <div class="text-box">
            <h1>GALERÍAS</h1>
            <p></p>
            <a href="#arte" class="hero-btn">Ver las galerías</a>
    </section>
    <div class="arte" id="arte">
        <div class="container">
<<<<<<< HEAD

            <h1 id="h1_galeria">Galeria</h1>
=======
            <h3 class="titulo"><i><b>GALERÍA</b></i></h3>
>>>>>>> parent of e61d9d4 (Version 10.1.7)
            <!--Mensaje de error-->

            <?php if ($tipo_usuario == 1 ) { ?>
            <form action="php/image_gallary/subir_imagen.php" class="form-image-upload" method="POST" enctype="multipart/form-data">
                <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        <strong>Error</strong>: Ha ocurrido un problema al subir la imagen <br><br>
                        <ul>
                            <li><?php echo $_SESSION['error']; ?></li>
                        </ul>
                    </div>
                <?php unset($_SESSION['error']);
                } ?>
                <!--No ha ocurrido ningun problema -->
                <?php if (!empty($_SESSION['success'])) { ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><?php echo $_SESSION['success']; ?></strong>
                    </div>
                <?php unset($_SESSION['success']);
                } ?>
                <div class="row">
                    <div class="col-md-5">
                        <strong>Titulo:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Titulo">
                    </div>
                    <div class="col-md-5">
                        <strong>Imagen:</strong>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <br />
                        <button type="submit" class="btn btn-success">Subir archivo</button>
                    </div>
                </div>
            </form>
<<<<<<< HEAD
            <?php } ?>
            
            <div class="row row-cols-3" id="row_imagenes">
                <?php
                require('php/image_gallary/db_config.php');
=======

            <div class="row">
                <div class='list-group gallery'">
                    <?php
                    require('php/image_gallary/db_config.php');
>>>>>>> parent of e61d9d4 (Version 10.1.7)

                    $sql = "SELECT * FROM image_gallery";
                    $images = $conn->query($sql);

                    while ($image = $images->fetch_assoc()) {

<<<<<<< HEAD
                ?>
                    <div class="col">
                        <a class="thumbnail fancybox" rel="ligthbox" href="php/image_gallary/imagenes_subidas/<?php echo $image['image'] ?>">
                        
                            <img alt="" id="imagenes" src="php/image_gallary/imagenes_subidas/<?php echo $image['image'] ?>" />
                            <div class='text-center'>
                                <small><?php echo $image['title'] ?></small>
                            </div> <!--Texto central y final-->
                        </a>
                        <?php if ($tipo_usuario == 1 ) { ?>
                        <!--Eliminar imagen-->
                        <form action="php/image_gallary/eliminar_imagen.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                            <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form>
                        <?php } ?>
                    </div>
                <?php } ?>
        </div>
        </div>


=======
                    ?>
                        <div class='col-sm-3'>

                            <a class="thumbnail fancybox" rel="ligthbox" href="php/image_gallary/imagenes_subidas/<?php echo $image['image'] ?>">
                            
                                <img alt="" src="php/image_gallary/imagenes_subidas/<?php echo $image['image'] ?>" />
                                <div class='text-center'>
                                    <small class='text-muted'><?php echo $image['title'] ?></small>
                                </div> <!--Texto central y final-->
                            </a>

                            <!--Eliminar imagen-->
                            <form action="php/image_gallary/eliminar_imagen.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                                <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                            </form>

                        </div>
                    <?php } ?>

                </div>
            </div>
        </div> 
>>>>>>> parent of e61d9d4 (Version 10.1.7)
    </div>    

    <footer class="footer2">
        <div class="footer-content">
            <h3f>Casa Inspiración</h3f>
            <pf>"El arte es amor hecho público."</pf>
            <ul class="social">
                <li><a href="https://www.facebook.com/Casa-Inspiración-103737402319709"><i class="fa fa-facebook" target="_blank"></i></a></li>
                <li><a href="https://twitter.com/casa_insp" target="_blank" ><i class="fa fa-twitter" target="_blank"></i></a></li>
                <li><a href="https://www.instagram.com/casa_insp/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCp3xGxWRsfwjYEtyGpx-gBQ" target="_blank" ><i class="fa fa-youtube" target="_blank"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <pf>copyright &copy;2022 Casa Inspiración. Diseñado por <span>Santiago, Felipe & Camilo</span></pf>
        </div>
    </footer>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none",
        });
    });
</script>