$(".DataMesa").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion020101.php",
		data: DataString,
		beforeSend:function(){
			$("#CargaMenu").html("Cargando...");
		},
		error:function(){
			$("#CargaMenu").html("<b>Error de carga, no se pudo conectar al servidor...</b>");
		},
		success:function(data){
			$("#CargaMenu").fadeOut(0);
			$("#CargaMenu").html(data).toggle(300);
		}
	});
});

$(".EstadoMesa").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion020104.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheck").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheck").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheck").html(data);
		}
	});
});
$(".colors").tooltip();
$(".Nm").button().click(function(){
	loadMenu();
});