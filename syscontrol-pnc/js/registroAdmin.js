$(document).ready(function(){

  $('#Registro').click(function(){

    vacios = validarFormVacio('formRegistro');
    if (vacios > 0) {
        alert("Debes de llenar los campos vacios");
        return false;
    }

    datos = $('#formRegistro').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "./procesos/regLogin/registrarUsuario.php",
        success:function(r){
              if (r == 1) {
                   alert("agregado con exito");
              } else {
                   alert("Fallo al agregar");
              }
        }
    });
  });
});
