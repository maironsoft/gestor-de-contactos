
$(document).ready(function() {
	$(".select2").select2();
});

validarTecla =function (evento){
  code=evento.keyCode;
  if(code>111 && code<122)
      return false;
  else if(code>15 && code<32)
      return false;
  else if(code>32 && code<46)
      return false;
  else if(code>90 && code<94)
      return false;
  else if(code==143 || code==145 || code==155)
      return false;
  else if(code==9)
      return false;
  else
      return true;

}

$("input.buscar").focus(function(){    
  this.select();
});

function moneda(entrada, decimal){
	entrada=(entrada+"").replace('.', '');
    //var num = entrada.replace(/\./g,"");
    //console.log(entrada);
    if(decimal){

	    entrada=entrada.replace(',', '.');
	    entrada=parseFloat(entrada).toFixed(2);
	    entrada=(entrada+"").replace('.', ',');
	}

    numero=entrada.split(",");
    //entrada=numero[0];
    var num = numero[0];
    //console.log(numero);
    if(!isNaN(num)){
        num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,"$1.");
        num = num.split("").reverse().join("").replace(/^[\.]/,"");
        salida = num;
    }
    else{

        salida = "";
    }

    if(decimal){
	    if(typeof(numero[1]) != "undefined"){
	    	salida=salida+","+numero[1];
	    }
	    else{
	    	salida=salida+",00";
	    }
	}
    
    return salida;
}

/*$(".moneda").change(function() {
	var valor=$(this).val().replace('.', '');
	if(valor!="")
		valor= moneda(valor);
	$(this).val(valor+"");
});*/

function reemplazaContenidoNumber(){
	var valor=$(this).val();
    if(valor!="")
    {
    	if($(this).hasClass("number"))
      		$(this).val(moneda(valor+"", false));
      	else $(this).val(moneda(valor+"", true));
    }
    else $(this).val("0,00");
}

$("html").on("blur", "input.float, input.number", reemplazaContenidoNumber);

$("html").on("keyup", "input.float, input.number", function(e){
    if(e.keyCode == 13)
    {
        reemplazaContenidoNumber();
    }
});

$("input.number").keydown(function(event) {
	if(event.shiftKey)
	{
	    event.preventDefault();
	}
	if (event.keyCode == 46 || event.keyCode == 8 || (event.keyCode>111 && event.keyCode<121) || (event.keyCode>36 && event.keyCode<41) || event.keyCode == 9 || event.keyCode == 13 || event.keyCode == 144 || event.keyCode == 27) {
		
	}
	else {
	    if (event.keyCode < 95) {
		    if (event.keyCode < 48 || event.keyCode > 57) {
		        event.preventDefault();
		    }
	    } 
	    else {
	        if (event.keyCode < 96 || event.keyCode > 105) {
	            event.preventDefault();
	        }
	    }
	}
});

$("input.float").keydown(function(event) {
	if(event.shiftKey)
	{
	    event.preventDefault();
	}
	if (event.keyCode == 46 || event.keyCode == 188 || event.keyCode == 8 || (event.keyCode>111 && event.keyCode<121) || (event.keyCode>36 && event.keyCode<41) || event.keyCode == 9 || event.keyCode == 13 || event.keyCode == 144 || event.keyCode == 27) {
		if(event.keyCode == 188){
			var valor = $(this).val();
			pos=valor.indexOf(",");
			if ( pos > -1 || valor=="") {
				event.preventDefault();
			}
		}
	}
	else {
	    if (event.keyCode < 95) {
		    if (event.keyCode < 48 || event.keyCode > 57) {
		        event.preventDefault();
		    }
	    } 
	    else {
	        if (event.keyCode < 96 || event.keyCode > 105) {
	            event.preventDefault();
	        }
	    }
	}
});