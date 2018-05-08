<!DOCTYPE html>
<?php
			if (!isset($_COOKIE["bienvenida"])){
			echo "<script> alert('Bienvenido al sistema de Carrito de compra, para comprar un artículo sólo presione
			en agregar a carrito para agregar al carrito de compra. Recuerde enviar un correo a nuestro contacto en caso de 
			pedir stock no disponible.')</script>"; 
			setcookie('bienvenida',1,time()+(60*5));
			}
?>
<?php
	require('includes/check_login.php');
?>


<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<nav class="navbar navbar-expand-lg navbar-light bg-light" style = "background-color: #3333ff;">
  		<a class="navbar-brand " style= "color: white" >Tu Tienda Online</a>
   		</nav>

	</head>
	<body>
		
		<h3>Hola, <?php echo $_SESSION['username']?> </h3>
		<h3>Ingresa los datos de tu vehículo</h3>
		<p> 
			<hr>
		</p> 
		

	</body>
</html>