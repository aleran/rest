<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
	<label><b>Buscar orden</b></label><br>
	&nbsp; OD <input type="text" class="iNext ui-corner-all lokl" id="InputSearch" autocomplete="off" placeholder="Ingrese código de orden" /><br>
	<br><hr>
	<div id="ResultSearchOrden"></div>
</div>

<style>
.lokl{
	padding: 5px;
	width: 360px;
}
</style>

<script>
$("#InputSearch").keyup(function(){
	valor = $(this).val();
	$.ajax({
		type:"post",
		url:"funciones/funcion0501.php",
		data:"Data="+valor,
		beforeSend:function(){
			$("#ResultSearchOrden").html("Buscando orden...");
		},
		error:function(){
			$("#ResultSearchOrden").html("Error de conexión");
		},
		success:function(data){
			$("#ResultSearchOrden").html(data);
		}
	});
});
</script>