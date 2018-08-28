<?php
	require_once "clases/Conexion.php";
	$obj = new conectar();
	$conexion = $obj->conexion();

	$sql = "SELECT *FROM Usuario where Es_admin = 1";
	$result = mysqli_query($conexion,$sql);
	$validar = 0;
	if (mysqli_num_rows($result) > 0) {
		header("location:index.php");
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
		<script src="librerias/jquery-3.2.1.min.js"></script>
		<script src="js/funciones.js"></script>
		<script src="js/registroAdmin.js"></script>

		<?php require_once 'clases/Conexion.php';
	  		$c = new conectar();
			$conexion = $c->conexion();

			$sql = "SELECT id_Empleado,Nombre1, Apellido1, Nip
								FROM empleado";
			$result = mysqli_query($conexion,$sql);
	  ?>
	</head>
	<body style="background-color: black">
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>

				<div class="col-sm-4">
					<div class="panel panel-danger">
						<div class="panel panel-heading">
							Registrar Administrador
						</div>
						<div class="panel panel-body">
							<form id="formRegistro" name="formRegistro">
								<label for="">Usuario</label>
								<input type="text" class="form-control input-sm" name="Usuario" id="Usuario">

								<label for="">Contraseña</label>
								<input type="text" class="form-control input-sm" name="Password" id="Password">

								<label for="">Rol</label>
								<select class="form-control input-sm" id="RolSelect" name="RolSelect">
									<option value="A">Seleccione un Rol</option>
									<option value="0">Usuario</option>
									<option value="1">Administrador</option>
								</select>

								<label for="">Nombre</label>
								<input type="text" class="form-control input-sm" name="Nombre" id="Nombre">

								<label for="">Correo</label>
								<input type="text" class="form-control input-sm" name="Email" id="Email">

								<label for="">Empleado</label>
			                 <select class="form-control input-sm " id="EmpleadoSelect" name="EmpleadoSelect">
			                       <option value="A">Seleccione un Empleado</option>
										  <option value="0">Sin Empleados</option>
			  <?php while($ver=mysqli_fetch_row($result)): ?>
			  							<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]." ".$ver[2]." ".$ver[3]."-P" ?></option>
			  <?php endwhile; ?>
			                   </select>

								<p></p>
								<span class="btn btn-primary" id="Registro">Registrar</span>
								<a href="index.php" class="btn btn-default"> Regresar Login</a>
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
