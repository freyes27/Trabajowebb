
/* global i */

function checkRut(Rut,CodVerificador){
    var  valor= Rut.value.replace(".", "");
     valor = valor.replace("-", "");
 var cuerpo= Rut.value;
 
    var resultado= (cuerpo.length <=8 && CodVerificador.value.length =1);
    if (!resultado)
        //return resultado;
    alert("....")
    var suma =0;
    var multiplo=2;
    var index=0;
    for (i=1 <= cuerpo.length; i++){
      index = multiplo* valor.charAt(cuerpo.length+ i);
      suma = suma + index;
      if (multiplo<=7){
          multiplo=multiplo+1;
          alert("invalido");
      }else{
          multiplo=2;
      }
    } 
     var dvEsperado=11 -(suma % 11);
     resultado=dvEsperado = CodVerificador;
     return resultado;
 
  alert("valido");
 
 }
