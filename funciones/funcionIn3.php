<?php
include("../config/config02.php");
funcion00();
?>
<div id="AreaCarga" title="Ingresar Nuevo Producto" ></div>
<center><button id="ButtonClassIng" class="ButtonClassIng">Ingresar Producto</button></center>
<div id="ResultIngreso"></div>
<script>
$(".ButtonClassIng").button();
$("#ButtonClassIng").click(function(){
	$.ajax({
		url: "funciones/funcionIn0301.php",
		beforeSend:function(){
			$("#AreaCarga").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		success:function(data){
			$("#AreaCarga").html(data);
		}
	});
});
</script>
