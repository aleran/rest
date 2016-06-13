$(document).ready(function(){
	$.ajax({
		url:"funciones/funcion020102.php",
		beforeSend:function(){
			$("#OrMenuPrincipal").html("Cargando...");
		},
		error:function(){
			$("#OrMenuPrincipal").html("Error deconexion...");
		},
		success:function(data){
			$("#OrMenuPrincipal").html(data);
		}
	});
});
$(".MenuBack").click(function(){
	$.ajax({
		url: "funciones/funcion0201.php",
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
$("#EnvioOrden").button();
count=0;
$("#EnvioOrden").click(function(){
	DataString = $("#FormOrden").serialize();
	if(count==0){
		alert("¡No hay ningún pedido!");
	}
	if(count!=0){
		$.ajax({
			url: "funciones/funcion0201.php",
			beforeSend:function(){
				$("#CargaMenu").html("Cargando...");
			},
			error:function(){
				$("#CargaMenu").html("<b>Error de carga, no se pudo conectar al servidor...</b>");
			},
			success:function(data){
				$("#CargaMenu").html(data);
			}
		});
		$.ajax({
			type: "POST",
			url:"funciones/funcion020103.php",
			data: DataString,
			beforeSend:function(){
				$("#OrdenarCheck").html("Cargando...");
			},
			error:function(){
				$("#OrdenarCheck").html("Error de conexión...");
			},
			success:function(data){
				$("#OrdenarCheck").html(data);
			}
		});
	}
});
var pdhmb=0;
var perso="";
$("#PlatoPersonalizado").button().click(function(){
	pdhmb++;
	Datas0102Sub = "perso0"+pdhmb;
	Datas0102SubNombre = "Personalizado";
	$(".OrdenPersonalizada").removeAttr("checked");
	$("#DataId").before("<div id='"+Datas0102Sub+"' class='PrincipalOrden'><input type='hidden' name='PersoOrde"+pdhmb+"' id='PersoOrde"+pdhmb+"' value='psoredn"+pdhmb+"' /><span onclick='CloseOrden( \""+Datas0102Sub+"\" );' class='this-close type-orden'>X</span><span onclick='OcConten(\"#"+Datas0102Sub+"\")' class='head-pedido'> "+ Datas0102SubNombre +" </span><input type='radio' name='OrdenPersonalizada' data='psoredn"+pdhmb+"' class='OrdenPersonalizada' value='."+Datas0102Sub+"' checked='on' /><hr><div class='UpDown'><span class='"+ Datas0102Sub +"'></span></div></div>");
	perso = "."+Datas0102Sub;
	namesub = "psoredn"+pdhmb;
	$("#Personalizados").val(pdhmb);
	$(".OrdenPersonalizada").click(function(){
		perso = $(this).val();
		namesub = $(this).attr("data");
	});
});