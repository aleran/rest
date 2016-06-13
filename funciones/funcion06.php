<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
	<button class="MesasEditarAgregar" data="funciones/funcion0601.php">Agregar Mesa</button>
	<button class="MesasEditarAgregar" data="funciones/funcion0602.php">Editar Mesa</button>
	<div id="MesasAddChan"></div>
	<br>
</div>
<script>
$(".MesasEditarAgregar").button().click(function(){
	url = $(this).attr("data");
	$.ajax({
		url:url,
		beforeSend:function(){
			$("#MesasAddChan").html("Cargando...");
		},
		error:function(){
			$("#MesasAddChan").html("Error de carga...");
		},
		success:function(data){
			$("#MesasAddChan").html(data);
		}
	});
});
</script>