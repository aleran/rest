<div id="CargaMenuTable"></div>

<script>
function cargamenu(){
	$.ajax({
		url:"funciones/funcionInMenu03.php",
		beforeSend:function(){
			$("#CargaMenuTable").html("Cargando...");
		},
		error:function(){
			$("#CargaMenuTable").html("Error...");
		},
		success:function(data){
			$("#CargaMenuTable").html(data);
		}
	});
}
$(document).ready(function(){
	cargamenu();
});
</script>