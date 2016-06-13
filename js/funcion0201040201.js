$(document).ready(function(){
	$.ajax({
		url:"funciones/funcion020104020101.php",
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
$("#EnvioOrden").button();
count=0;
$("#EnvioOrden").click(function(){
	DataString = $("#FormOrden").serialize();
	if(count==0){
		alert("¡No hay ningún pedido!");
	}
	if(count!=0){
		$.ajax({
			type: "POST",
			url:"funciones/funcion020104020102.php",
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

function deletechange(data01,data02,data03,data04){
	$(data01).fadeOut(300).delay(600).queue(function(){
		$(data01).remove();
	});
	$.ajax({
		type:"post",
		url: "funciones/funcion0201040202.php",
		data:"data="+data02+"&&data01="+data03+"&&data02="+data04,
		beforeSend:function(){
			$("#cambios-deorden").html("<span style='color:grey'><i>Cargando...</i></span>");
		},
		error:function(){
			$("#cambios-deorden").html("<span style='color:red'><i>Cambios no guardados, error de conexion...</i></span>");
		},
		success:function(data){
			$("#cambios-deorden").html(data).delay(2000).fadeOut(300);
		}
	});
}

function deletechange01(data01,data02,data03,data04){
	$(data01).fadeOut(300).delay(600).queue(function(){
		$(data01).remove();
	});
	$.ajax({
		type:"post",
		url: "funciones/funcion020104020200.php",
		data:"data="+data02+"&&data01="+data03+"&&data02="+data04,
		beforeSend:function(){
			$("#cambios-deorden").html("<span style='color:grey'><i>Cargando...</i></span>");
		},
		error:function(){
			$("#cambios-deorden").html("<span style='color:red'><i>Cambios no guardados, error de conexion...</i></span>");
		},
		success:function(data){
			$("#cambios-deorden").html(data).delay(2000).fadeOut(300);
		}
	});
}

function deletechange02(data01,data02,data03,data04){
	$(data01).slideUp(300).delay(600).queue(function(){
		$(data01).remove();
	});
	$.ajax({
		type:"post",
		url: "funciones/funcion020104020201.php",
		data:"data="+data02+"&&data01="+data03+"&&data02="+data04,
		beforeSend:function(){
			$("#cambios-deorden").html("<span style='color:grey'><i>Cargando...</i></span>");
		},
		error:function(){
			$("#cambios-deorden").html("<span style='color:red'><i>Cambios no guardados, error de conexion...</i></span>");
		},
		success:function(data){
			$("#cambios-deorden").html(data).delay(2000).fadeOut(300);
		}
	});
}