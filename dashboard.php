<?php
    include 'php/Inicio_Sesion/usuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style_dashboard.css?v=<?php echo(rand()); ?>" />
    <script src="js/dashboard.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/modal.js?v=<?php echo(rand()); ?>"></script>
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_dashboard_tables.css?v=<?php echo(rand()); ?>" />

    <script language="javascript" type="text/javascript">
/* Las siguiente funci�n de JavaScript env�a el formulario a la p�gina que corresponda al bot�n pulsado. */
      function saltar(pagina){
        document.formularioCitasPrincipal.action=pagina;
		document.formularioCitasPrincipal.submit();
      }
/* Aqu� termina la funci�n de env�o del formulario. */
    </script>
</head>
<body>
    
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="dashboard.php" class="inspiracion-logo"><span>Casa Inspiración</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="index.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Inicio</a>
                <a href="" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <?php if ($tipo_usuario == 1) { ?>
                    <div class='dashboard-nav-boton-desplegable'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-boton-desplegable-toggle"><i class="fas fa-users"></i>Administrar</a>
                        <div class='dashboard-nav-boton-desplegable-menu'>
                            <a href="dashboard_usuarios.php" class="dashboard-nav-boton-desplegable-item">Usuarios registrados</a>
                            <a href="dashboard_tabla_citas.php" class="dashboard-nav-boton-desplegable-item">Citas agendadas</a>
                        </div>
                    </div>
                <?php } ?>
                    <a href="editar_perfil.php" class="dashboard-nav-item"><i class="fas fa-cogs"></i>Editar perfil</a>
                <div class="nav-item-divider">
                </div>
                <a href="php/Inicio_Sesion/cerrar_sesion.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            </header>
            <div class='dashboard-contenido'>
                <div class='container'>
                    <div class="fecha">
                            <?php
                            // Se incluye el miniscript que abre la base de datos.
                                include ("inc/fechas.php");
                            // Se incluye el miniscript de tratamiento de fechas
                                include ("inc/usarBD.php");
                            /* Se crea una consulta para recuperar todos los datos de las citas con fecha del d�a en curso.
                            La consulta de selecci�n se crea de tal modo que ordene las citas por la hora. */
                                $consulta="SELECT * FROM citas WHERE diacita='".$fechaEnCurso."' ORDER BY horacita;";
                            /* Se ejecuta la consulta de selecci�n.*/
                                $hacerConsulta=mysqli_query($conexion, $consulta);
                            /* Se determina el n�mero de registros recuperados por el cursor, porque si es 0 el
                            dise�o de la p�gina (parte HTML) es diferente que si hay registros. */
                            ?>
                            <h1 class="text-center">AGENDAMIENTO DE CITAS</h1>
                            <div class="textos_titulos">
                            <?php
                                $numeroDeCitasDelDia=mysqli_num_rows($hacerConsulta);
                                echo ("Citas del dia: ".$numeroDeCitasDelDia.salto);
                                ?>
                                AGENDA DEL D&Iacute;A:
                                <?php
                            /* Se muestra la fecha del d�a. */
                                echo ($diaActual." del ".$mesActual." de ".$annioActual);
                                ?>
                                </div>
                            <!-- El formulario no tiene valor en el par�metro action porque se le
                            asigna por una funci�n javascript antes de enviarlo. La funci�n que se ejecute
                            y, por tanto, el valor de este par�metro, depende del bot�n pulsado por el usuario.-->
                                <form action="" method="post" name="formularioCitasPrincipal" id="formularioCitasPrincipal">
                            <!-- El siguiente campo oculto almacena la fecha en curso, obtenida desde PHP.
                            Este dato se enviar� a otros formularios y, a su vez, se rcuperar� desde la 
                            p�gina de cambio de fecha actual. -->
                                <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
                                <table class="tabla_citas">
                                    <tr><th>CITAS</th></tr>
                                </table>
                                <hr>
                                <?php
                            /* Se comprueba si hay citas en el cursor. Si es as�, se dibujar� una
                            tabla en la que se mostrar�n las citas y unos botones de selecci�n. */
                                    if ($numeroDeCitasDelDia>0){
                                    echo ("<table>");
                                    while ($cita = mysqli_fetch_array($hacerConsulta, MYSQLI_ASSOC)) {
                                        echo ("<tr><td id='hola'>".$cita["horacita"]."</td>");
                                        echo ("<td>".$cita["asuntocita"]."</td>");
                            /* Cada cita tiene asociado un bot�n de selecci�n para si el usuario quiere
                            modificarla o borrarla. El valor del bot�n es el identificativo de la cita,
                            de modo que se usar� en las correspondientes consultas de actualizaci�n o
                            eliminaci�n en las p�ginas que proceda.*/
                                        echo ("<td><input type='radio' id='citaSeleccionada' name='citaSeleccionada' value='".$cita["idcita"]."'>");
                                        echo ("</td></tr>");
                                    }
                                    echo ("</table>");
                            /* Si existen citas se mostrar�n los botones de borrar y modificar. */
                                    ?>
                                    <div class="">
                                    <?php
                                    echo ("<button type='button' class='btn btn-primary btnprincipal1' name='borrarCita' type='button' id='borrarCita' value='Eliminar Cita'  onClick='javascript:saltar(\"eliminarCita.php\");'>Eliminar Cita</button>");
                                    }
                            /* En todo caso se mostrar�n los botones de agregar cita y cambiar la fecha en curso. */
                                    echo (" <button type='button' class='btn btn-primary btnprincipal' name='nuevaCita' type='button' id='nuevaCita' value='Agregar cita' onClick='javascript:saltar(\"dashboard_agendar.php\");'>Agendar cita</button>");
                                    
                                    echo ("<button type='button' class='btn btn-primary btnprincipal' name='cambiarFecha' type='button' id='cambiarFecha' value='Otro d&iacute;a' onClick='javascript:saltar(\"dashboard_fecha.php\");'>Cambiar fecha</button>");
                                ?>
                                </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
