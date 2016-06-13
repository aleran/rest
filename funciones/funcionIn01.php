<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data00 = $_POST["data"];
$DataSQL00 = "select * from vista03 where id='$Data00' and Estado='1'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

$Date=date("Y-m-d");
$DataSQL01 = "select * from data08 where IdProducto='$Data00' and FechaCaducidad>='$Date' order by FechaCaducidad asc";
$DataSQL01 = mysql_query($DataSQL01);
$Data01="";
$i=0;
while($DataROW01 = mysql_fetch_array($DataSQL01) and $i<10){
	$FechaCaducidad = funcion0401($DataROW01["FechaCaducidad"]);
	$FechaIngreso = funcion04($DataROW01["FechaIngreso"]);
	$class="";
	if($Date==$DataROW01["FechaCaducidad"]){
		$class="style='background-color:#0279C0;color:white;font-weight:bold'";
	}
	$Data01.="<tr $class class='lotes' data='$DataROW01[Lote]' ><td>$DataROW01[Lote]</td><td>$DataROW01[Cantidad] $DataROW01[Tipo]</td><td>$FechaIngreso</td><td>$FechaCaducidad</td></tr>";
	$i++;
}

$sum =$DataROW00["Existencia"];
if($DataROW00["Abreviatura"]=="kg" or $DataROW00["Abreviatura"]=="l"){
	$sum =$DataROW00["Existencia"]/1000;
}
?>
<div id="ProductoVer" title="Producto: <?php echo $DataROW00["NombreProducto"]; ?>">
	<?php
		echo "
			Cantidad disponible: $sum $DataROW00[Abreviatura]<br><br>
			Descripción:  $DataROW00[Descripcion]<br><br>
			Próximas fecha de caducidad:<br><br>
			<table class='pcaducar'>
			<tr style='font-weight:bold'><td>Lote</td><td>Cantidad</td><td>Fecha de Ingreso</td><td>Fecha de Caducidad</td></tr>
			$Data01
			</table>
			
		";
	?>
</div>
<script>
$("#ProductoVer").dialog({
	modal:true,
	width:680,
	close:function(){
		$(this).remove();
	}
});
$(".lotes").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn01-0201B.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ProductoCarga").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		error:function(){
			$("#ProductoCarga").html("<div class='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$(".ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			$("#ProductoVer").dialog("close");
			$("#ProductoCarga").html(data);
		}
	});
});
</script>
<style>
.pcaducar{
border:1px solid silver;
border-radius:5px;
margin:0 auto;
cursor:default;
}
.pcaducar td{
border:1px solid silver;
padding:5px;
text-align:center;
}
.lotes:hover{
background-color:gainsboro;
cursor:pointer;
}
</style>
