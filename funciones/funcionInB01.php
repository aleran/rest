<div class="cont-op">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
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
	background-color:#FF8015;
	color:white;
}
.tabla-inventario th{
	padding:4px;
}
.ModProductoTwo{
	cursor:pointer;
}
</style>
<table class="tabla-inventario">
	<thead>
		<tr><th>Producto</th><th>Cantidad</th></tr>
	</thead>
	<?php //
	$DataSQL00 = "select * from vista03 where NombreProducto LIKE '%$data%'";
	$DataSQL00 = mysql_query($DataSQL00);
	while($DataROW00 = mysql_fetch_array($DataSQL00)){
		$sum =$DataROW00["Existencia"];
		if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
			$sum =$DataROW00["Existencia"]/1000;
		}
		echo "<tr class='ActProducto' id='PRD$DataROW00[id]'>
		<td>$DataROW00[NombreProducto]</td>
		<td id='$DataROW00[id]'> $sum ($DataROW00[Abreviatura])</td>
		<td> <img src='img/edit.png' width='17px' class='ModProductoTwo' data='$DataROW00[id]' /></td>
		</tr>";
	}
	?>
</table>

<div id="ModProductoTwo"></div>
<div id="AvisoModTwo"></div>
<script>
$(".ModProductoTwo").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn04.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ModProductoTwo").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		error : function(xhr, status) {
			$("#ModProductoTwo").html("<div id='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$("#ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			$("#ModProductoTwo").html(data);
		}
	});
});
</script>
<br>
</div>