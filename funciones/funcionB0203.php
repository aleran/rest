<?php
include("../config/config02.php");
funcion00();
?>
<button id="NewRol" class='botones'>Ingresar Rol</button>
<div id="AggNewRol"></div>
<div id="AggNewRolResult"></div>
<script>
$("#NewRol").click(function(){
	$.ajax({
		url: 'funciones/funcionB020301.php',
		beforeSend:function(){
			$("#AggNewRol").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
		},
		success:function(data){
			$("#AggNewRol").html(data);
		}
	});
});
$(".botones").button();
</script>
