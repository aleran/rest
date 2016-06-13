$(document).ready(function(){
	$("body, html").scrollLeft(0);
});
function ocultar(){
$('#contenido div.opcion').fadeOut(0);
}

function mostrar(mostrar){
$('#contenido div.opcion').fadeOut(0);
$(mostrar).fadeIn(500);
}

function selected(doc){
$("ul li").removeClass("selected");
$("ul li").addClass("unselected");
$(doc).removeClass("unselected");
$(doc).addClass("selected");
}
function unselected(){
	$('ul li').addClass("unselected");
}
$(document).ready(function(){
	ttwxt="<div id='atr' OndblClick='drm();'></div>";
	ttwxt_co = $(ttwxt);
	element = $("body");
	element.before(ttwxt_co);
	$("#atr").css("position","absolute");
	$("#atr").css("cursor","default");
	$("#atr").css("bottom","0");
	$("#atr").css("z-index","1");
	$("#atr").css("right","0");
	$("#atr").css("right","0");
	$("#atr").css("width","50px");
	$("#atr").css("height","50px");
	//~ $("#atr").css("border","1px solid silver");
});
function drm(){
	ttwxt="<div id='dia'>Desarrollado por:<br> Ing. Edgar Carrizalez</div>";
	ttwxt_co = $(ttwxt);
	element = $("body");
	element.before(ttwxt_co);
	$("#dia").dialog({
		modal: true,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
			}
		}
	});
}
var pagina=0;
var paginaTope=0;
function users(paginas){
	var dataString = 'paginas='+paginas;
	$.ajax({
		type: 'POST',
		url: 'funciones/subfuncionB0101.php',
		data: dataString,
		beforeSend: function () {
			$("#UsuariosRegistrados").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
		},
		success: function(data) {
			$('#UsuariosRegistrados').fadeIn(0);
			$('#UsuariosRegistrados').html(data);
		}
	});
}
var paginaMod=0;
var paginaTopeMod=0;
function usersMod(paginasMod){
	var dataString = 'paginasMod='+paginasMod;
	$.ajax({
		type: 'POST',
		url: 'funciones/subfuncionB0102.php',
		data: dataString,
		beforeSend: function () {
			$("#UsuariosRegistradosMod").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
		},
		success: function(data) {
			$('#UsuariosRegistradosMod').fadeIn(0);
			$('#UsuariosRegistradosMod').html(data);
		}
	});
}
var paginaagg=0;
var paginaTopeagg=0;
function usersagg(paginas){
	var dataString = 'paginas='+paginas;
	$.ajax({
		type: 'POST',
		url: 'funciones/subfuncionB0103.php',
		data: dataString,
		beforeSend: function () {
			$("#UsuariosRegistradosAgg").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
		},
		success: function(data) {
			$('#UsuariosRegistradosAgg').fadeIn(0);
			$('#UsuariosRegistradosAgg').html(data);
		}
	});
}
function dialogos(dialogo){
	$(dialogo).dialog({
		modal: true,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
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
function sessionoff(){
	window.location.replace("./?sesion=off");
}

$(document).ready(function(){
	$.ajax({
		url: 'funciones/funcionf.php',
		beforeSend: function () {
			$("#footer").html("<tr><td colspan='5'><img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...</td></tr>");
		},
		success: function(data) {
			$('#footer').html(data);
		}
	});
});
