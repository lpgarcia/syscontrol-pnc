<?php
require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";
	$datos= array(
		$_POST['idUsuario'],
		$_POST['UsuarioU'],
		$_POST['RolSelectU'],
		$_POST['NombreU'],
		$_POST['EmailU']
	);

	$obj = new usuarios();
	echo $obj->actualizarUsuarios($datos);
 ?>
