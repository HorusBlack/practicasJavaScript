// Code goes here

$(document).ready(function(){
  
     var boton_rut;
     
     boton_rut = $('#formulario');
     
     boton_rut.on('click', function(){
       
        var valor_input, valor_rut;
       
       valor_input = $('#rut_txt');
       valor_rut = valor_input.val();
       
       if(valor_rut === ''){
         alert('No tiene nada el input');
       }else{
          document.formulario1.submit(); 
       }
       
     }); 
     
   });