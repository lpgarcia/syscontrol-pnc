<?php
require_once "../../clases/Conexion.php";
$c = new conectar();
$conexion= $c->conexion();

	$consulta = "SELECT
							id_Usuario,
							Usuario,
							Es_admin,
							Nombre,
							Correo
	 				  FROM Usuario";

	$result = mysqli_query($conexion, $consulta);
 ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
		<caption> <label for="">Usuarios</label> </caption>

		<tr>
			<td>Usuario</td>
			<td>Nombre</td>
			<td>Es_admin</td>
			<td>Correo</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>

<?php while($ver = mysqli_fetch_row($result)): ?>

		<tr>
			<td><?php echo $ver[1]; ?></td>
			<td><?php echo $ver[3]; ?></td>
			<td><?php echo $ver[2]; ?></td>
			<td><?php echo $ver[4]; ?></td>

			<td>
				<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizaUsuario" onclick="agregaDatosUsuario('<?php echo $ver[0];?>')">
					<span class="glyphicon glyphicon-pencil"></span>
				</span>
			</td>

			<td>
				<span class="btn btn-danger btn-xs" onclick="eliminarUsuario('<?php echo $ver[0];?>')">
					<span class="glyphicon glyphicon-remove"></span>
				</span>
			</td>
		</tr>
	<?php endwhile; ?>
</table>
