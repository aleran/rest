<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data00 = $_POST["data"];
$DataSQL00 = "select * from vista03 where id='$Data00' and Estado='1'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);
$OpcionesSelect="";
if($DataROW00["Abreviatura"]=="U"){
	$OpcionesSelect="
<option value='Unidad (U)'>Unidad (U)</option>";
}
if($DataROW00["Abreviatura"]=="kg"){
$OpcionesSelect="
<option value='Gramo (g)'>Gramo (g)</option>
<option value='Kilogramo (kg)'>Kilogramo (kg)</option>
";
}
if($DataROW00["Abreviatura"]=="l"){
$OpcionesSelect="
<option value='Mililitro (ml)'>Mililitro (ml)</option>
<option value='Litro (l)'>Litro (l)</option>
";
}

$sum =$DataROW00["Existencia"];
if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
	$sum =$DataROW00["Existencia"]/1000;
}

?>
<div id="ProductoVer" title="Producto: <?php echo $DataROW00["NombreProducto"]; ?>">
	<?php
		echo "
			Cantidad disponible: $sum $DataROW00[Abreviatura]<br><br>
			<form id='ActInventario'>
			<b>Motivo</b>
			<textarea type='text' onkeyup='return capitali(this)' onkeypress=\"return onlyNumber(event, 'esp','#Data00', 'El motivo')\" name='Data00' id='Data00' data='motivo' placeholder='Motivo por el cual se resta del inventario' class='next iNext ui-corner-all' ></textarea><br><br>
			<input type='number' onkeypress=\"return onlyNumber(event, 'num','#Data01', 'La cantidad')\" name='Data01' id='Data01' data='la cantidad' placeholder='Cantidad' autocomplete='off' min='0' class='next iNext ui-corner-all' step='any' /><br><br>
			<b>Medida</b><br>
			<select id='ActSelect' class='ui-selectmenu-text' data='la medida' name='Data02' >
				<option value='0'>Seleccione</option>
				$OpcionesSelect
			</select>
			<input type='hidden' name='Data03' value='$DataROW00[id]' />
			</form><br>
			<center><span class='Avisar'></span></center>
		";
	?>
</div>
<style>
.Avisar{
border-radius:5px;
padding:5px;
}
.next{
padding:0.3em;
}
</style>
<script>
$(".next").focus(function(){
	$(this).removeClass("ui-state-error");
	$(".Avisar").removeClass("ui-state-error");
	$(".Avisar").html("");
});
$("#ProductoVer").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	height:400,
	buttons:{
		Actualizar:function(){
			stop=0;
			$('.next').each(function() {
				elemento = $(this);
				if (elemento.val().length==0) {
					elemento.addClass("ui-state-error");
					msj=elemento.attr("data");
					$(".Avisar").html("Ingrese "+msj).addClass("ui-state-error");
					stop=1;
				}
			});
			if($("#ActSelect").val()=="0"){
				msj=$("#ActSelect").attr("data");
				$(".Avisar").html("Ingrese "+msj).addClass("ui-state-error");
				stop=1;
			}
			if(stop==0){
				$.ajax({
					type: "POST",
					url: "funciones/funcionIn0201B.php",
					data: $("#ActInventario").serialize(),
					beforeSend:function(){
						$("#AvisoAct").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
					},
					success:function(data){
						$("#ProductoVer").dialog("close");
						$("#AvisoAct").html(data);
					}
				});
			}
		}
	}
});
$("#ActSelect").selectmenu();
function onlyNumber(elEvento, permitidos, idelement, elemento) {
$(idelement).removeClass("ui-state-error");
var tps = $(".Avisar");
var numeros = "0123456789,";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = ",";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40];
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
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=40){
		if(permitidos=="num"){
			mensaje="Sólo números";
		}
		else {
			mensaje="El motivo debe ser alfanumérico";
			}
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		if(codigoCaracter==46 && permitidos=="num"){
			mensaje="Decilames sólo con coma \",\"";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass("ui-state-error");
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
function capitali(change) {
	var tmpStr;
	tmpStr = change.value.toUpperCase().charAt(0) + change.value.substring(1);
	change.value = tmpStr;
}
</script>
