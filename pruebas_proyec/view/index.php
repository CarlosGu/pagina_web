<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
      		position: relative; 
  		}
  		#section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  		#section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
		#section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
		#section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
		#section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}	
	</style>
	

	<title>Aplicacion Prueba</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
    		<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          			<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="index.php">WebSiteName</a>
    		</div>
    	<div>
      	<div class="collapse navbar-collapse" id="myNavbar">
        	<ul class="nav navbar-nav">
          		<li><a href="#section1">Home</a></li>
          		<li><a href="#section2">About</a></li>
          		<li><a href="#section3">Contact</a></li>
          		<li class="dropdown">
          			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            		<ul class="dropdown-menu">
              			<li><a href="#section41">Section 4-1</a></li>
              			<li><a href="#section42">Section 4-2</a></li>
            		</ul>
          		</li>
          		<li class="active"><a href="insertar_usuarios.php">Insertar Usuarios</a></li>
        	</ul>
      	</div>
    	</div>
  		</div>
	</nav>    

	<div id="section1" class="container-fluid">
  		<h1></h1>
  		<p></p>
  		<p></p>
	</div>
	<div id="section2" class="container-fluid">
  		<h1></h1>
  		<p></p>
  		<p></p>
	</div>
	<div id="section3" class="container-fluid">
  		<h1></h1>
  		<p></p>
  		<p></p>
	</div>
	<div id="section41" class="container-fluid">
  		<h1>Section 4 Submenu 1</h1>
  		<p></p>
  		<p></p>
	</div>
	<div id="section42" class="container-fluid">
  		<h1>Section 4 Submenu 2</h1>
  		<p></p>
  		<p></p>
	</div>

</body>
</html>