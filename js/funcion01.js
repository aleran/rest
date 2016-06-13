function reajax(){
	$.ajax({
		url: "funciones/funcion0101.php",
		beforeSend:function(){
			// $("#ShowOrdenActive").html("Cargando...");
		},
		error:function(){
			$("#ShowOrdenActive").html("Error...");
		},
		success:function(data){
			$("#ShowOrdenActive").html(data);
		}
	});
}
reajax();

setInterval(reajax,8000);