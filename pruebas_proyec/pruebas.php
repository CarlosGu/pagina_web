# code...
				echo "<link href='insertar_usuarios.php' rel='import'/> ";
				echo "<script>
					var alert = '<div class='alert alert-danger' role='alert'>';
					function mostarr(){
    					document.getElementById('#alerta').innerHTML = alert;
    					setInterval(render, 900);
					}
					
					
					
					function render(){
						window.location = 'index.php';
					} 
					
				</script>";
			}
			else{
				echo "<script>
					alert('Inserted');  
				</script>";
			}	


			document.getElementById('alerta').style.visibility = 'visible';
    				setInterval(render, 100);