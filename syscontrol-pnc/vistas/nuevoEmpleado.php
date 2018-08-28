<?php
	session_start();
	if(isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin'){

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nuevo Empleado</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
	<div class="conteiner">
		<form id="formEmpleados">



<!-- fila para titulo -->
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<h1>INGRESAR PERSONAL</h1>
					<br><br>
				</div>
				<div class="col-sm-4"></div>
			</div>


<!-- fila para primera parte de formulario -->
			<div class="row">
				<div class="col-sm-2"></div>

				<div class="col-sm-3">
					<hr>
					<h4>INFORMACION PERSONAL</h4>
					<!-- formulario 1 -->
					<div class="form-group">
	  		      <label for="">Primer Nombre</label>
	  		      <input type="text" class="form-control input-sm">

	  				<label for="">Primer Apellido</label>
	  				<input type="text" class="form-control input-sm" name="Usuario" id="Usuario">

	  				<label for="">Genero</label>
	  		      <select id="" class="form-control input-sm">
	  		        <option value="">M</option>
	  				  <option value="">F</option>
	  		      </select>

	  				<label for="">DPI</label>
	  				<input type="text" class="form-control input-sm" name="" id="">

	  				<label for="">Originario</label>
	  				<input type="text" class="form-control input-sm" name="" id="">

	  				<label for="">Nombre Mama</label>
	  				<input type="text" class="form-control input-sm" name="" id="">
	  		    </div>

					<!-- fin formulario 1 -->
				</div>

				<div class="col-sm-3">
				<hr>
				<br><br><br>
		    <div class="form-group">
				 <label for="">Segundo Nombre</label>
				 <input type="text" class="form-control input-sm" name="" id="">

				 <label for="">Segundo Apellido</label>
				 <input type="text" class="form-control input-sm" name="" id="">

				 <label for="">NIT</label>
				 <input type="text" class="form-control input-sm" name="" id="">

				 <label for="">Telefono</label>
				 <input type="text" class="form-control input-sm" name="" id="">
		    </div>

						<!-- fin de formulario -->
				</div>

				<div class="col-sm-3">
					<hr>
					<br><br><br>
					<!-- formulario 2 -->
					<div class="form-group">
					 <label for="">Tercer Nombre</label>
	  				 <input type="text" class="form-control input-sm" name="" id="">

	  				 <label for="">Tercer Apellido</label>
	  				 <input type="text" class="form-control input-sm" name="" id="">

	  				 <label for="">IGSS</label>
	  				 <input type="text" class="form-control input-sm" name="" id="">

	  				 <label for="">Fecha Nacimiento</label>
	  				 <input type="text" class="form-control input-sm" name="" id="">


						<label for="">Grado de Estudio</label>
						<input type="text" class="form-control input-sm" name="" id="">

						<label for="">Nombre Papa</label>
						<input type="text" class="form-control input-sm" name="" id="">
					</div>
					<!-- fin formulario 3 -->
				</div>
			   <div class="col-sm-3"></div>
			</div>


<!-- fila para segunda parte del formulario -->
			<div class="row">
				<br>
				<div class="col-sm-2">

				</div>

				<div class="col-sm-3">
					<hr>
					<h4>RECIDENCIA</h4>
					<label for="">Departamento</label>
					<input type="text" class="form-control input-sm" name="" id="">
				</div>

				<div class="col-sm-3">
					<hr>
					<br>
					<label for="">Municipio</label>
					<input type="text"class="form-control input-sm" name="" id="">
				</div>

				<div class="col-sm-3">
					<hr>
					<br><br>
					<label for="">Aldea</label>
					<input type="text"  class="form-control input-sm" name="" id="">
				</div>

				<div class="col-sm-2"></div>

			</div>

<!-- fila para Tercera parte del formulario -->
						<div class="row">
							<br>
							<div class="col-sm-2">

							</div>

							<div class="col-sm-3">
								<hr>
								<h4>INFORMACION LABORAL</h4>
								<label for="">NIP</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Fecha de Ingreso Comiaria</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Fecha Graduacion</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Puesto</label>
								<input type="text" class="form-control input-sm" name="" id="">
							</div>

							<div class="col-sm-3">
								<hr>
								<br>
								<label for="">Partida Presupuestaria</label>
								<input type="text"class="form-control input-sm" name="" id="">

								<label for="">Tiempo de Servicio</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Sede</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Fecha de Alta</label>
								<input type="text" class="form-control input-sm" name="" id="">
							</div>

							<div class="col-sm-3">
								<hr>
								<br><br>
								<label for="">Resolucion</label>
								<input type="text"  class="form-control input-sm" name="" id="">

								<label for="">Promocion</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Grado Gerarquico</label>
								<input type="text" class="form-control input-sm" name="" id="">

								<label for="">Fecha</label>
								<input type="text" class="form-control input-sm" name="" id="">
							</div>

							<div class="col-sm-2"></div>

						</div>

<!-- fila para los botones -->
						<div class="row">
							<br><br>
							<div class="col-sm-3"></div>
							<div class="col-sm-4">
								<span class="btn btn-default" id="empleadoRegistro">Registrar Empleado</span>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<br><br>
      </form>
	</div>
	</body>
</html>

<?php
}else{
	header('location:../index.php');
}
 ?>
