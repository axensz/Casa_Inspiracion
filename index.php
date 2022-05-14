<?php
    include 'php/sesiones/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/style_index_art.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Casa Inspiración</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php';?>
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

    <div style="text-align:center;">
        <h1>Tipos de Arte</h1>
        </div>

    <div class="container_cards">
    
        <div class="card">
            <div class="cover">
                <img src="img/arte/Musicos/musico.png" alt="">
                <div class="img_back"></div>
            </div>
            <div class="description">
                <h2>Musicos</h2>
                <p>La música es un mundo dentro de sí mismo, es un lenguaje que todos entendemos.</p>
                <input type="button" value="Leer Más">
            </div>
        </div>
        <div class="card">
            <div class="cover">
                <img src="img/arte/Tatuajes/tatuador11.png" alt="">
                <div class="img_back"></div>
            </div>
            <div class="description">
                <h2>Tatuadores</h2>
                <p>El arte no se limita solo a lápiz y papel, también en la piel se plasman las ideas de la gente.</p>
                    <input type="button" value="Leer Más">
            </div>
        </div>
        <div class="card">
            <div class="cover">
                <img src="img/arte/Barberos/barbero2.png" alt="">
                <div class="img_back"></div>
            </div>
            <div class="description">
                <h2>Barberos</h2>
                <p>Barbero que no sea parlero, no tiene espacio en este mundo de pordioseros.</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

    </div>


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