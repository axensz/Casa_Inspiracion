<?php
    $mysqli = new mysqli("localhost", "root", "", "login_registro_db");

    
    $salida = "";
    $query = "SELECT * FROM db_login ORDER By id";

    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query ="SELECT id ,tipo_usuario, nombre, correo, ocupacion, telefono, usuario FROM db_login WHERE id LIKE '%".$q."%' OR tipo_usuario LIKE '%".$q."%' OR nombre LIKE '%".$q."%' OR correo LIKE '%".$q."%' OR ocupacion LIKE '%".$q."%'  OR telefono LIKE '%".$q."%' OR usuario LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows > 0) {
        $salida.="<table class='tabla_datos' id='table_id'>
                    <thead class='table-dark'>
                        <tr class='tr_tr'>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Usuario</td>
                            <td>Correo</td>
                            <td>Ocupación</td>
                            <td>Telefono</td>
                        </tr>
                </thead>
                    <tbody>";

                    while($fila = $resultado->fetch_assoc()){
                        $salida.="<tr>
                                    <td>".$fila['id']."</td>
                                    <td>".$fila['nombre']."</td>
                                    <td>".$fila['usuario']."</td>
                                    <td>".$fila['correo']."</td>
                                    <td>".$fila['ocupacion']."</td>
                                    <td>".$fila['telefono']."</td>
                                </tr>";
                    }

        $salida.="</tbody></table>";

    }else{
        $salida.="No existen datos";
    }


    $mysqli->close();

?>