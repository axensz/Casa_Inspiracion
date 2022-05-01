<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Casa Inspiración</title>
</head>
<body>
    <section class="header">
        <nav>
            <div class="logo">
                <a href="index.html"><img src="img/Logos/PNG/LogoPNG_color.png" alt="Logo Image"></a>
            </div>
            <div class="hamburger">
                <div class="bars1"></div>
                <div class="bars2"></div>
                <div class="bars3"></div>
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="arte.html">Galerías</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="php/cerrar_sesio.php">Cerrar sesion</a></li>
            </ul>
        </nav>
        <script src="js/Index.js"></script>

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