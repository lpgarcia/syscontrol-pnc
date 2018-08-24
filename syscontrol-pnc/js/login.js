$(document).ready(function(){
	$('#Login').click(function(){

		vacios = validarFormVacio('formLogin');
		if (vacios > 0) {
			 alert("Debes de llenar los campos vacios");
			 return false;
		}

  datos = $('#formLogin').serialize();
  $.ajax({
      type: "POST",
      data: datos,
      url: "./procesos/regLogin/login.php",
      success:function(r){
			if (r==1) {
				window.location = "./vistas/inicio.php"
			} else {
					alert("usuario o Contraseña incorrectos");
			}
      }
  });
});
});
