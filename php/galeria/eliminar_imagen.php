<?php
session_start();
require('db_config.php');


if(isset($_POST) && !empty($_POST['id'])){

	   //Seleccionar imagen para eliminar 
	   $sql_select = "SELECT image FROM image_gallery WHERE id = ".$_POST['id'];
	   $select_result = $conn->query($sql_select);
	    $row = $select_result->fetch_row();
		$nombre_imagen = $row[0];

		// Eliminar de la carpeta
		$unl = unlink("./imagenes_subidas/".$nombre_imagen);

		$sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Imagen eliminada correctamente.';
		header("Location: ../../galeria.php");
}else{
	$_SESSION['error'] = 'Por favor selecciona una imagen o escribe el titulo';
	header("Location: ../../galeria.php");
}


?>