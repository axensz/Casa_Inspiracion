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
		$unl = unlink("./uploads/".$nombre_imagen);

		$sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: ../../arte.php");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: ../../arte.php");
}


?>