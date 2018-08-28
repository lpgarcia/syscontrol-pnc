<?php
    class conectar{
        private $servidor = 'localhost';
        private $usuario = 'syscontrolpnc';
        private $password = 'Syscontrol-PNC1';
        private $bd = 'sys_ControlPNC';

        public function conexion(){
            $conexion = mysqli_connect($this->servidor,
                                       $this->usuario,
                                       $this->password,
                                       $this->bd);
            return $conexion;
        }
    }

// probando la conexion
/*    $obj = new conectar();
    if ($obj->conexion()) {
      echo "Conexion";
    } else {
      echo "Error";
    }
*/
 ?>
