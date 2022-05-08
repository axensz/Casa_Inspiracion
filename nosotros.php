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
    <link rel="stylesheet" href="css/style_preguntas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Nosotros</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php';?>
        <script src="js/Index.js"></script>
        
        <div class="text-box">
            <h1>NOSOTROS</h1>
            <p></p>
            <a href="#contenedor" class="hero-btn">Más Información</a>
    </section>

<section class="contenedor_preguntas">
    <div class="contenedor" id="contenedor">
        <div class="preguntas">
            <div class="columna">
                <div class="preguntas-faq">
                    <div class="titulo-faq">
                        <h3>Preguntas Frecuentes</h3>
                    </div>
                    <div class="casilla-faq">
                        <div class="pregunta">
                            <h3>¿Qué métodos de pago están disponible?<span>P</span></h3>
                            <div class="mas"><i>+</i></div>
                        </div>
                        <div class="respuesta">
                            <p>Manejamos distintos métodos de pago, entre ellos están: Pagos con tarjetas de crédito, consignaciones vía Baloto y Efectty, transferencias de apps móviles (Ahorros Bancolombia y Nequi) y en nuestra sede principal se reciben pagos en efectivo.<span>R</span></p>
                        </div>
                    </div>
                    <div class="casilla-faq">
                        <div class="pregunta">
                            <h3>¿Los emprendedores aseguran una buena calidad de su servicio?<span>P</span></h3>
                            <div class="mas"><i>+</i></div>
                        </div>
                        <div class="respuesta">
                            <p>Claramente, intentamos asociarnos con las mejores personas en sus distintos campos para facilitar la confianza con el cliente, pero cabe recalcar que la calidad de los servicios recae únicamente en el emprendedor.<span>R</span></p>
                        </div>
                    </div>
                    <div class="casilla-faq">
                        <div class="pregunta">
                            <h3>¿Qué beneficios tengo al ser un emprendedor asociado?<span>P</span></h3>
                            <div class="mas"><i>+</i></div>
                        </div>
                        <div class="respuesta">
                            <p>Cuentas con varios beneficios a la hora de asociarte con nosotros, tales como: elementos necesarios para tus trabajos, espacios amplios a tu disposición para tu zona de trabajo, asesorías con profesionales y otras más.<span>R</span></p>
                </div>
            </div>
        </div>
    </div>
<script src="js/preguntas.js"></script>
</section>

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