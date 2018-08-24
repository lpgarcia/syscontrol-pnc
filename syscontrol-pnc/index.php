<?php
	require_once "clases/Conexion.php";
	$obj = new conectar();
	$conexion = $obj->conexion();

	$sql = "SELECT *FROM Usuario where Es_admin = 1";
	$result = mysqli_query($conexion,$sql);
	$validar = 0;
	if (mysqli_num_rows($result) > 0) {
		$validar = 1;
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Syscontrol-pnc</title>
		<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
		<script src="librerias/jquery-3.2.1.min.js"></script>
		<script src="js/funciones.js"></script>
		<script src="js/login.js"></script>
	</head>
	<body style="background-color: black">
		<br><br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel panel-heading">
								Syscontrol-PNC
						</div>
						<div class="panel panel-body">
							<p>
								<img src="img/pnc.jpg"  height="190px">
							</p>
							<form id="formLogin">
									<label for="">Usuario</label>
									<input type="text" class="form-control input-sm" name="Usuario" id="Usuario">
									<label for="">Contraseña</label>
									<input type="password" class="form-control input-sm"name="Password" id="Password">
									<p></p>
									<span class="btn btn-primary btn-sm" id="Login">Login</span>

									<?php if (!$validar):  ?>
										<a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
									<?php endif; ?>	
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
