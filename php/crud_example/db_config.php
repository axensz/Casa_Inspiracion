 <?php

   	$name = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login_registro_db";


	$conn = new mysqli($name, $username, $password, $dbname);


	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
		}


	?>