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
    <link rel="stylesheet" href="css/style_nosotros.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Nosotros</title>
</head>
<body>
    <section class="header">
        <?php include 'php/navbar/navbar.php'?>
        <script src="js/Index.js?v=<?php echo(rand()); ?>"></script>
        <div class="text-box">
            <h1>NOSOTROS</h1>
            <p></p>
            <a href="#Seccion1" class="hero-btn">Más Información</a>
        </div>
    </section>

    <section class="course" id="Seccion1">
        <h1>Nuestra Filosofía</h1>
        <div class="row">
            <div class="course-col">
                <h3>Misión</h3>
                <p>Nuestra misión es motivar a artistas tanto grandes, medianos y pequeños a dedicarse enteramente a su habilidad artística, ofreciéndoles posibilidades de trabajo, un ambiente sano en donde aparte de trabajar podrán mejorar en compañía de otros emprendedores de igual o mayor experiencia en el campo.</p>
            </div>
            <div class="course-col">
                <h3>¿Quienes Somos?</h3>
                <p>Somos una empresa que se empeña en ofrecer espacios de trabajo, herramientas y ayudas para aquellos artistas plásticos, artesanos, grafiteros, artistas del body art, etc. que comienzan su carrera y/o negocio, trabajadores independientes, pero principalmente profesionales que utilizan el arte como su principal herramienta de trabajo y desarrollo personal, donde el factor colaborativo por parte ellos sean algo altamente valorado.</p>
            </div>
            <div class="course-col">
                <h3>Visión</h3>
                <p>Como visión, un plan de trabajo de cinco años en el que se propone como mínimo ayudar a establecer dos negocios anualmente de nuestros emprendedores, dando así un total de diez nuevos negocios artísticos y gradualmente ir aumentando el número de artistas establecidos en la zona.</p>
            </div>
        </div>
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
                                <h3>¿Que empresas estan asociadas para la prestación de insumos?<span>P</span></h3>
                                <div class="mas"><i>+</i></div>
                            </div>
                            <div class="respuesta">
                                <p>Estamos asociados con las mejores marcas para asegurarnos de ofrecer herramientas y materiales de alta calidad. Algunas referencias que podemos dar son las siguientes: Eternal Ink (tintas para tatuajes), KWADRON (Agujas para tatuaje), darklab (Maquinas para tatuar)<span>R</span></p>
                            </div>
                        </div>
                        <div class="casilla-faq">
                            <div class="pregunta">
                                <h3>¿Donde se encuentran ubicados?<span>P</span></h3>
                                <div class="mas"><i>+</i></div>
                            </div>
                            <div class="respuesta">
                                <p>Estamos ubicados en la Cl. 52 #51-55, Bello, Antioquia, al frente del CENSA sede de Bello.<span>R</span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.84046975148652!2d-75.56025132102536!3d6.336031304968713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442fa6799ef293%3A0xf96882f5732a4928!2sCl.%2052%20%2351-55%2C%20Bello%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1652459870590!5m2!1ses!2sco" width="100%" height="500" style="text-align:center;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            </div>
                        </div>
                        <div class="casilla-faq">
                            <div class="pregunta">
                                <h3>¿Los emprendedores aseguran una buena calidad en su servicio?<span>P</span></h3>
                                <div class="mas"><i>+</i></div>
                            </div>
                            <div class="respuesta">
                                <p>Claramente, intentamos asociarnos con las mejores personas en sus distintos campos para facilitar la confianza con el cliente, pero cabe recalcar que la calidad de los servicios recaen únicamente en el emprendedor.<span>R</span></p>
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
    <script src="js/preguntas.js?v=<?php echo(rand()); ?>"></script>
    </section>

    <?php include 'php/footer/footer.php'?>
    
</body>
</html>