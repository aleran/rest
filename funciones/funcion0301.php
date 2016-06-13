<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div id="AddPlt" title="Agregar nuevo plato o categoría">
<div class="AvisarNot">
</div>
<form id="AddPlato">
<b>Nombre</b><br>
<input type="text" onkeypress="return funCaracInp(event, 'car','#Data05', 'El nombre del plato','caracteres alfabéticos')" data="nombre" name="Data05" id='Data05' class="NewNext next iNext ui-corner-all" placeholder="Nombre del plato o categoría" autocomplete="off" /><br><br>
<b>Costo</b><br>
<input type="number" onkeypress="return funCaracInp(event, 'num','#Data06', 'El costo del plato','números')" data="costo" name='Data06' id='Data06' class="next iNext ui-corner-all" placeholder="Costo" autocomplete="off" step="any" min="0" /> <b>Bs.</b>
<div class='switch'>
<input id='cmn-toggleCosto'  name='Data07' class='cmn-toggle cmn-toggle-round-flat' checked="On" type='checkbox'>
<label for='cmn-toggleCosto'></label>
</div><br>
<?php
$DataSQL00 = "select * from data10 where Estado='1'";
$DataSQL00 = mysql_query($DataSQL00);
$DataSQL01 = "SELECT * FROM data17 WHERE Activo='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<b>Menú</b><br>
<select id='SelectMenu' name='DataMenu00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value=''>Selecciona el menu</option>
<option value='0'>En todo los menús</option>
";
while($DataROW01 = mysql_fetch_object($DataSQL01)){
	echo "<option value='".$DataROW01->id."'>".$DataROW01->NombreMenu."</option>";
}
echo "</select><br><br>
<b>Categoría principal</b><br>
<select id='SelectOp' onchange='funcionSel(this)' name='Data00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value='0'>Selecciona la categoría</option>
";
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<option value='$DataROW00[id]'>$DataROW00[Nombre]</option>";
}
echo "</select>";
?>
<br><br>

<div class='oc'>

<div id="Categoria">
<b>Es una categoría</b>
<div class='switch'>
	<input id='cmn-toggleClassCate'  name='Data04' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClassCate'></label>
</div>
</div>

<div id="SubCategoria">
<b>Parte de una categoría</b>
<div class='switch'>
	<input id='cmn-toggleClass'  name='Data01' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClass'></label>
</div>
</div>

</div>
<div id="OCarga">
</div>
</form>
</div>

<script>
$("#cmn-toggleCosto").click(function(){
	$("#Data06").val("");
	$("#Data06").removeClass("ui-state-error");
});
$("#AddPlt").dialog({
	modal:true,
	height: 600,
	buttons:{
		Añadir:function(){
			stop=0;
			elemento = $("#Data05");
			if (elemento.val().length==0) {
				elemento.addClass("ui-state-error");
				msj=elemento.attr("data");
				$(".AvisarNot").html("Ingrese "+msj).addClass("ui-state-error");
				stop=1;
			}
			elElemento = $("#cmn-toggleCosto");
			if(elElemento.is(':checked')){
				elemento = $("#Data06");
				if (elemento.val().length==0) {
					elemento.addClass("ui-state-error");
					msj=elemento.attr("data");
					$(".AvisarNot").html("Ingrese "+msj).addClass("ui-state-error");
					stop=1;
				}
			}
			SelectOpt = $("#SelectOp").val();
			if(SelectOpt==0){
				$("#SelectOp").addClass("ui-state-error");
				$(".AvisarNot").html("Seleccione al menú que pertenece...").addClass("ui-state-error");
				stop=1;
			}
			if(stop==1){
				$(".AvisarNot").slideDown(300);
			}
			else{
				$.ajax({
					type: "POST",
					url: "funciones/funcion0302.php",
					data: $('#AddPlato').serialize(),
					beforeSend:function(){
						$("#AddCarga").html("Cargando...");
					},
					error:function(){
						$("#AddCarga").html("Error de conexión...");
					},
					success:function(data){
						$("#AddCarga").html(data);
					}
				});
				$(this).dialog("close");
			}
		},
		Cancelar:function(){
			$(this).dialog("close");
		}
	},
	width:400,
	close:function(){
		$(this).remove();
	}
});
function funcionSel(checkbox){
	$("#SelectOp").removeClass("ui-state-error");
	$(".AvisarNot").fadeOut(0);
	if($(checkbox).val()==0)
		$(".oc").fadeOut(0);
	else {
		$(".oc").fadeOut(0);
		$(".oc").toggle(300);
		$("#Categoria").fadeIn(0);
		$("#SubCategoria").fadeIn(0);
		$("#OCarga").html("");
		$("#cmn-toggleClass").prop('checked',false);
		$("#cmn-toggleClassCate").prop('checked',false);
	}
}
$("#cmn-toggleClassCate").click(function(){
	$("#SubCategoria").toggle(300);
	$("#cmn-toggleClass").prop('checked',false);
	$("#OCarga").html("");
});
$("#cmn-toggleClass").click(function(){
	$("#Categoria").toggle(300);
	$("#cmn-toggleClassCate").prop('checked',false);
	if($(this).is(':checked')){
		DataString = "Data00="+$("#SelectOp").val();
		$.ajax({
			type:"POST",
			url:"funciones/funcion030101.php",
			data:DataString,
			beforeSend:function(){
				$("#OCarga").html("Cargando...");
			},
			error:function(){
				$("#OCarga").html("Error de conexión...");
			},
			success:function(data){
				$("#OCarga").html(data);
			}
		});
	}
	else $("#OCarga").html("");
});
function funCaracInp(elEvento, permitidos, idelement, elemento, tipo) {
$(idelement).removeClass("ui-state-error");
$(".AvisarNot").fadeOut(0);
var tps = $( ".AvisarNot" );
tps.removeClass("ui-state-error");
var numeros = ",0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "-+,_@";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 39, 40];
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
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=39 && codigoCaracter!=40){
		mensaje=elemento + " debe constar de "+tipo;
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		if(codigoCaracter==46){
			mensaje="Decimales sólo con \",\"";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass("ui-state-error").slideDown(300);
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>

<style>
.ui-text-select{
border:1px solid silver;
border-radius:4px;
}
.oc{display:none}
.NewNext,.next,.NewSelect{
	padding: 0.3em;
}
.NewNext{
width: 95%;
}
.AvisarNot{
	display: none;
	font-weight: bold;
	text-align: center;
	border-radius: 5px;
}
</style>
