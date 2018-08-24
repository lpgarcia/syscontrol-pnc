<?php
require_once '../../clases/Conexion.php';
require_once '../../clases/Usuarios.php';

	$usuario = $_POST['Usuario'];
	$pass = sha1($_POST['Password']);
	$rol = $_POST['RolSelect'];
	$nombre = $_POST['Nombre'];
	$email = $_POST['Email'];
	$empleado = $_POST['EmpleadoSelect'];

	$datos=array(
					$usuario,
					$pass,
					$rol,
					$nombre,
					$email,
					$empleado);

	$obj = new usuarios();
	echo $obj->registroUsuario($datos);
 ?>
