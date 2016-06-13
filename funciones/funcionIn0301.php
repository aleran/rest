<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<link rel="stylesheet" href="./css/funcionIn3.css">
<script>
$(function() {
	$( "#fech" ).datepicker({
		showOtherMonths: true, //Mostrar cuadrilcula
		showOn: "button",
		buttonImage: "./img/fech.png",
		buttonImageOnly: true,
		buttonText: "Seleccionar Fecha"
	});
});
</script>
<div id="AreaC" title="Ingresar Nuevo Producto">
<style>
.importante{color:red}
.center-table{margin:0 auto}
#aviso{text-align:center}
#Avisar{padding:5px;border-radius:5px}
.ui-state-error{border-radius:5px}
.ui-selectmenu-text{font-size:85%}
</style>
<p id="aviso"><span id="Avisar">Todos los campos <span class='importante'>(*)</span> son requeridos</span></p>
<form id="IngresarInventario">
<table class="center-table">
	<tr><td>Producto </td><td><input type="text" onkeypress="return funCarac(event, 'car','#Data00', 'El nombre de producto')" onKeyUp='funcionCap(this)' data="el nombre de producto" class="next iNext ui-corner-all" name="Data00" id="Data00" autocomplete="off" placeholder="Nombre del producto" /> <span class='importante'>(*)</span></td></tr>
	<tr><td>Descripción </td><td><textarea onkeypress="return funCarac(event, 'car','#Data01', 'La descripción')" onKeyUp='funcionCap(this)' data="la descripción" class="next iNext ui-corner-all" name="Data01" id="Data01" placeholder="Breve descripción de producto"></textarea> <span class='importante'>(*)</span></td></tr>
	<tr><td>Medida</td>
		<td>
			<select name="Data02" id="Data02" style="width:200px;font-size:60%">
				<option value="0">Seleccione</option>
				<?php
				$DataSQL00 = "select * from data07";
				$DataSQL00 = mysql_query($DataSQL00);
				while($DataROW00 = mysql_fetch_array($DataSQL00)){
					echo "<option value='$DataROW00[id]'>$DataROW00[Medida] ($DataROW00[Abreviatura])</option>";
				}
				?>
			</select> <span class='importante'>(*)</span>
		</td>
	</tr>
</table>
</form><br><br><br><br>
</div>
<script>
$("#AreaC").dialog({
	modal:true,
	width:500,
	close:function(){
		$(this).remove();
	},
	buttons:{
		Ingresar:function(){
			stop=0;
			sel = $("#Data02");
			$('.next').each(function() {
				elemento = $(this);
				if (elemento.val().length==0) {
					elemento.addClass("ui-state-error");
					msj=elemento.attr("data");
					$("#Avisar").html("Ingrese "+msj).addClass("ui-state-error");
					stop=1;
				}
			});
			if(sel.val()==0){
				$("#Avisar").html("Seleccione la medida").addClass("ui-state-error");
				stop=1;
			}
			if(stop==0){
				$.ajax({
					type:"POST",
					url: "funciones/funcionIn030101.php",
					data: $("#IngresarInventario").serialize(),
					beforeSend:function(){
						$("#AreaC").dialog("close");
						$("#ResultIngreso").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
					},
					success:function(data){
						$("#ResultIngreso").html(data);
					}
				});
			}
		}
	}
});
$("#Data02").selectmenu();
function funCarac(elEvento, permitidos, idelement, elemento) {
$(idelement).removeClass("ui-state-error");
var tps = $( "#Avisar" );
tps.removeClass("ui-state-error");
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "-+,_@";
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
		mensaje=elemento + " debe constar de caracteres alfabéticos";
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-error" );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
function funcionCap(change) {
	var tmpStr;
	tmpStr = change.value.toUpperCase().charAt(0) + change.value.substring(1);
	change.value = tmpStr;
}
</script>
