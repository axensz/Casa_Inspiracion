<?php

session_start();
require('db_config.php');

if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){

	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$nombre_imagen = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name']; // Se usa para cambiar archivos en la carpeta


	if(move_uploaded_file($tmp, 'imagenes_subidas/'.$nombre_imagen)){

		$sql = "INSERT INTO image_gallery (title, image) VALUES ('".$_POST['title']."', '".$nombre_imagen."')";

		$result = $conn->query($sql);

        if($result)
        {
        	$_SESSION['success'] = ' Imagen subida exitosamente.';
		    header("Location: ../../galeria.php"); 

        }
        else{
        	$_SESSION['error'] = ' Ha ocurrido un error al subir la imagen';
		    header("Location: ../../galeria.php");
        }
	}else{
		$_SESSION['error'] = ' Ha ocurrido un error al subir la imagen';
		header("Location: ../../galeria.php");
	}
}else{
	$_SESSION['error'] = ' Selecciona una imagen o escribe el titulo';
	header("Location: ../../galeria.php");
}

?>