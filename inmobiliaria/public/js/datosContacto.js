$(function(){
  $('#datosFormulario').submit(function(e){
    var route = $('#datosFormulario').data('route');
    var dataContacto = $(this);

    var divExito = $("#mensajeExito");
    divExito.hide();

    var campoNombre = $('#nombre');
    campoNombre.removeClass('is-invalid');
    var mensajeNombre = $('#mensajeNombre');
    mensajeNombre.text('');

    var campoEmail = $('#email');
    campoEmail.removeClass('is-invalid');
    var mensajeEmail = $('#mensajeEmail');
    mensajeEmail.text('');

    var campoAsunto = $('#asunto');
    campoAsunto.removeClass('is-invalid');
    var mensajeAsunto = $('#mensajeAsunto');
    mensajeAsunto.text('');

    var campoMensaje = $('#mensaje');
    campoMensaje.removeClass('is-invalid');
    var mensajeMensaje = $('#mensajeMensaje');
    mensajeMensaje.text('');

    console.log(route);
    e.preventDefault();

    $.ajax({
      type:'POST',
      dataType:'json',
      url:route,
      data:dataContacto.serialize(),
      success:function(Response){
        console.log(Response);
        divExito.show();
        document.getElementById("datosFormulario").reset();
      },
      error: function(response) {
        console.log(response);

        if ('nombre' in response["responseJSON"]["errors"]) {
          campoNombre.addClass('is-invalid');
          mensajeNombre.text(response["responseJSON"]["errors"]["nombre"][0]);
        }

        if ('email' in response["responseJSON"]["errors"]) {
          campoEmail.addClass('is-invalid');
          mensajeEmail.text(response["responseJSON"]["errors"]["email"][0]);
        }

        if ('asunto' in response["responseJSON"]["errors"]) {
          campoAsunto.addClass('is-invalid');
          mensajeAsunto.text(response["responseJSON"]["errors"]["asunto"][0]);
        }

        if ('mensaje' in response["responseJSON"]["errors"]) {
          campoMensaje.addClass('is-invalid');
          mensajeMensaje.text(response["responseJSON"]["errors"]["mensaje"][0]);
        }
      }
    });


  });
});
