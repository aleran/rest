$("#validateTipsAdd")
.removeClass("ui-state-highlight")
.text("¡Los campos (*) son requeridos.!");
block=1;
blocked['cedula']=0;
blocked['usuario']=0;
$(function(){
	$( "#AggSelectRol" ).selectmenu();
	//~ $( "#TypeDocument" ).selectmenu();
});
function funcionSFB01(){
	var data01 = $("#AggUsuario").val();
	var dataString = 'comprobar='+data01;
	$.ajax({
		type: 'POST',
		url: 'funciones/subfuncionB01020101.php',
		data: dataString,
		beforeSend: function () {
			$("#cargadouser").html('<img src="img/loading.gif" style="width:18px;display:inline" />');
		},
		success: function(data) {
			$('#cargadouser').fadeIn(0);
			$('#cargadouser').html(data);
		}
	});
}
function funcionSFB02(){
	var data01 = $("#AggCedula").val();
	var data02 = $("#TypeDocument").val();
	var dataString = 'comprobar='+data01+'&&data02='+data02;
	$.ajax({
		type: 'POST',
		url: 'funciones/subfuncionB01020102.php',
		data: dataString,
		beforeSend: function () {
			$("#cargadocedu").html('<img src="img/loading.gif" style="width:18px;display:inline" />');
		},
		success: function(data) {
			$('#cargadocedu').fadeIn(0);
			$('#cargadocedu').html(data);
		}
	});
}
function permiteme(elEvento, permitidos, idelement, elemento) {
$("input").removeClass("ui-state-error");
var tps = $( "#validateTipsAdd" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "<>=-+,_@\"";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 39, 40, 46];
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
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=39 && codigoCaracter!=40 && codigoCaracter!=46){
		mensaje="El " + elemento + " debe constar de caracteres alfabéticos";
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
function evitar(eventos){
	return false;
}
function capitalizar(change) {
	var tmpStr;
	tmpStr = change.value.toUpperCase().charAt(0) + change.value.substring(1);
	change.value = tmpStr;
}
