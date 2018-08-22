<?php

	class usuarios{

		public function registroUsuario($datos){

		  $c = new conectar();
 		  $conexion = $c->conexion();

        $sql = "INSERT INTO Usuario (Usurario, Contraseña, Es_admin, Nombre, Correo, Empleado_id_Empleado)
       VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]' )";

			$query = mysqli_query($conexion,$sql);
			return $query;
      }
	}
 ?>
