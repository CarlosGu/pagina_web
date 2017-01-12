<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../stylees/style1.css">


	<title></title>
	<style type="text/css">
		body{
			background-color:  rgba(0, 0, 0, 0.06);
		}
	</style>
</head>

<body>

	<!-- <div id="alerta">
		<div class='alert alert-danger' role='alert'>Registro Exitoso</div>
	</div> -->

	<div class="navbar navbar-inverse navbar-fixed-top alert alert-danger">
  		<strong>¡Registrar Usuario Nuevo!</strong>
	</div>
	

	<div class="container" id="formulario1">

		<form action="createuser.php" method="post" id="formulario">
			<div class="form-group">
	      		<label for="email">Email:</label>
	      		<input name="email" type="email" class="form-control" id="nom" placeholder="Enter email">
	    	</div>
	    	<div class="form-group">
			    <label for="pwd">APP:</label>
			    <input name="app" type="" class="form-control" id="app" placeholder="Enter password">
	    	</div>
	    	<div class="form-group">
			    <label for="pwd">APM:</label>
			    <input name="apm" type="" class="form-control" id="apm" placeholder="Enter APM">
	    	</div>
	    	<div class="form-group">
			    <label for="pwd">Tel:</label>
			    <input name="tel" type="" class="form-control" id="tel" placeholder="Enter Tel">
	    	</div>
	    	<div class="form-group">
			    <label for="pwd">Apodo:</label>
			    <input name="apodo" type="" class="form-control" id="apodo" placeholder="Enter Apodo">
	    	</div>
	    	<button type="submit" id="create_user" name="btn-save" class="btn btn-primary btn-block" onclick="stop1()">Create User</button>
	    	<!-- <button type="submit" name="btn-save" class="btn btn-primary" onclick="stop1()">Submit</button> -->
		</form>	
	</div>

</body>
</html>