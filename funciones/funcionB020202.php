<?php
include("../config/config00.php");
include("../config/config02.php");
$Data01 = $_POST['id'];
$DataSQL01 = "select * from data03 where id='$Data01'";
$DataSQL01 = mysql_query($DataSQL01);
$DataROW01 = mysql_fetch_array($DataSQL01);
?>
<div id="DatosRol" title="Rol de Usuario <?php echo $DataROW01["NombreRol"];?>">

<?php
$DataSQL02 = "select * from data01 where Niveles='1' ORDER BY id ASC";
$DataSQL02 = mysql_query($DataSQL02);
echo "
<form id='EditarPermisos'>
<input type='text' class='text ui-widget-content ui-corner-all' placeholder='Nombre del Rol'
name='ModNombreRol' id='ModNombreRol' value='$DataROW01[NombreRol]' autocomplete='off'
onkeypress=\"return permitemecarac(event, 'esp','#ModNombreRol', 'Primer Nombre')\" onKeyUp='funcion04(this)'
 />
 <h4>Permisos</h4>
<input type='hidden' value='$DataROW01[id]' name='idcode' />
<table class='ModPermisosN1'>

";
$c=0;
while($DataROW02 = mysql_fetch_array($DataSQL02)){
	echo "<tr><td style='border:1px solid silver;color:white;background:#0279C0;width:90%'><b>$DataROW02[NombreModulo]</b></td>
	<td>";
		$DataSQL0201 = "select * from vista01 where id='$DataROW02[id]' and IdRol='$Data01'";
		$DataSQL0201 = mysql_query($DataSQL0201);
		$DataROW0201 = mysql_fetch_array($DataSQL0201);
			if($DataROW0201["id"]!=""){
				echo "<div class='switch'>
					<input id='cmn-toggle-$c' name='$DataROW02[id]' class='cmn-toggle cmn-toggle-round-flat cm-toggle-all' type='checkbox' checked='on'>
					<label for='cmn-toggle-$c'></label>
				  </div>";
			}
			if($DataROW0201["id"]==""){
				echo "<div class='switch'>
					<input id='cmn-toggle-$c' name='$DataROW02[id]' class='cmn-toggle cmn-toggle-round-flat cm-toggle-all' type='checkbox' >
					<label for='cmn-toggle-$c'></label>
				  </div>";
			}
	echo "</td>
	</tr><tr><td colspan='2'>";
		$DataSQL03 = "select * from data01 where id LIKE '$DataROW02[id]%' and Niveles='2' ORDER BY id ASC";
		$DataSQL03 = mysql_query($DataSQL03);
		echo "<table class='ModPermisosN2'>";
		$ci=0;
		while($DataROW03 = mysql_fetch_array($DataSQL03)){
			echo "<tr><td style='border:2px solid silver;width:90%'>$DataROW03[NombreModulo]</td>
			<td>";
			$DataSQL0301 = "select * from vista01 where id='$DataROW03[id]' and IdRol='$Data01'";
			$DataSQL0301 = mysql_query($DataSQL0301);
			$DataROW0301 = mysql_fetch_array($DataSQL0301);
			if($DataROW0301["id"]!=""){
				echo "<div class='switch'>
				<input id='cmn-toggle-$c$ci' name='$DataROW03[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cm-toggle-all-nivel2 cm-toggle-levelup' data='cmn-toggle-$c' type='checkbox' checked='on' >
				<label for='cmn-toggle-$c$ci'></label>
				</div>";
			}
			if($DataROW0301["id"]==""){
				echo "<div class='switch'>
				<input id='cmn-toggle-$c$ci' name='$DataROW03[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cm-toggle-all-nivel2 cm-toggle-levelup' data='cmn-toggle-$c' type='checkbox'>
				<label for='cmn-toggle-$c$ci'></label>
				</div>";
			}
			echo "</td>
			</tr><tr><td colspan='2'>";
				$DataSQL04 = "select * from data01 where id LIKE '$DataROW03[id]%' and Niveles='3' ORDER BY id ASC";
				$DataSQL04 = mysql_query($DataSQL04);
				echo "<table class='ModPermisosN3'>";
				$cid=0;
				while($DataROW04 = mysql_fetch_array($DataSQL04)){
					echo "<tr><td style='border:2px solid white;width:90%'>$DataROW04[NombreModulo]</td>
					<td>";
					$DataSQL0401 = "select * from vista01 where id='$DataROW04[id]' and IdRol='$Data01'";
					$DataSQL0401 = mysql_query($DataSQL0401);
					$DataROW0401 = mysql_fetch_array($DataSQL0401);
					if($DataROW0401["id"]!=""){
					echo "<div class='switch'>
					<input id='cmn-toggle-$c$ci$cid' name='$DataROW04[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cmn-toggle-$c$ci cm-toggle-nivelUP' data='cmn-toggle-$c$ci' data01='cmn-toggle-$c' type='checkbox' checked='on' >
					<label for='cmn-toggle-$c$ci$cid'></label>
					</div>";
					}
					if($DataROW0401["id"]==""){
					echo "<div class='switch'>
					<input id='cmn-toggle-$c$ci$cid' name='$DataROW04[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cmn-toggle-$c$ci cm-toggle-nivelUP' data='cmn-toggle-$c$ci' data01='cmn-toggle-$c' type='checkbox' >
					<label for='cmn-toggle-$c$ci$cid'></label>
					</div>";
					}
					echo "</td>
					</tr>";
					$cid++;
				}
				echo "</table>";
			echo "</td></tr>";
			$ci++;
		}
		echo "</table>";
	echo "</td></tr><tr><td colspan='2'><hr style='background-color:#0279C0'></td></tr>";
	$c++;
}
echo "</table></form>";
if($c==0){
	echo "<p class='sin-permisos'>Sin permisos otorgados</p>";
}
?>
</div>
<script>
$("#DatosRol").dialog({
	modal:true,
	close: function(){
		$(this).remove();
	},
	width:400,
	height:500,
	buttons:{
		"Guardar Cambios": function(){
			IdVal = $("#ModNombreRol").val();
			if(IdVal.length!=0){
			$.ajax({
				type: 'POST',
				url: 'funciones/funcionB02020201.php',
				data: $('#EditarPermisos').serialize(),
				beforeSend:function(){
					$("#UserShowMod").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
				},
				success:function(data){
					$("#UserShowMod").html(data);
				}
			});
			$(this).dialog("close");
			}
			else {
				$("#ModNombreRol").addClass("ui-state-error");
				alert("Ingrese el nombre del Rol de usuario");
			}
		},
		Cancelar: function(){
			$(this).dialog("close");
		}
	}
});
function permitemecarac(elEvento, permitidos, idelement, elemento) {
$("input").removeClass("ui-state-error");
var tps = $( "#tipsavs" );
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
$(".cm-toggle-all").click(function(){
	ValId = $(this).attr("id");
	if($(this).is(':checked')){
		$("."+ValId).prop('checked',true);
	}
	else {
		$("."+ValId).prop('checked',false);
	}
});
$(".cm-toggle-all-nivel2").click(function(){
	ValId = $(this).attr("id");
	if($(this).is(':checked')){
		$("."+ValId).prop('checked',true);
	}
	else {
		$("."+ValId).prop('checked',false);
	}
});
$(".cm-toggle-levelup").click(function(){
	ValId = $(this).attr("data");
	$("#"+ValId).prop('checked',true);
});
$(".cm-toggle-nivelUP").click(function(){
	ValId = $(this).attr("data");
	ValId2 = $(this).attr("data01");
	$("#"+ValId).prop('checked',true);
	$("#"+ValId2).prop('checked',true);
});
function funcion04(change) {
	var tmpStr;
	tmpStr = change.value.toUpperCase().charAt(0) + change.value.substring(1);
	change.value = tmpStr;
}
</script>


