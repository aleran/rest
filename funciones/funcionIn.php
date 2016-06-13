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
	text-align:center;
	margin:0 auto;
}
.tabla-inventario td{
	border:1px solid silver;
	padding:6px;
}
.VerProducto:hover{
	background-color:#0279C0;
	color:white;
	cursor:pointer;
}
.tabla-inventario th{
	padding:4px;
}
.ui-selectmenu-text{font-size:85%;width:200px}
</style>

<center>
	<button class="botones-class" id="BuscarProducto">Buscar</button>
	<button class="botones-class" id="LogsBorrado">Buscar Log</button>
</center><br><br>

<table class="tabla-inventario">
	<thead>
		<tr><th>Producto</th><th>Prox. Fecha de caducidad</th><th>Cantidad</th></tr>
	</thead>
	<?php
	$DataSQL00 = "select * from vista03 where Estado='1'";
	$DataSQL00 = mysql_query($DataSQL00);
	
	while($DataROW00 = mysql_fetch_array($DataSQL00)){
		$sum =$DataROW00["Existencia"];
		if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
			$sum =$DataROW00["Existencia"]/1000;
		}
		
		$Date=date("Y-m-d");
		$DataSQL01 = "select * from data08 where IdProducto='$DataROW00[id]' and FechaCaducidad>='$Date' order by FechaCaducidad asc";
		$DataSQL01 = mysql_query($DataSQL01);
		$Data01="<td>Sin ingreso</td>";
		$i=0;
		while($DataROW01 = mysql_fetch_array($DataSQL01) and $i<1){
			$FechaCaducidad = funcion0401($DataROW01["FechaCaducidad"]);
			$class="";
			if($Date==$DataROW01["FechaCaducidad"]){
				$class="style='background-color:#0279C0;color:white;font-weight:bold'";
			}
			$Data01="<td $class >$FechaCaducidad</td>";
			$i++;
		}
		
		echo "<tr class='VerProducto' data='$DataROW00[id]'>
		<td>$DataROW00[NombreProducto]</td>
		$Data01
		<td>$sum ($DataROW00[Abreviatura])</td>
		</tr>";
	}
	?>
</table>

<div id="ProductoCarga"></div>
<div id="ProductoLoteBuscar"></div>
<script>
$("#LogsBorrado").click(function(){
	$.ajax({
		url:"funciones/funcionInSearch.php",
		beforeSend:function(){
			$("#ProductoCarga").html("Buscando...");
		},
		success:function(results){
			$("#ProductoCarga").html(results);
		}
	});
});
$(".VerProducto").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn01.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ProductoCarga").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		success:function(data){
			$("#ProductoCarga").html(data);
		}
	});
});
$(".botones-class").button();
$("#BuscarProducto").click(function(){
	$.ajax({
		url: "funciones/functionIn01-2.php",
		beforeSend:function(){
			$("#ProductoLoteBuscar").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		error:function(){
			$("#ProductoLoteBuscar").html("<div class='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$(".ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			$("#ProductoLoteBuscar").html(data);
		}
	});
			
});
</script>
<br>
</div>