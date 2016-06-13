<div class="cont-op">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<style>
.tabla-inventario{
	border:1px solid silver;
	border-radius:5px;
	cursor:default;
}
.tabla-inventario td{
	border:1px solid silver;
	padding:6px;
}
.ActProducto:hover{
	background-color:#0279C0;
	color:white;
}
.tabla-inventario th{
	padding:4px;
}
.ModProducto{
	cursor:pointer;
}
</style>
<button id="searchProductMod"><span class="octicon octicon-search"></span> Buscar</button>
<div id="InSearch"></div>
<table class="tabla-inventario">
	<thead>
		<tr><th>Producto</th><th>Cantidad</th></tr>
	</thead>
	<?php
	$DataSQL00 = "select * from vista03 limit 0,10";
	$DataSQL00 = mysql_query($DataSQL00);
	while($DataROW00 = mysql_fetch_array($DataSQL00)){
		$sum =$DataROW00["Existencia"];
		if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
			$sum =$DataROW00["Existencia"]/1000;
		}
		echo "<tr class='ActProducto' id='PRD$DataROW00[id]'>
		<td>$DataROW00[NombreProducto]</td>
		<td id='$DataROW00[id]'> $sum ($DataROW00[Abreviatura])</td>
		<td> <img src='img/edit.png' width='17px' class='ModProducto' data='$DataROW00[id]' /></td>
		</tr>";
	}
	?>
</table>

<div id="ModProducto"></div>
<div id="AvisoMod"></div>
<script>
$("#searchProductMod").button().click(function(){
	$.ajax({
		url:"funciones/funcionInB00.php",
		beforeSend:function(){
			$("#InSearch").html("Cargando...");
		},
		success:function(success){
			$("#InSearch").html(success);
		}
	});
});
$(".ModProducto").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn04.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ModProducto").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		error : function(xhr, status) {
			$("#ModProducto").html("<div id='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$("#ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			$("#ModProducto").html(data);
		}
	});
});
</script>
<br>
</div>