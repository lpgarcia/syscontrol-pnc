<?php
	session_start();
	if(isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin'){

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dar de Baja</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<h1>hola grupo dinamita</h1>
	</body>
</html>

<?php
}else{
	header("../index.php");
}
 ?>
