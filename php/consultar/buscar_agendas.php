<?php
    $mysqli = new mysqli("localhost", "root", "", "agenda");

    
    $salida = "";
    $query = "SELECT * FROM citas ORDER By idcita";

    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query ="SELECT idcita ,horacita, diacita, asuntocita, correo FROM db_login WHERE idcita LIKE '%".$q."%' OR horacita LIKE '%".$q."%' OR diacita LIKE '%".$q."%' OR asuntocita LIKE '%".$q."%' OR correo LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows > 0) {
        $salida.="<table class='tabla_datos' id='table_id'>
                    <thead class='table-dark'>
                        <tr class='tr_tr'>
                            <td>ID</td>
                            <td>correo</td>
                            <td>Hora</td>
                            <td>Dia</td>
                            <td>Asunto</td>
                        </tr>
                </thead>
                    <tbody>";

                    while($fila = $resultado->fetch_assoc()){
                        $salida.="<tr>
                                    <td>".$fila['idcita']."</td>
                                    <td>".$fila['correo']."</td>
                                    <td>".$fila['horacita']."</td>
                                    <td>".$fila['diacita']."</td>
                                    <td>".$fila['asuntocita']."</td>
                                </tr>";
                    }

        $salida.="</tbody></table>";

    }else{
        $salida.="No existen datos";
    }


    $mysqli->close();

?>