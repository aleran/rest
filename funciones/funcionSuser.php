<div id="buscaruser" title="Buscar usuario">
	<label>Buscar por (Cédula/Nombres/Código):</label>
<input type="text" name="BusUsuEdit" id="BusUsuEdit" autocomplete="off" class="text ui-widget-content ui-corner-all" placeholder="Cédula/Nombre/Código" onkeypress="return permiteme(event, 'esp','#NewNombreRol', 'busqueda')" />
<span class="validateTips"></span>
<div id="SearchResultDiv"></div>
</div>

<script>
SearchResultDiv = $("#SearchResultDiv");
$("#buscaruser").dialog({
	modal:true,
	width:460,
	height:330,
	close:function(){
		$(this).remove();
	}
});
$("#BusUsuEdit").keyup(function(){
	datos = $("#BusUsuEdit").val();
	$.ajax({
		type:"post",
		url:"funciones/funcionBB.php",
		data:"BusUsuEdit="+datos,
		beforeSend:function(){
			SearchResultDiv.html("Buscando...");
		},
		error:function(){
			SearchResultDiv.html("Error...");
		},
		success:function(resultados){
			SearchResultDiv.html(resultados);
		}
	});
});
function permiteme(elEvento, permitidos, idelement, elemento) {
$("input").removeClass( "ui-state-error" );
var tps = $( ".validateTips" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "<>=-+,_@\"";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40, 46];
switch(permitidos) {
	case 'num':
		permitidos = numeros;
		break;
	case 'car':
		permitidos = caracteres;
		break;
	case 'num_car':
		permitidos = numeros_caracteres;
		break;
	case 'esp':
		permitidos = espe_car_nume;
		break;
}
var evento = elEvento || window.event;
var codigoCaracter = evento.charCode || evento.keyCode;
var caracter = String.fromCharCode(codigoCaracter);
var tecla_especial = false;
for(var i in teclas_especiales) {
	if(codigoCaracter == teclas_especiales[i]) {
		tecla_especial = true;
	}
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=40 && codigoCaracter!=46){
		mensaje="El " + elemento + " debe constar de caracteres alfabéticos";
		if(codigoCaracter==39){
			mensaje="Caracter no permitido";
		}
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tps.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>