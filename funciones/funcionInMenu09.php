<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["id"];
$CateMenuSQL = "SELECT * FROM data10 WHERE id='$id' ";
$CateMenuSQL = mysql_query($CateMenuSQL);
$CateMenuROW = mysql_fetch_object($CateMenuSQL);
?>

<div id="EditarCategoría" title="Editar categoría">
	<input type="hidden" id="id_ca" name="id_ca" value="<?php echo $id; ?>" />
	<label><b>Estado</b></label><br>
	<select id="cate_activ" class='ui-selectmenu-text ui-text-select NewSelect'>
		<?php
			if($CateMenuROW->Estado==1){
				echo "<option value='1' selected>Activo</option>";
				echo "<option value='0'>Inactivo</option>";
			}
			if($CateMenuROW->Estado==0){
				echo "<option value='1'>Activo</option>";
				echo "<option value='0' selected>Inactivo</option>";
			}
		?>
	</select> <br><br>
	<label><b>Nombre de la categoría</b></label>
	<input id="NombreCategoriaE" value="<?php echo $CateMenuROW->Nombre; ?>" type="text" class="text ui-widget-content ui-corner-all" autocomplete="off" onkeypress="return EpermitidosLetras(event, 'esp','#NombreCategoria', 'nombre del menu')" placeholder="Ingresar el nombre de la categoría" />

<?php 
$DataSQL01 = "SELECT * FROM data17 WHERE Activo='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<b>Menú</b><br>
<select id='SelectCategoE' name='DataMenu00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value='0'>En todo los menús</option>
";
while($DataROW01 = mysql_fetch_object($DataSQL01)){
	if($CateMenuROW->id_menu==$DataROW01->id){
		echo "<option value='".$DataROW01->id."' selected>".$DataROW01->NombreMenu."</option>";
	}
	else{
		echo "<option value='".$DataROW01->id."'>".$DataROW01->NombreMenu."</option>";
	}
}
echo "</select>";
 ?>
	<div class="validateTips"></div>
	<div id="SaveDataEt"></div>
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
$("#EditarCategoría").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:350,
	buttons:{
		Guardar:function(){
			errores = "";
			if($("#NombreCategoriaE").val()==0){
				errores+="<b>Nombre de categoría vacío. </b>";
			}
			$(".validateTips").html(errores);
			if($("#NombreCategoriaE").val()!=0){
				$.ajax({
					type:"post",
					url:"funciones/funcionInMenu10.php",
					data:{
						id:$("#id_ca").val(),
						name:$("#NombreCategoriaE").val(),
						id_menu:$("#SelectCategoE").val(),
						activo:$("#cate_activ").val()
					},
					beforeSend:function(){
						$("#SaveDataEt").html("Guardando...");
					},
					error:function(){
						$("#SaveDataEt").html("Error...");
					},
					success:function(data){
						$("#SaveDataEt").html(data);
					}
				});
			}
		}
	}
});
function EpermitidosLetras(elEvento, permitidos, idelement, elemento) {
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