function loadMenu(){
	$.ajax({
		url: "funciones/funcion0201.php",
		error:function(){
			$("#CargaMenu").html("<b>Error de carga, no se pudo conectar al servidor...</b>");
		},
		success:function(data){
			$("#CargaMenu").html(data);
		}
	});
}
loadMenu();