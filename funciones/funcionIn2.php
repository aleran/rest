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
	background-color:#FF8015;
	color:white;
}
.tabla-inventario th{
	padding:4px;
}
.ActuProducto, .DelProducto{
	cursor:pointer;
}
</style>
<button id="searchProduct"><span class="octicon octicon-search"></span> Buscar</button>
<div id="ResultSearchB"></div>
<table class="tabla-inventario">
	<thead>
		<tr><th>Producto</th><th>Cantidad</th></tr>
	</thead>
	<?php
	$DataSQL00 = "select * from vista03 where Estado='1' LIMIT 0,10";
	$DataSQL00 = mysql_query($DataSQL00);
	while($DataROW00 = mysql_fetch_array($DataSQL00)){
		$sum =$DataROW00["Existencia"];
		if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
			$sum =$DataROW00["Existencia"]/1000;
		}
		echo "<tr class='ActProducto'>
		<td>$DataROW00[NombreProducto]</td>
		<td id='$DataROW00[id]'> $sum ($DataROW00[Abreviatura])</td>
		<td> <img src='img/add.png' width='25px' class='ActuProducto' data='$DataROW00[id]' /></td>
		<td> <img src='img/delete.png' width='25px' class='DelProducto' data='$DataROW00[id]' /></td>
		</tr>";
	}
	?>
</table>

<div id="ProductoAct"></div>
<div id="AvisoAct"></div>
<script>
$("#searchProduct").button().click(function(){
	$.ajax({
		url:"funciones/functionSPE.php",
		beforeSend: function(){
			$("#ResultSearchB").html("Cargando...");
		},
		success:function(results){
			$("#ResultSearchB").html(results);
		}
	});
});
$(".ActuProducto").click(function(){
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
$(".DelProducto").click(function(){
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