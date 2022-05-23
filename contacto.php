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
    <link rel="stylesheet" href="css/style_contacto.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Contacto</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php'?>
        <script src="js/Index.js?v=<?php echo(rand()); ?>"></script>

        <div class="text-box">
            <h1>CONTACTO</h1>
            <p></p>
            <a href="#container" class="hero-btn">Más Información</a>
        </div>  
        
    </section>
        <div class="container" id="container">
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Información</h3>
                <p class="text">
                  Si deseas consultar mayor información sobre nuestros servicios o tienes alguna duda al respecto, no dudes en solicitar una consultoría gratuita y uno de nuestros asesores te contactará a la brevedad.
                </p>
                <div class="social-media">
                  <p>Conectate:</p>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/Casa-Inspiración-103737402319709" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/casa_insp" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/casa_insp/?hl=es" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                    </a>
                  </div>
                </div>
              </div>
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form action="https://formspree.io/f/xnqwggql" method="POST" autocomplete="off">
                  <h3 class="title">Contactanos</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input" required/>
                    <label for="">Nombre</label>
                    <span>Nombre</span>
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input" required/>
                    <label for="">Email</label>
                    <span>Email</span>
                  </div>
                  <div class="input-container">
                    <input type="tel" name="telphone" class="input" required/>
                    <label for="">Telefono</label>
                    <span>telefono</span>
                  </div>
                  <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Mensaje</label>
                    <span>Mensaje</span>
                  </div>
                  <input type="submit" value="Enviar" class="btn" />
                </form>
              </div>
            </div>
          </div>
      </div>
          <script src="js/app.js?v=<?php echo(rand()); ?>"></script>
            <?php include 'php/footer/footer.php'?>
</body>
</html>