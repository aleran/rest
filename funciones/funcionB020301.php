<?php
include("../config/config00.php");
include("../config/config02.php");

?>
<div id="DatosRol" title="Agregar Rol de Usuario">
<?php
$DataSQL02 = "select * from data01 where Niveles='1' ORDER BY id ASC";
$DataSQL02 = mysql_query($DataSQL02);
echo "
<form id='IngresarPermisos'>
<input type='text' class='text ui-widget-content ui-corner-all' placeholder='Nombre del Rol'
name='NewNombreRol' id='NewNombreRol' autocomplete='off'
onkeypress=\"return permitemecarac(event, 'esp','#NewNombreRol', 'Rol')\" onKeyUp='funcion04(this)'
 />
 <h4>Permisos</h4>
<table class='ModPermisosN1'>

";
$c=0;
while($DataROW02 = mysql_fetch_array($DataSQL02)){
	echo "<tr><td style='border:1px solid silver;color:white;background:#FF8015;width:90%'><b>$DataROW02[NombreModulo]</b></td>
	<td>";
	echo "<div class='switch'>
		<input id='cmn-toggle-$c' name='$DataROW02[id]' class='cmn-toggle cmn-toggle-round-flat cm-toggle-all' type='checkbox' >
		<label for='cmn-toggle-$c'></label>
	  </div>";
	echo "</td>
	</tr><tr><td colspan='2'>";
		$DataSQL03 = "select * from data01 where id LIKE '$DataROW02[id]%' and Niveles='2' ORDER BY id ASC";
		$DataSQL03 = mysql_query($DataSQL03);
		echo "<table class='ModPermisosN2'>";
		$ci=0;
		while($DataROW03 = mysql_fetch_array($DataSQL03)){
			echo "<tr><td style='border:2px solid silver;width:90%'>$DataROW03[NombreModulo]</td>
			<td>";
				echo "<div class='switch'>
				<input id='cmn-toggle-$c$ci' name='$DataROW03[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cm-toggle-all-nivel2 cm-toggle-levelup' data='cmn-toggle-$c' type='checkbox'>
				<label for='cmn-toggle-$c$ci'></label>
				</div>";
			echo "</td>
			</tr><tr><td colspan='2'>";
				$DataSQL04 = "select * from data01 where id LIKE '$DataROW03[id]%' and Niveles='3' ORDER BY id ASC";
				$DataSQL04 = mysql_query($DataSQL04);
				echo "<table class='ModPermisosN3'>";
				$cid=0;
				while($DataROW04 = mysql_fetch_array($DataSQL04)){
					echo "<tr><td style='border:2px solid white;width:90%'>$DataROW04[NombreModulo]</td>
					<td>";
					echo "<div class='switch'>
					<input id='cmn-toggle-$c$ci$cid' name='$DataROW04[id]' class='cmn-toggle cmn-toggle-round-flat cmn-toggle-$c cmn-toggle-$c$ci cm-toggle-nivelUP' data='cmn-toggle-$c$ci' data01='cmn-toggle-$c' type='checkbox' >
					<label for='cmn-toggle-$c$ci$cid'></label>
					</div>";
					echo "</td>
					</tr>";
					$cid++;
				}
				echo "</table>";
			echo "</td></tr>";
			$ci++;
		}
		echo "</table>";
	echo "</td></tr><tr><td colspan='2'><hr style='background-color:#FF8015'></td></tr>";
	$c++;
}
echo "</table></form>";
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
		"Ingresar": function(){
			IdVal = $("#NewNombreRol").val();
			if(IdVal.length!=0){
			$.ajax({
				type: 'POST',
				url: 'funciones/funcionB020300101.php',
				data: $('#IngresarPermisos').serialize(),
				beforeSend:function(){
					$("#AggNewRolResult").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
				},
				success:function(data){
					$("#AggNewRolResult").html(data);
				}
			});
			$(this).dialog("close");
			}
			else {
				$("#NewNombreRol").addClass("ui-state-error");
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


