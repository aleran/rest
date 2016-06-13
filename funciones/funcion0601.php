<div id="NewTable" title="Agregar mesa">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
¿Desea agregar una nueva mesa?
<div id="LoadNewTable"></div>
</div>
<script>
$("#NewTable").dialog({
	modal:true,
	buttons:{
		Aceptar:function(){
			$.ajax({
				url:"funciones/funcion060101.php",
				beforeSend:function(){
					$("#LoadNewTable").html("Cargando...");
				},
				error:function(){
					$("#LoadNewTable").html("Error, no se pudo cargar la consulta...");
				},
				success:function(data){
					$("#MesasAddChan").html(data);
				}
			});
		},
		Cancelar:function(){
			$(this).dialog("close");
		}
	},
	close:function(){
		$(this).remove();
	}
}).css({textAlign:"center"});
</script>