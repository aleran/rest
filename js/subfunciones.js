// SubFuncione generales
function numero(numero){
residuo = numero%5;
while(residuo!=0){
	numero--;
	residuo = numero%5;
}
return numero;
}
function calcularpagina(paginacal){
	paginacal=paginacal/5;
	residuo=paginacal%5;
	if(residuo!=0){
	paginacal=paginacal+1;
	}
	if(residuo==0){
		paginacal=paginacal-1;
	}
	paginacal = parseInt(paginacal);
	return paginacal;
}
function cambiarPagina(pagina){
	$("#pagina_actual").html(pagina);
}
function cambiarPaginaagg(pagina){
	$("#pagina_actualAgg").html(pagina);
}
function cambiarPaginaMod(paginaMod){
	$("#pagina_actualMod").html(paginaMod);
}
// Solo ver usuarios
pagina=0;
users(pagina);
paginas=1;
cambiarPagina(paginas);
$(document).ready(function(){
	$("#ForwardUsersOn").click(function(){
		var pararTope=numero(paginaTope);
		var parartop=calcularpagina(paginaTope);
		var paratotp=paginaTope=paginaTope/5;
		pagina=pagina+5;
		paginas++;
		cambiarPagina(paginas);
		users(pagina);
		if(pagina>0){
			$("#BackUsersOn").fadeIn(0);
			$("#BackUsersOff").fadeOut(0);
			$("#StepBackUsersOn").fadeIn(0);
			$("#StepBackUsersOff").fadeOut(0);
		}
		if(paginas==parartop && paratotp<parartop){
			$("#ForwardUsersOn").fadeOut(0);
			$("#ForwardUsersOff").fadeIn(0);
			$("#StepForwardUsersOn").fadeOut(0);
			$("#StepForwardUsersOff").fadeIn(0);
		}
	});
});
$(document).ready(function(){
	$("#StepForwardUsersOn").click(function(){
		pagina=paginaTope-(paginaTope-numero(paginaTope));
		//~ alert(pagina);
		paginas=calcularpagina(paginaTope);
		//~ alert(paginas);
		cambiarPagina(paginas);
		users(pagina);
		$("#BackUsersOn").fadeIn(0);
		$("#BackUsersOff").fadeOut(0);
		$("#StepBackUsersOn").fadeIn(0);
		$("#StepBackUsersOff").fadeOut(0);
		$("#ForwardUsersOn").fadeOut(0);
		$("#ForwardUsersOff").fadeIn(0);
		$("#StepForwardUsersOn").fadeOut(0);
		$("#StepForwardUsersOff").fadeIn(0);
	});
});
$(document).ready(function(){
	$("#BackUsersOn").click(function(){
		pagina=pagina-5;
		users(pagina);
		paginas--;
		cambiarPagina(paginas);
		if(pagina<=0){
			$("#BackUsersOn").fadeOut(0);
			$("#BackUsersOff").fadeIn(0);
			$("#StepBackUsersOn").fadeOut(0);
			$("#StepBackUsersOff").fadeIn(0);
		}
		if(pagina<paginaTope){
			$("#ForwardUsersOn").fadeIn(0);
			$("#ForwardUsersOff").fadeOut(0);
			$("#StepForwardUsersOn").fadeIn(0);
			$("#StepForwardUsersOff").fadeOut(0);
		}
	});
});
$(document).ready(function(){
	$("#StepBackUsersOn").click(function(){
		pagina=0;
		users(pagina);
		paginas=1;
		cambiarPagina(paginas);
		if(pagina<=0){
			$("#BackUsersOn").fadeOut(0);
			$("#BackUsersOff").fadeIn(0);
			$("#StepBackUsersOn").fadeOut(0);
			$("#StepBackUsersOff").fadeIn(0);
		}
		if(pagina<paginaTope){
			$("#ForwardUsersOn").fadeIn(0);
			$("#ForwardUsersOff").fadeOut(0);
			$("#StepForwardUsersOn").fadeIn(0);
			$("#StepForwardUsersOff").fadeOut(0);
		}
	});
});
// Modificar Usuarios
paginaMod=0;
usersMod(paginaMod);
paginasMod=1;
cambiarPaginaMod(paginasMod);
$(document).ready(function(){
	$("#ForwardUsersOnMod").click(function(){
		var pararTopeMod=numero(paginaTopeMod);
		var parartopMod=calcularpagina(paginaTopeMod);
		var paratotpMod=paginaTopeMod=paginaTopeMod/5;
		paginaMod=paginaMod+5;
		paginasMod++;
		cambiarPaginaMod(paginasMod);
		usersMod(paginaMod);
		if(paginaMod>0){
			$("#BackUsersOnMod").fadeIn(0);
			$("#BackUsersOffMod").fadeOut(0);
			$("#StepBackUsersOnMod").fadeIn(0);
			$("#StepBackUsersOffMod").fadeOut(0);
		}
		if(paginasMod==parartopMod && paratotpMod<parartopMod){
			$("#ForwardUsersOnMod").fadeOut(0);
			$("#ForwardUsersOffMod").fadeIn(0);
			$("#StepForwardUsersOnMod").fadeOut(0);
			$("#StepForwardUsersOffMod").fadeIn(0);
		}
	});
});
$(document).ready(function(){
	$("#StepForwardUsersOnMod").click(function(){
		paginaMod=paginaTopeMod-(paginaTopeMod-numero(paginaTopeMod));
		paginasMod=calcularpagina(paginaTopeMod);
		cambiarPaginaMod(paginasMod);
		usersMod(paginaMod);
		$("#BackUsersOnMod").fadeIn(0);
		$("#BackUsersOffMod").fadeOut(0);
		$("#StepBackUsersOnMod").fadeIn(0);
		$("#StepBackUsersOffMod").fadeOut(0);
		$("#ForwardUsersOnMod").fadeOut(0);
		$("#ForwardUsersOffMod").fadeIn(0);
		$("#StepForwardUsersOnMod").fadeOut(0);
		$("#StepForwardUsersOffMod").fadeIn(0);
	});
});
$(document).ready(function(){
	$("#BackUsersOnMod").click(function(){
		paginaMod=paginaMod-5;
		usersMod(paginaMod);
		paginasMod--;
		cambiarPaginaMod(paginasMod);
		if(paginaMod<=0){
			$("#BackUsersOnMod").fadeOut(0);
			$("#BackUsersOffMod").fadeIn(0);
			$("#StepBackUsersOnMod").fadeOut(0);
			$("#StepBackUsersOffMod").fadeIn(0);
		}
		if(pagina<paginaTope){
			$("#ForwardUsersOnMod").fadeIn(0);
			$("#ForwardUsersOffMod").fadeOut(0);
			$("#StepForwardUsersOnMod").fadeIn(0);
			$("#StepForwardUsersOffMod").fadeOut(0);
		}
	});
});
$(document).ready(function(){
	$("#StepBackUsersOnMod").click(function(){
		paginaMod=0;
		usersMod(paginaMod);
		paginasMod=1;
		cambiarPaginaMod(paginasMod);
		if(paginaMod<=0){
			$("#BackUsersOnMod").fadeOut(0);
			$("#BackUsersOffMod").fadeIn(0);
			$("#StepBackUsersOnMod").fadeOut(0);
			$("#StepBackUsersOffMod").fadeIn(0);
		}
		if(paginaMod<paginaTopeMod){
			$("#ForwardUsersOnMod").fadeIn(0);
			$("#ForwardUsersOffMod").fadeOut(0);
			$("#StepForwardUsersOnMod").fadeIn(0);
			$("#StepForwardUsersOffMod").fadeOut(0);
		}
	});
});
// Agregar usuarios
paginaagg=0;
usersagg(paginaagg);
paginasagg=1;
cambiarPaginaagg(paginasagg);
$(document).ready(function(){
	$("#ForwardUsersOnAgg").click(function(){
		var pararTope=numero(paginaTopeagg);
		var parartop=calcularpagina(paginaTopeagg);
		var paratotp=paginaTopeagg=paginaTopeagg/5;
		paginaagg=paginaagg+5;
		paginasagg++;
		cambiarPaginaagg(paginasagg);
		usersagg(paginaagg);
		if(paginaagg>0){
			$("#BackUsersOnAgg").fadeIn(0);
			$("#BackUsersOffAgg").fadeOut(0);
			$("#StepBackUsersOnAgg").fadeIn(0);
			$("#StepBackUsersOffAgg").fadeOut(0);
		}
		if(paginasagg==parartop && paratotp<parartop){
			$("#ForwardUsersOnAgg").fadeOut(0);
			$("#ForwardUsersOffAgg").fadeIn(0);
			$("#StepForwardUsersOnAgg").fadeOut(0);
			$("#StepForwardUsersOffAgg").fadeIn(0);
		}
	});
});
$(document).ready(function(){
	$("#StepForwardUsersOnAgg").click(function(){
		paginaagg=paginaTopeagg-(paginaTopeagg-numero(paginaTopeagg));
		//~ alert(pagina);
		paginasagg=calcularpagina(paginaTopeagg);
		//~ alert(paginas);
		cambiarPaginaagg(paginasagg);
		usersagg(paginaagg);
		$("#BackUsersOnAgg").fadeIn(0);
		$("#BackUsersOffAgg").fadeOut(0);
		$("#StepBackUsersOnAgg").fadeIn(0);
		$("#StepBackUsersOffAgg").fadeOut(0);
		$("#ForwardUsersOnAgg").fadeOut(0);
		$("#ForwardUsersOffAgg").fadeIn(0);
		$("#StepForwardUsersOnAgg").fadeOut(0);
		$("#StepForwardUsersOffAgg").fadeIn(0);
	});
});
$(document).ready(function(){
	$("#BackUsersOnAgg").click(function(){
		paginaagg=paginaagg-5;
		usersagg(paginaagg);
		paginasagg--;
		cambiarPaginaagg(paginasagg);
		if(paginaagg<=0){
			$("#BackUsersOnAgg").fadeOut(0);
			$("#BackUsersOffAgg").fadeIn(0);
			$("#StepBackUsersOnAgg").fadeOut(0);
			$("#StepBackUsersOffAgg").fadeIn(0);
		}
		if(paginaagg<paginaTopeagg){
			$("#ForwardUsersOnAgg").fadeIn(0);
			$("#ForwardUsersOffAgg").fadeOut(0);
			$("#StepForwardUsersOnAgg").fadeIn(0);
			$("#StepForwardUsersOffAgg").fadeOut(0);
		}
	});
});
$(document).ready(function(){
	$("#StepBackUsersOnAgg").click(function(){
		paginaagg=0;
		usersagg(paginaagg);
		paginasagg=1;
		cambiarPaginaagg(paginasagg);
		if(paginaagg<=0){
			$("#BackUsersOnAgg").fadeOut(0);
			$("#BackUsersOffAgg").fadeIn(0);
			$("#StepBackUsersOnAgg").fadeOut(0);
			$("#StepBackUsersOffAgg").fadeIn(0);
		}
		if(paginaagg<paginaTopeagg){
			$("#ForwardUsersOnAgg").fadeIn(0);
			$("#ForwardUsersOffAgg").fadeOut(0);
			$("#StepForwardUsersOnAgg").fadeIn(0);
			$("#StepForwardUsersOffAgg").fadeOut(0);
		}
	});
});
function erroradd(data){
	var tips = $("#validateTipsAdd");
	switch(data){
		case 0:
			$("#errorcod").html("<center><span style='color:red'>¡Error seleccione el tipo de documento,<br>\"Venezolano, Extranjero, Pasaporte u Otros\"!</span></center>");
			$("#AggCedula").addClass("ui-state-error");
			tips.text("¡Error seleccione el tipo de documento,\"Venezolano, Extranjero, Pasaporte u Otros\"!");
			break;
		case 1:
			$("#errorcod").html("<span style='color:red'>¡Error cédula ya registrada!</span>");
			$("#AggCedula").addClass("ui-state-error");
			tips.text("¡Error cédula ya registrada!");
			break;
		case 2:
			$("#errorcod").html("<span style='color:red'>¡Error el Usuario no está disponible!</span>");
			tips.text("¡Error el Usuario no está disponible!");
			break;
		case 3:
			$("#errorcod").html("<span style='color:red'>¡Error cédula en blanco!</span>");
			$("#AggCedula").addClass("ui-state-error");
			tips.text("¡Error cédula en blanco!");
			break;
		case 4:
			$("#errorcod").html("<span style='color:red'>¡Error Primer Nombre en blanco!</span>");
			$("#AggPrimerNombre").addClass("ui-state-error");
			tips.text("¡Error Primer Nombre en blanco!");
			break;
		case 5:
			$("#errorcod").html("<span style='color:red'>¡Error Primer Apellido en blanco!</span>");
			$("#AggPrimerApellido").addClass("ui-state-error");
			tips.text("¡Error Primer Apellido en blanco!");
			break;
		case 6:
			$("#errorcod").html("<span style='color:red'>¡Error Usuario en blanco!</span>");
			$("#AggUsuario").addClass("ui-state-error");
			tips.text("¡Error Usuario en blanco!");
			break;
		case 7:
			$("#errorcod").html("<span style='color:red'>¡Error Contraseña en blanco!</span>");
			$("#AggContraseña").addClass("ui-state-error");
			tips.text("¡Error Contraseña en blanco!");
			break;
		case 8:
			$("#errorcod").html("<span style='color:red'>¡Error Contraseña en blanco!</span>");
			$("#AggContraseñacomp").addClass("ui-state-error");
			tips.text("¡Error Contraseña en blanco!");
			break;
		case 9:
			$("#errorcod").html("<span style='color:red'>¡Error seleccione el Rol de Usuario!</span>");
			tips.text("¡Error seleccione el Rol de Usuario!");
			break;
		case 10:
			$("#errorcod").html("<span style='color:red'>¡Las Contraseñas no coinciden!</span>");
			$("#AggContraseña").addClass("ui-state-error");
			$("#AggContraseñacomp").addClass("ui-state-error");
			tips.text("¡Error seleccione el Rol de Usuario!");
			break;
	}
	$("#erroraddsis").dialog({modal:true});
}
var block=1;
var blocked={cedula:0,usuario:0};
$(document).ready(function(){
	function moduloagg(){
		$.ajax({
			url: 'funciones/subfuncionB010301.php',
			beforeSend: function () {
				$("#NuevoUsuarioDiv").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
			},
			success: function(data) {
				$('#NuevoUsuarioDiv').html(data);
			}
		});
	}
	
	function agregarUsuario(){
		block=0;
		var validar = true;
		/*if(block==1 && blocked['cedula']=="0" && blocked['usuario']=="0"){
			alert("¡Error Faltan datos!");
		}*/
		if($("#TypeDocument").val()==0){
			erroradd(0);
			block++;
		}
		if(blocked['cedula']=="1"){
			erroradd(1);
			block++;
		}
		if(blocked['usuario']=="1"){
			erroradd(2);
			block++;
		}
		if($("#AggCedula").val().length==0){
			erroradd(3);
			block++;
		}
		if($("#AggPrimerNombre").val().length==0){
			erroradd(4);
			block++;
		}
		if($("#AggPrimerApellido").val().length==0){
			erroradd(5);
			block++;
		}
		if($("#AggUsuario").val().length==0){
			erroradd(6);
			block++;
		}
		if($("#AggContraseña").val().length==0){
			erroradd(7);
			block++;
		}
		if($("#AggContraseñacomp").val().length==0){
			erroradd(8);
			block++;
		}
		if($("#AggSelectRol").val()=="0"){
			erroradd(9);
			block++;
		}
		if($("#AggContraseñacomp").val()!=$("#AggContraseña").val()){
			erroradd(10);
			block++;
		}
		/*if(blocked['cedula']=="0" && blocked['usuario']=="0"){
			//~ block=0;
			}*/
		if(block==0){
		if (validar){
			$('.AvisoAlert').remove();
			$.ajax({
				type: 'POST',
				url: 'funciones/subfuncionB010302.php',
				data: $('#IngresoDeNuevoUsuario').serialize(),
				beforeSend: function(){
					$('#ResulNuevoUsuario').fadeIn(0);
					$('#ResulNuevoUsuario').html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
				},
				success: function(data){
					$('#ResulNuevoUsuario').html(data);
					paginaagg=0;
					usersagg(paginaagg);
					paginasagg=1;
					cambiarPaginaagg(paginasagg);
					if(paginaagg<=0){
						$("#BackUsersOnAgg").fadeOut(0);
						$("#BackUsersOffAgg").fadeIn(0);
						$("#StepBackUsersOnAgg").fadeOut(0);
						$("#StepBackUsersOffAgg").fadeIn(0);
					}
					if(paginaagg<paginaTopeagg){
						$("#ForwardUsersOnAgg").fadeIn(0);
						$("#ForwardUsersOffAgg").fadeOut(0);
						$("#StepForwardUsersOnAgg").fadeIn(0);
						$("#StepForwardUsersOffAgg").fadeOut(0);
					}
				}
			});
			$("#NuevoUsuario").dialog( "close" );
		}
		return validar;
		}
	}
	
	$("#NuevoUsuario").dialog({
		autoOpen: false,
		height: 660,
		width: 460,
		modal: true,
		buttons: {
			"Guardar cambios": agregarUsuario,
			Cancel: function() {
			$("#NuevoUsuario").dialog( "close" );
			}
		},
		show: {
			effect: "scale",
			duration: 300
		}
	});
	$("#crear-usuario").button().on( "click", function() {
		moduloagg();
		$("#NuevoUsuario").dialog("open");
	});
});
$(".ButtonClass").button();
