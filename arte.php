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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link rel="stylesheet" href="css/style_arte.css">
    <title>Arte</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php';?>
        <script src="js/Index.js"></script>
        <div class="text-box">
            <h1>GALERÍAS</h1>
            <p></p>
            <a href="#arte" class="hero-btn">Ver las galerías</a>
    </section>
    <div class="arte" id="arte">
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