<?php
	session_start();

if (($_SERVER['REQUEST_METHOD']==='GET') && (!isset($_SESSION['username']))){
?>

<strong>Usuario = usuario</strong>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table>
		<tr>
			<td> Usuario:</td>
			<td><input type="text" name="username"></td>
		</tr>
	</table>
	<input type="hidden" name="login">
	<input type="submit" value="Enviar">
</form>

<?php
}

if (($_SERVER['REQUEST_METHOD']==='GET') && (isset($_SESSION['username']))){
	header('location: index.php');
}

if(isset($_POST['login'])){	
		$_SESSION['username'] = $_POST['username'];
		print_r($_SESSION);
		header('location: index.php');
}
?>