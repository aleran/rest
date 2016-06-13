<script>
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
</script>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$dataid = $_POST["data"];
$SQldata00 = "select * from data12 where id='$dataid'";
$SQldata00 = mysql_query($SQldata00);
$RowData00 = mysql_fetch_object($SQldata00);


$SQldata01 = "select * from data14 where IdPlato='$dataid'";
$SQldata01 = mysql_query($SQldata01);

$SQldata02 = "select * from data15 where IdPlatoSec='$dataid'";
$SQldata02 = mysql_query($SQldata02);

$SQldata03 = "select * from data12 where id LIKE '$dataid%' and id!='$dataid'";
$SQldata03 = mysql_query($SQldata03);

$iterplat = 0;
while ($RowData01=mysql_fetch_object($SQldata01)) {
	$iterplat++;
}
while ($RowData02=mysql_fetch_object($SQldata02)) {
	$iterplat++;
}
while ($RowData03=mysql_fetch_object($SQldata03)) {
	$iterplat++;
}
?>
<div id="AddPlt" title="Editar plato o categoría: <?php echo $RowData00->id; ?>">
<div class="AvisarNot">
</div>
<form id="ModPlatoData">
<input type="hidden" name="IdPlato" value="<?php echo $RowData00->id; ?>" />
<b>Estado</b>
<div class='switch'>
	<input id='cmn-toggleClassDataActive'  name='DataActive' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClassDataActive'></label>
</div><br>
<script>
DataActive = "<?php echo $RowData00->Estado; ?>";
if(DataActive==1){
	$("#cmn-toggleClassDataActive").prop('checked',true);
}
</script>
<b>Nombre</b><br>
<input type="text" value="<?php echo $RowData00->Nombre; ?>" onkeypress="return funCaracInp(event, 'car','#Data05', 'El nombre del plato','caracteres alfabéticos')" data="nombre" name="Data05" id='Data05' class="NewNext next iNext ui-corner-all" placeholder="Nombre del plato o categoría" autocomplete="off" /><br><br>

<?php
$DataSQL01 = "SELECT * FROM data17 WHERE Activo='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<b>Menú</b><br>
<select id='SelectMenu' name='DataMenu00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value='0'>En todo los menús</option>
";
while($DataROW01 = mysql_fetch_object($DataSQL01)){
	if($RowData00->id_menu==$DataROW01->id){
		echo "<option value='".$DataROW01->id."' selected>".$DataROW01->NombreMenu."</option>";
	}
	if($RowData00->id_menu!=$DataROW01->id){
		echo "<option value='".$DataROW01->id."'>".$DataROW01->NombreMenu."</option>";
	}
}
echo "</select><br><br>";
?>

<b>Costo</b><br>
<input type="number" value="<?php echo $RowData00->Costo; ?>" onkeypress="return funCaracInp(event, 'num','#Data06', 'El costo del plato','números')" data="costo" name='Data06' id='Data06' class="next iNext ui-corner-all" placeholder="Costo" autocomplete="off" step="any" min="0" /> <b>Bs.</b>
<?php if($iterplat!=0): ?>
<input type="hidden" name="booleano" id="booleano" value="1" />
<?php endif; ?>
<?php if($iterplat==0): ?>
<input type="hidden" name="booleano" id="booleano" value="0" />
<div class='switch'>
<input id='cmn-toggleCosto'  name='Data07' class='cmn-toggle cmn-toggle-round-flat' checked="On" type='checkbox'>
<label for='cmn-toggleCosto'></label>
<script>
valorc = $("#Data06").val();
if(valorc==0){
	$("#Data06").val("");
	$("#cmn-toggleCosto").prop('checked',false);
}
</script>
</div><br>
<?php
$DataSQL00 = "select * from data10 where Estado='1'";
$DataSQL00 = mysql_query($DataSQL00);
echo "
<b>Categoría principal</b><br>
<select id='SelectOp' onchange='funcionSel(this)' name='Data00' class='ui-selectmenu-text ui-text-select NewSelect'>
<option value='0'>Selecciona</option>
";
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<option value='$DataROW00[id]'>$DataROW00[Nombre]</option>";
}
echo "</select>";
$Cate = substr($RowData00->id, 0,4);
$SubCate = substr($RowData00->id, 0,6);
?>
<br><br>
<script>
valorselect01 = "<?php echo $Cate; ?>";
valorselect02 = "<?php echo $SubCate; ?>";
$("#SelectOp").val(valorselect01);
funcionSel(valorselect01);
</script>
<div class='oc'>

<div id="Categoria">
<b>Es una categoría</b>
<div class='switch'>
	<input id='cmn-toggleClassCate'  name='Data04' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClassCate'></label>
</div>
</div>
<script>
valorisc = "<?php echo $RowData00->Subniveles; ?>";
if(valorisc==1){
	$("#cmn-toggleClassCate").prop('checked',true);
	$("#SubCategoria").toggle(300);
}
</script>
<div id="SubCategoria">
<b>Parte de una categoría</b>
<div class='switch'>
	<input id='cmn-toggleClass'  name='Data01' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClass'></label>
</div>
<?php endif ?>
<div id="DataLoad"></div>
</div>
<script>
valoripc = "<?php echo $RowData00->Nivel; ?>";
valorlpc = "<?php echo $RowData00->Platillo; ?>";
if(valoripc==2){
	$("#cmn-toggleClass").prop('checked',true);
	$("#Categoria").toggle(300);
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
				$("#OCarga").html("");
<?php if($iterplat==0): ?>
				$("#OCarga").html(data);
				$("#NewData").val(valorselect02);
				if(valorlpc==0){
					$("#cmn-toggleClassSel").prop('checked',true);
				}
<?php endif ?>
			}
		});
}
</script>
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
	buttons:{
		<?php if($iterplat==0): ?>
		Guardar:function(){
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
					url: "funciones/funcion04010102.php",
					data: $('#ModPlatoData').serialize(),
					beforeSend:function(){
						$("#AvisarNot").html("Cargando...");
					},
					error:function(){
						$("#AvisarNot").html("Error de conexión...");
					},
					success:function(data){
						$("#ModPlatillo").html(data);
					}
				});
				$(this).dialog("close");
			}
		},
		<?php endif ?>
		<?php if($iterplat!=0): ?>
		Guardar:function(){
			$.ajax({
				type:"post",
				url:"funciones/funcion04010101.php",
				data:$("#ModPlatoData").serialize(),
				beforeSend:function(){
					$(".AvisarNot").html("Cargando...");
				},
				error:function(){
					$(".AvisarNot").html("Error no se pudo guardar los datos...");
				},
				success:function(data){
					$("#ModPlatillo").html(data);
				}
			});
		},
		<?php endif ?>
		<?php if($iterplat==0): ?>
		Elmininar:function(){
			$(".AvisarNot").append("<div id='AvisoDelete' title='Aviso'>¿Desea borrar el plato?</div>");
			$("#AvisoDelete").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				},
				buttons:{
					Aceptar:function(){
						//funcionD02
						$.ajax({
							type:"post",
							url:"funciones/funcionD02.php",
							data:$("#ModPlatoData").serialize(),
							beforeSend:function(){
								$(".AvisarNot").append("Cargando...");
							},
							error:function(){
								$(".AvisarNot").append("Erro de cargar...");
							},
							success:function(data){
								$("#ModPlatillo").html(data);
								$("#AvisoDelete").remove();
							}
						});
					},
					Cancelar:function(){
						$("#AvisoDelete").dialog("close");
					}
				}
			});
		},
		<?php endif ?>
		Cancelar:function(){
			$(this).dialog("close");
		}
	},
	width:400,
	height:350,
	close:function(){
		$(this).remove();
	}
});
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
