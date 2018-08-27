<?php
	session_start();
	if(isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin'){

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Usuarios</title>

		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Administrar Usuarios</h1>
			<div class="row">
				<div class="col-sm-4">

					<form id="formRegistroUsu" name="formRegistro">
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
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]." ".$ver[2]." ".$ver[3] ?></option>
					<?php endwhile; ?>
							 </select>

						<p></p>
						<span class="btn btn-primary" id="usuRegistro">Registrar</span>

					</form>

				</div>
				<div class="col-sm-6">
					<div id="tablaUsuariosLoad">

					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
			  <div class="modal fade" id="actualizaUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
			        </div>
			        <div class="modal-body">

						  <form id="formRegistroU" name="formRegistro">
							 <input type="text" hidden="" name="idUsuario" id="idUsuario">

							<label for="">Usuario</label>
 	 						<input type="text" class="form-control input-sm" name="UsuarioU" id="UsuarioU">


 	 						<label for="">Rol</label>
 	 						<select class="form-control input-sm" id="RolSelectU" name="RolSelectU">
 	 							<option value="A">Seleccione un Rol</option>
 	 							<option value="0">Usuario</option>
 	 							<option value="1">Administrador</option>
 	 						</select>

 	 						<label for="">Nombre</label>
 	 						<input type="text" class="form-control input-sm" name="NombreU" id="NombreU">

 	 						<label for="">Correo</label>
 	 						<input type="text" class="form-control input-sm" name="EmailU" id="EmailU">



 	 					</form>
			        </div>
			        <div class="modal-footer">
			          <button type="button" id="btnActualizaU" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

			        </div>
			      </div>
			    </div>
			  </div>

	</body>
</html>

<?php
}else{
	header('location:../index.php');
}
 ?>
