<?php
	class empleados{
		public function registroEmpleado($datos){
			$c = new conectar();
         $conexion= $c->conexion();

			$insertEmpleado ="INSERT INTO Empleado
											 VALUES(null,
												 '$datos[0]',
												 '$datos[1]',
												 '$datos[2]',
												 '$datos[3]',
												 '$datos[4]',
												 '$datos[5]',
												 '$datos[6]',
												 '$datos[7]',
												 '$datos[8]',
												 '$datos[9]',
												 '$datos[10]',
												 '$datos[11]',
												 '$datos[12]',
												 '$datos[13]',
												 '$datos[14]',
												 '$datos[15]',
												 '$datos[16]',
												 '$datos[17]',
												 '$datos[17]',
												 '$datos[19]',
												 '$datos[20]',
												 '$datos[21]',
												 '$datos[22]',
												 '$datos[23]' )";
			$query = mysqli_query($conexion,$insertEmpleado);
			return $query;

		}
	}

 ?>
