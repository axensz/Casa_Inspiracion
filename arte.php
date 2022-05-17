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
    <title>Arte</title>
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

    </div>    

    <footer>
    <?php include 'php/footer/footer.php'?>
    </footer>

</body>
</html>