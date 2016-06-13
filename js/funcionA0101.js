var timesession = 1300000;
//~ var timesession = 25000;
var restante=timesession;
var cierre;
var avisar;
$(document).ready(function(){
	$("#sesion00").focus();
	tiempoDeSesion(timesession);
});
function tiempoDeSesion(tiempo){
	 cierre = setTimeout(function(){
		window.location.replace("./funciones/funcionA0101.php");
	}
	, tiempo);
	
	setInterval(function(){
		restante=restante-1000;
	}
	, 1000);
	
	avisar = setTimeout(function(){
		$("#aviso").html("¡Quedan 5 minutos en la sesión!");
		$("#aviso").dialog({
		modal: true,
		buttons: {
			Ok: function() {
				renovacion();
				$(this).dialog( "close" );
			}
		},
		show: {
			effect: "scale",
			duration: 300
		},
		hide: {
			effect: "scale",
			duration: 300
		}
		});
	}
	, tiempo-300000);
	//~ , tiempo-10000);
}
function renovacion(){
	//~ if(restante<10000){
	if(restante<300000){
		$.ajax({
			url: 'funciones/functionA00.php',
			beforeSend: function () {
				$("#aviso").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
			},
			success: function(data) {
				$('#aviso').html(data);
			}
		});
		clearTimeout(cierre);
		clearTimeout(avisar);
		timesession=1300000;
		//~ timesession=25000;
		restante=timesession;
		tiempoDeSesion(timesession);
	}
}
function renovar(){
		clearTimeout(cierre);
		clearTimeout(avisar);
		timesession=1300000;
		//~ timesession=25000;
		restante=timesession;
		tiempoDeSesion(timesession);
}
