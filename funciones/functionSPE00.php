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
.ActuProductoTwo:hover{
	background-color:#0279C0;
	color:white;
}
.tabla-inventario th{
	padding:4px;
}
.ActuProductoTwo, .DelProductoTwo{
	cursor:pointer;
}
</style>
<table class="tabla-inventario">
	<thead>
		<tr><th>Producto</th><th>Cantidad</th></tr>
	</thead>
	<?php
	$DataSQL00 = "select * from vista03 where Estado='1' and NombreProducto LIKE '%$data%'";
	$DataSQL00 = mysql_query($DataSQL00);
	while($DataROW00 = mysql_fetch_array($DataSQL00)){
		$sum =$DataROW00["Existencia"];
		if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
			$sum =$DataROW00["Existencia"]/1000;
		}
		echo "<tr class='ActProducto'>
		<td>$DataROW00[NombreProducto]</td>
		<td id='$DataROW00[id]'> $sum ($DataROW00[Abreviatura])</td>
		<td> <img src='img/add.png' width='25px' class='ActuProductoTwo' data='$DataROW00[id]' /></td>
		<td> <img src='img/delete.png' width='25px' class='DelProductoTwo' data='$DataROW00[id]' /></td>
		</tr>";
	}
	?>
</table>

<div id="ProductoAct"></div>
<div id="AvisoAct"></div>
<script>
$(".ActuProductoTwo").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn02.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ProductoAct").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		success:function(data){
			$("#ProductoAct").html(data);
		}
	});
});
$(".DelProductoTwo").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn02B.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ProductoAct").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		success:function(data){
			$("#ProductoAct").html(data);
		}
	});
});
</script>
<br>
</div>