<div id="IngresarNuevaCategoría" title="Agregar nueva categoría">
	<label>Nombre de la categoría</label>
	<input id="NombreCategoria" type="text" class="text ui-widget-content ui-corner-all" autocomplete="off" onkeypress="return permitidosLetras(event, 'esp','#NombreCategoria', 'nombre del menu')" placeholder="Ingresar el nombre de la categoría" />
<?php 
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL01 = "SELECT * FROM data17 WHERE Activo='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<b>Menú</b><br>
<select id='SelectCatego' name='DataMenu00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value=''>Selecciona el menu</option>
<option value='0'>En todo los menús</option>
";
while($DataROW01 = mysql_fetch_object($DataSQL01)){
	echo "<option value='".$DataROW01->id."'>".$DataROW01->NombreMenu."</option>";
}
echo "</select>";
 ?>
	<div class="validateTips"></div>
	<div id="SaveData"></div>
</div>
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
</style>
<script>
$("#IngresarNuevaCategoría").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:350,
	buttons:{
		Agregar:function(){
			errores = "";
			if($("#NombreCategoria").val()==0){
				errores+="<b>Nombre de categoría vacío. </b><br>";
			}
			if($("#SelectCatego").val()==""){
				errores+="<b>Selecciona la Categoría.</b>";
			}
			$(".validateTips").html(errores);
			if($("#NombreCategoria").val()!=0 && $("#SelectCatego").val()!=""){
				$.ajax({
					type:"post",
					url:"funciones/funcionInMenu06.php",
					data:{
						name:$("#NombreCategoria").val(),
						id_menu:$("#SelectCatego").val()
					},
					beforeSend:function(){
						$("#SaveData").html("Guardando...");
					},
					error:function(){
						$("#SaveData").html("Error...");
					},
					success:function(data){
						$("#SaveData").html(data);
					}
				});
			}
		}
	}
});
function permitidosLetras(elEvento, permitidos, idelement, elemento) {
$("input").removeClass( "ui-state-error" );
var tps = $( ".validateTips" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ";
var especilaes = "-+,_@";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40, 46];
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
		mensaje="El " + elemento + " debe constar de caracteres alfabéticos";
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tps.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>