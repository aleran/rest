<div id="BusquedaUsuario" title="Buscar Usuario">
Buscar por (Cédula/Nombres/Código):
<input type="text" name="BusUsu" id="BusUsu" onkeyup="BuscarUs()" autocomplete="off" class="text ui-widget-content ui-corner-all" placeholder="Cédula/Nombre/Código" onkeypress="return permitemecaract(event, 'esp','#NewNombreRol', 'busqueda')" />
<div id="tipsavss" class='adver' style="text-align:center"></div>
<div id="showuserdat"></div>
<div id="ResultadosBusqueda" style="display:none;height:78%;overflow:auto"></div>
</div>
<script>
$("#BusquedaUsuario").dialog({
	modal:true,
	width:500,
	height:380,
	buttons:{
		Cancelar:function(){
			$(this).dialog("close");
		}
	},
	close:function(){
		$(this).remove();
	}
});
function permitemecaract(elEvento, permitidos, idelement, elemento) {
$("input").removeClass("ui-state-error");
var tps = $( "#tipsavss" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "-+,_@";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40, 46];
tps.html("");
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
		mensaje="¡La " + elemento + " debe constar de caracteres alfanuméricos!";
		if(codigoCaracter==39){
			mensaje="Caracter no permitido";
		}
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
function BuscarUs(){
	var BusUsu = $('#BusUsu').val();		
	var dataString = 'BusUsu='+BusUsu;
	$.ajax({
		type: "POST",
		url: "funciones/funcionB01010101.php",
		data: dataString,
		beforeSend:function(){
		},
		success: function(data) {
			$('#ResultadosBusqueda').fadeIn(0).html(data);
		}
	});
}
</script>
