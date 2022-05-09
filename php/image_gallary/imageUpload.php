<?php

session_start();
require('db_config.php');

if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){

	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$nombre_imagen = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name']; // Se usa para cambiar archivos en la carpeta


	if(move_uploaded_file($tmp, 'uploads/'.$nombre_imagen)){

		$sql = "INSERT INTO image_gallery (title, image) VALUES ('".$_POST['title']."', '".$nombre_imagen."')";

		$result = $conn->query($sql);

        if($result)
        {
        	$_SESSION['success'] = 'Image Uploaded successfully.';
		    header("Location: ./image_gallary.php"); 

        }
        else{
        	$_SESSION['error'] = 'image uploading failed';
		    header("Location: ./image_gallary.php");
        }
	}else{
		$_SESSION['error'] = 'image uploading failed';
		header("Location: ./image_gallary.php");
	}
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: ./image_gallary.php");
}

?>