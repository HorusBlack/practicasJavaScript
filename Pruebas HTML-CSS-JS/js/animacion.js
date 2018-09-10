// Code goes here
/*
$(document).ready(function(){
     var boton_rut;
     boton_rut = $('#formulario');
     boton_rut.on('click', function(){
        var valor_input;
       valor_input = $('#rut_txt');
       if(valor_input.val()==="hola"){
       }
     }); 
   });
   */

$("#formulario").submit(function () {
  if (($("#nombre").val().length < 1)|| ($("#edad").val().length < 1)) {
    alert("Debes llenar ambos campos");
    $('input:text').focus(
      function () {
        //$(this).css({'background-color' : '#784521'});
        $(this).effect("highlight", { color: "#ff0000" }, 3000);
      });
    return false;
  }else{
    return true;
  }
});

$("#formulario").submit(function () {
  if (($("#nombre").val().length < 5)) {
    $('input:text').focus(
      function () {
        //$(this).css({'background-color' : '#794613'});
        $(this).effect("highlight", { color: "#ff0000" }, 3000);
      });
    alert("El nombre debe tener como mínimo 5 caracteres");
    return false;
  }else{
    return true;
  }
});  