<?php
    include 'php/Inicio_Sesion/usuarios.php';
    require 'php/consultar/buscar.php';
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
    <script src="js/consultar/min.js?v=<?php echo(rand()); ?>"></script>
    <link rel="icon" href="img/Logos/PNG/LogoPNG.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>¿
    <link rel="stylesheet" href="css/style_dashboard_tables.css?v=<?php echo(rand()); ?>" />
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
                            <a href="" class="dashboard-nav-boton-desplegable-item">Usuarios registrados</a>
                            <a href="dashboard_tabla_citas.php" class="dashboard-nav-boton-desplegable-item">Citas agendadas</a>
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
                    <div class="form-1-2">
                        <h1 class="text-center">USUARIOS REGISTRADOS</h1>
                    </div>
                    <div class="Tabla">
                        <?php echo $salida;?>
                    <table id="table_id" class="tabla_datos">
                        <thead class="table-dark">
                        </thead>
                        <tbody id="datos">
                        </div>
                    
                    <script src="js/consultar/jquery.min.js.js?v=<?php echo(rand()); ?>"></script>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#table_id').dataTable({
            responsive: true,
            autoWidth: false,

            "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se ha encontrado - Disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior',

            },
        }
        });
        
    </script>

</body>
</html>
