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
    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularioNuevaCita.action="grabarNuevaCita.php";
        } else {
           document.formularioNuevaCita.action="dashboard.php";
        }
        document.formularioNuevaCita.submit();
      }
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
                <a href="dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
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
                <h1 class="text-center texto_titul">AGENDAMIENTO DE CITA</h1>
                    <div class="d-flex justify-content-center contenido">
                        <div class="">
                            <?php
                            // Se incluye el miniscript de tratamiento de fechas
                                include ("inc/fechas.php");
                            // Se muestra la fecha en curso.
                                echo ("CITA PARA EL DIA: ".$diaActual." del ".$mesActual." de ".$annioActual.salto);
                                ?>
                                <form action="" method="post" name="formularioNuevaCita" id="formularioNuevaCita">
                                <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
                                <table width="500" cellspacing="0" cellpadding="2">
                                    <tr>
                                    <td width="73">Hora:</td>
                                    <td width="427">Asunto:</td>
                                    </tr>
                                    <tr>
                                    <td><select name="hora" id="hora">
                                    <?php
                                        for ($i=0;$i<24;$i++){
                                        echo ("<OPTION VALUE='");
                                        printf ("%02s",$i);
                                        echo ("'>");
                                        printf("%02s",$i);
                                        echo ("</OPTION>".salto);
                                        }
                                    ?>
                                    </select></td>
                                    <td rowspan="3"><textarea name="asunto" cols="50" rows="5" id="asunto" require></textarea></td>
                                    </tr>
                                    <tr>
                                    <td>Minutos:</td>
                                    </tr>
                                    <tr>
                                    <td><select name="minutos" id="minutos">
                                    <?php
                                        for ($i=0;$i<51;$i+=10){
                                        echo ("<OPTION VALUE='");
                                        printf ("%02s",$i);
                                        echo ("'>");
                                        printf("%02s",$i);
                                        echo ("</OPTION>".salto);
                                        }
                                    ?>
                                    </select></td>
                                    </tr>
                                </table>
                                <table width="500" height="44" cellpadding="0" cellspacing="0">
                                    <tr>
                                    <td><button class="btn btn-primary btnbutton" name="grabarCita" type="button" id="grabarCita" value="Grabar la cita" onClick="javascript:mandar(true);">Guardar Cita</button></td>
                                    <td><button class="btn btn-primary" name="anularCita" type="button" id="anularCita" value="Cancelar" onClick="javascript:mandar(false);">Cancelar</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
