<?php
	session_start();
	if(isset($_SESSION['usuario'])){

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Usuarios</title>
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
