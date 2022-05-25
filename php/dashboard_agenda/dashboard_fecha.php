<?php
    include '../Inicio_Sesion/usuarios.php';
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
    <link rel="stylesheet" href="../../css/style_dashboard.css?v=<?php echo(rand()); ?>" />
    <script src="../../js/dashboard.js?v=<?php echo(rand()); ?>"></script>
    <script src="../../js/modal.js?v=<?php echo(rand()); ?>"></script>
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="dashboard.php" class="inspiracion-logo"><span>Casa Inspiración</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="../../index.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Inicio</a>
                <a href="../../dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <?php if ($tipo_usuario == 1) { ?>
                    <div class='dashboard-nav-boton-desplegable'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-boton-desplegable-toggle"><i class="fas fa-users"></i>Administrar</a>
                        <div class='dashboard-nav-boton-desplegable-menu'>
                            <a href="../../dashboard_usuarios.php" class="dashboard-nav-boton-desplegable-item">Usuarios registrados</a>
                            <a href="../../dashboard_tabla_citas.php" class="dashboard-nav-boton-desplegable-item">Citas agendadas</a>
                        </div>
                    </div>
                <?php } ?>
                    <a href="dashboard_editar_perfil.php" class="dashboard-nav-item"><i class="fas fa-cogs"></i>Editar perfil</a>
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
                <div>
                    <div class="text-center">
                    <?php
                        // Se incluye el miniscript de manejo de fechas.
                            include ("inc/fechas.php");
                            ?>
                            <title>Cambio de fecha</title>
                            <script language="javascript" type="text/javascript">
                        /* La siguiente funci�n se activa cuando se pulsa el bot�n de aceptar una nueva fecha o el de
                        descartar cambios para seguir con la fecha actual. Si se pulsa el de aceptar una nueva fecha,
                        el argumento vale true y se cambia el campo oculto de fecha al valor seleccionado por el usuario.
                        En caso de que el argumento valga false (si se ha pulsado en el bot�n de descarte), no se producen
                        cambios en el campo oculto, con lo que tiene el contenido por defecto.*/
                            function enviar(cambio){
                                if (cambio){
                                document.getElementById("fechaEnCurso").value=document.getElementById("annio").value+"-"+document.getElementById("mes").value+"-"+document.getElementById("dia").value;
                                }
                                document.formularioDeCambioDeFecha.submit();
                            }
                        /* La siguiente funci�n establece, en las listas, los valores de la fecha actual como seleccionados.*/
                            function ajustarCampos(){
                                document.getElementById("dia").value="<?php echo ($diaActual); ?>";
                                document.getElementById("mes").value="<?php echo ($mesActual); ?>";
                                document.getElementById("annio").value="<?php echo ($annioActual); ?>";
                            }
                            </script>
                        </head>
                        <body onLoad="javascript:ajustarCampos();">
                        <form action="../../dashboard.php" method="post" name="formularioDeCambioDeFecha" id="formularioDeCambioDeFecha">
                            <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($_POST["fechaEnCurso"]); ?>">
                        </form>
                        <p>LA FECHA ACTUAL ES:&nbsp;
                        <?php
                        /* Se muestra la fecha en curso.*/
                            echo ($diaActual." del ".$mesActual." de ".$annioActual);
                        ?>
                        </p>
                        <p>SELECCIONE LA NUEVA FECHA:</p>
                        <div class="cuadros">
                            <table width="500" cellspacing="0" cellpadding="2">
                                <tr>
                                <td width="40" >DIA:</td>
                                <td width="100"><select name="dia" id="dia">
                                    <?php
                                    for ($i=1;$i<=31;$i++){
                                        echo ("<OPTION VALUE='");
                                        printf ("%02s",$i);
                                        echo ("'>");
                                        printf("%02s",$i);
                                        echo ("</OPTION>".salto);
                                    }
                                    ?>
                                </select></td>
                                <td width="60">MES:</td>
                                <td width="161"><select name="mes" id="mes">
                                    <option value="01">Enero</option>
                                    <option value="02">Febrero</option>
                                    <option value="03">Marzo</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Mayo</option>
                                    <option value="06">Junio</option>
                                    <option value="07">Julio</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select></td>
                                <td width="69">A&Ntilde;O:</td>
                                <td width="70"><select name="annio" id="annio">
                                    <?php
                                    for ($i=2022;$i<=2022;$i++) echo ("<OPTION VALUE='".$i."'>".$i."</OPTION>".salto);
                                    ?>
                                </select></td>
                                </tr>
                            </table>
                        </div>
                        <p>
                            <button class="btn btn-primary btnfechacambio" name="aceptarCambio" type="button" id="aceptarCambio" value="Aceptar Cambio" onClick="javascript:enviar(true);">Cambiar</button>
                            <button class="btn btn-primary btnfechanocambio" name="descartarCambio" type="button" id="descartarCambio" value="Descartar Cambio" onClick="javascript:enviar(false);">Cancelar</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
