<?php
    include 'php/Inicio_Sesion/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="css/style_arte.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Arte</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</head>
<body>
    <section class="header">
    <?php include 'php/navbar/navbar.php'?>
        <script src="js/Index.js?v=<?php echo(rand()); ?>"></script>
        <div class="text-box">
            <h1>GALERÍAS</h1>
            <p></p>
            <a href="#arte" class="hero-btn">Ver las galerías</a>
        </div>
    </section>
    <div class="arte" id="arte">
        <div class="container_galerias">

            <h1>Galeria</h1>

            <!--Mensaje de error-->
            <?php if ($tipo_usuario == 1 ) { ?>
            <form action="php/Galeria/subir_imagen.php" class="form-image-upload" method="POST" enctype="multipart/form-data">
                <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error</strong>: Ha ocurrido un problema al subir la imagen<br><br>
                        <ul>
                            <li><?php echo $_SESSION['error']; ?></li>
                        </ul>
                    </div>
                <?php unset($_SESSION['error']);
                } ?>
                <!--No ha ocurrido ningun problema -->
                <?php if (!empty($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
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
                        <button type="submit" class="btn btn-primary">Subir archivo</button>
                    </div>
                </div>
            </form>
            <?php } ?>
            
            <div class="row row-cols-3" id="row_imagenes">
                <?php
                require('php/Galeria/db_config.php');

                $sql = "SELECT * FROM image_gallery";
                $images = $conn->query($sql);

                while ($image = $images->fetch_assoc()) {

                ?>
                    <div class="col">
                        <a class="thumbnail fancybox" rel="ligthbox" href="php/Galeria/imagenes_subidas/<?php echo $image['image'] ?>">
                        
                            <img alt="" id="imagenes" src="php/Galeria/imagenes_subidas/<?php echo $image['image'] ?>" />
                            <div class='text-center'>
                                <small><?php echo $image['title'] ?></small>
                            </div> <!--Texto central y final-->
                        </a>
                        <?php if ($tipo_usuario == 1 ) { ?>
                        <!--Eliminar imagen-->
                        <form action="php/Galeria/eliminar_imagen.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                            <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form>
                        <?php } ?>
                    </div>
                <?php } ?>
        </div>
    </div>    

    <?php include 'php/footer/footer.php'?>

</body>
</html>