$(".BackMenu").click(function(){
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
			$(".MostrarSub").fadeOut(0);
			$(".MostrarSub").toggle(300);
		}
	});
});
$(".OpcionesDeMenu li").click(function(){
	if($(this).attr("data03")==1){
		DataString="Data01="+$(this).attr("data01")+"&&Data02="+$(this).attr("data02");
		$.ajax({
			type:"POST",
			url:"funciones/funcion02010102.php",
			data:DataString,
			beforeSend:function(){
				$("#SubNivel").html("Cargando..");
			},
			error:function(){
				$("#SubNivel").html("Error de conexion...");
			},
			success:function(data){
				$("#SubNivel").fadeOut(0);
				$("#SubNivel").html(data);
				$("#SubNivel").toggle(300);
			}
		});
	}
	if($(this).attr("data03")==0){
		NewData = $("#"+Datas01Sub);
		if(NewData.length > 0){
		}
		else {
			$("#DataId").before("<div id='"+Datas01Sub+"' class='PrincipalOrden'><span onclick='CloseOrden( \""+Datas01Sub+"\" );' class='this-close type-orden'>X</span><span onclick='OcConten(\"#"+Datas01Sub+"\")' class='head-pedido'> "+ Datas01SubNombre +" </span><hr><div class='UpDown'><span class='"+ Datas01Sub +"'></span></div></div>");
		}
		if($("#Ped"+$(this).attr("data01")).length > 0) {
			valorsuma = $(".put"+$(this).attr("data01")).val();
			valorsuma++;
			$("#put"+$(this).attr("data01")).html('['+valorsuma+']');
			$(".put"+$(this).attr("data01")).val(valorsuma);
		}
		else{
			Vsuma++;
			$("." + Datas01Sub).before( "<div class='hospan' id='Ped"+$(this).attr("data01")+"'><input type='hidden' name='Pedido"+Vsuma+"' value='"+$(this).attr("data01")+"'><input type='hidden' class='put"+$(this).attr("data01")+"' name='Cant"+Vsuma+"' id='Cant"+Vsuma+"' value='1' /><span id='put"+$(this).attr("data01")+"'>[1]</span> " + $(this).attr("data02")+" &nbsp;<span onclick='CloseOrden( \"Ped"+$(this).attr("data01")+"\" );' class='this-close'>X</span></div>");
			$("#NumeroPedidos").val(Vsuma);
		}
	}
	count++;
});
function CloseOrden(data){
	$("#"+data).slideUp(500).delay(600).queue(function(){
		$("#"+data).remove();
	});
}
function OcConten(data){
	if($(data + " div.UpDown").is(":visible")){
		$(data + " div.UpDown").slideUp(300);
	}
	else{
		$(data + " div.UpDown").slideDown(300);
	}
}