<div id="EditTable" title="Editar mesa">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$SQLtable01 = "select * from data11";
$SQLtable01 = mysql_query($SQLtable01);
$option="";
while($Row01 = mysql_fetch_object($SQLtable01)){
	if($Row01->Estado==0){
		$status = "(inactiva)";
	}
	if($Row01->Estado==1){
		$status = "(activa)";
	}
	$option.="<option value='$Row01->MesaNumero'>Mesa #$Row01->MesaNumero $status</option>";
}
?>
<form id="DataTable">
<h4>Mesas</h4>
<select class="select-table" name="TableEdit" id="TableEdit">
<option value="0">Seleccione la mesa</option>
<?php echo $option; ?>
</select>
<div id="LoadEditTable"></div>
</form>
</div>
<script>
$("#EditTable").dialog({
	modal:true,
	buttons:{
		Guardar:function(){
			tableselect = $("#TableEdit").val();
			if(tableselect!=0){
			$.ajax({
				type:"post",
				url:"funciones/funcion060202.php",
				data:$("#DataTable").serialize(),
				beforeSend:function(){
					$("#LoadEditTable").html("Cargando...");
				},
				error:function(){
					$("#LoadEditTable").html("Error, no se pudo cargar la consulta...");
				},
				success:function(data){
					$("#MesasAddChan").html(data);
					$("#EditTable").remove();
				}
			});
			}
			else{
				alert("Seleccione una mesa");
			}
		},
		Cancelar:function(){
			$(this).dialog("close");
		}
	},
	close:function(){
		$(this).remove();
	}
});
$("#TableEdit").change(function(){
	valor = $(this).val();
	if(valor!=0){
	$.ajax({
		type:"post",
		url:"funciones/funcion060201.php",
		data:"Data00="+valor,
		beforeSend:function(){
			$("#LoadEditTable").html("Cargando...");
		},
		error:function(){
			$("#LoadEditTable").html("Error no se pudo cargar la petición...");
		},
		success:function(data){
			$("#LoadEditTable").html(data);
		}
	});
	}
	else{
			$("#LoadEditTable").html("");
	}
});
</script>
<style>
.select-table{
border:1px solid silver;
border-radius:4px;
padding: 0.3em;
width: 100%;
}
</style>