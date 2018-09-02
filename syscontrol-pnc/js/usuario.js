$(document).ready(function(){
  $('#tablaUsuariosLoad').load('../vistas/usuarios/tablaUsuarios.php');
  $('#usuRegistro').click(function(){

    vacios = validarFormVacio('formRegistroUsu');
    if (vacios > 0) {
        alertify.alert("Debes de llenar los campos vacios");
        return false;
    }

    datos = $('#formRegistroUsu').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "../procesos/regLogin/registrarUsuario.php",
        success:function(r){
              if (r == 1) {
					  $('#formRegistroUsu')[0].reset();
						$('#tablaUsuariosLoad').load('../vistas/usuarios/tablaUsuarios.php');
                   alertify.success("agregado con exito");
              } else {
                   alertify.error("Fallo al agregar");
              }
        }
    });
  });
});

function agregaDatosUsuario(idusuario){
	$.ajax({
		type:"POST",
		data:"idusuario=" + idusuario,
		url: "../procesos/usuarios/obtenDatosUsuarios.php",
		success:function(r){
			dato = jQuery.parseJSON(r);
			$('#idUsuario').val(dato['id_Usuario']);
			$('#UsuarioU').val(dato['Usuario']);
			$('#RolSelectU').val(dato['Es_admin']);
			$('#NombreU').val(dato['Nombre']);
			$('#EmailU').val(dato['Correo']);
		}
	});
}


$(document).ready(function(){
	$('#btnActualizaU').click(function(){
		datos = $('#formRegistroU').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/usuarios/actualizarUsuario.php",
			success:function(r){
				//console.log(r);
				if (r==1) {
					$('#formRegistroUsu')[0].reset();
					 $('#tablaUsuariosLoad').load('../vistas/usuarios/tablaUsuarios.php');
					alertify.success("Actualizado con exito");
				} else {
					alertify.error("No se puede actualizar");
				}
			}
		});
	});
});

function eliminarUsuario(idusuario){
	  alertify.confirm('¿Desea eliminar este usuario?', function(){
		 $.ajax({
			type:"POST",
			data:"idUsuario=" + idusuario,
			url:"../procesos/usuarios/eliminarUsuario.php",
			success:function(r){

			  if(r==1){
				  $('#formRegistroUsu')[0].reset();
				   $('#tablaUsuariosLoad').load('../vistas/usuarios/tablaUsuarios.php');
				 alertify.success("Eliminado con exito!!");
			  }else{
				 alertify.error("No se pudo eliminar :(");
			  }
			}
		 });
	  }, function(){
		 alertify.error('Cancelo !')
	  });
 }
