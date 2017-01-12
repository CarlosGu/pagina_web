<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	<title></title>
</head>

<body>

	<!-- <link href="insertar_usuarios.php" rel="import" /> -->

	<?php

		include_once '../conexion/conexion.php';
		$con = new Conexion();

		if (isset($_POST['btn-save'])) {
			# code...
			$email = $_POST['email'];
			$app = $_POST['app'];
			$apm =  $_POST['apm'];
			$tel =  $_POST['tel'];
			$apodo =  $_POST['apodo'];

			$res = $con->insert($email, $app, $apm, $tel, $apodo);
		}
	?>

	<?php
		if ($res) {
				# code...
				echo "<link href='insertar_usuarios.php' rel='import'/> ";
				echo "<script>
 					window.location = 'index.php';
				</script>";
			}
			else{
				echo "<script>
					window.location = 'insertar_usuarios.php'; 
				</script>";
			}	
	?>

</body>
</html>



