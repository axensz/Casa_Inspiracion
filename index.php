<?php
    include 'php/Inicio_Sesion/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Casa Inspiración</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php'?>
        <script src="js/Index.js?v=<?php echo(rand()); ?>"></script>

        <div class="text-box">
            <h1>CASA INSPIRACIÓN</h1>
            <p>Un lugar donde tendrás la oportunidad de comenzar tu negocio desde el arte.</p>
            <a href="#Seccion1" class="hero-btn">Más Información</a>
        </div>
        
    </section>
    
    <!----Seccion 2---->

    <section class="course" id="Seccion1">
        <h1>Servicios</h1>
        <div class="row">
            <div class="course-col">
                <h3>Espacios colaborativos</h3>
                <p>Se otorgará la facilidad de alquilar un espacio donde los emprendedores tendrán la oportunidad de trabajar individualmente o en conjunto con otros artistas.</p>
            </div>
            <div class="course-col">
                <h3>Alquiler de insumos</h3>
                <p>Se otorgará la facilidad de alquilar insumos con los cuales los emprendedores podrán ejercer su profesión con estas herramientas y así trabajar individualmente o en conjunto con otros artistas.</p>
            </div>
            <div class="course-col">
                <h3>Ayudas coworking</h3>
                <p>El tema principal de este servicio será una manera de identificar un método para facilitar el trabajo colaborativo desde una mirada no competitiva del trabajo.</p>
            </div>
        </div>
    </section>

    <!----seccion 2---->
    <section class="campus">
        <h1>Arte</h1>
        <div class="row">
            <div class="campus-col">
                <img src="img/imagen (3).jpg">
                <div class="layer">
                    <a href="arte.html" class="h33">Ver más</a>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/imagen (2).jpg">
                <div class="layer">
                    <a href="arte.html" class="h33">Ver más</a>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/imagen (1).jpg">
                <div class="layer">
                    <a href="arte.html" class="h33">Ver más</a>
                </div>
            </div>
        </div>
        <p>"La única persona a la que está destinado a convertirse es la persona que decides ser". - Ralph Waldo Emerson.</p>
    </section>

    <!----footer---->
    <footer>
        <?php include 'php/footer/footer.php'?>
    </footer>
</body>
</html>