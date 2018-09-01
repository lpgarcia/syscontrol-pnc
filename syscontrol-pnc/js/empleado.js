$(document).ready(function(){

  $('#empleadoRegistro').click(function(){

    vacios = validarFormVacio('formEmpleados');
    if (vacios > 0) {
        alertify.alert("Debes de llenar los campos vacios");
        return false;
    }

    datos = $('#formEmpleados').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "../procesos/empleados/registrarEmpleado.php",
        success:function(r){
              if (r == 1) {

                   alertify.success("agregado con exito");
              } else {
                   alertify.error("Fallo al agregar");
              }
        }
    });
  });
});
