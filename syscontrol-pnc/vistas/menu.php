
<?php
require_once "dependencias.php";
session_start();
if (isset($_SESSION['usuario'])) {

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MENU </title>
  </head>
  <body  style="background-color: beige;">
    <!-- Begin Navbar -->
    <div id="nav">
      <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
				<a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/pnc.jpg" alt="" width="150px" height="150px"></a>
          </div>

          <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

              <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
              </li>


            </li>

				<?php
            if($_SESSION['usuario']=="admin"):
             ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span>Empleados<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="nuevoEmpleado.php">Nuevo</a></li>
                <li><a href="CompletarInformacion.php">Completar Informacion</a></li>
              </ul>
            </li>
				<?php
          endif;
             ?>


          <?php
          if($_SESSION['usuario']=="admin"):
           ?>
             <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
              </li>
           <?php
         endif;
            ?>

				<?php
				if($_SESSION['usuario']=="admin"):
				 ?>
				 <li><a href="destino.php"><span class="glyphicon glyphicon-share"></span> Destino</a>
            </li>
				<?php
          endif;
             ?>

				<?php
				if($_SESSION['usuario']=="admin"):
				 ?>
            <li><a href="situacionAdmin.php"><span class="glyphicon glyphicon-lock"></span> Situacion Administrativa</a>
            </li>
				<?php
          endif;
             ?>

				<li><a href="reportes.php"><span class="glyphicon glyphicon-duplicate"></span> Reportes</a>
				</li>

            <li class="dropdown" >
              <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>

              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
    </div>
  </div>
  </body>
</html>

</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }

    else {
      $('.logo').height(100);
    }
  }
  );
</script>

<?php
}else {
  header('location:../index.php');
}
 ?>
