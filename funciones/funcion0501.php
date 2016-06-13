<br><table class="Ordenes">
	<thead>
		<tr>
			<th>Número de orden</th>
			<th>Mesa</th>
			<th>Fecha de la orden</th>
		</tr>
	</thead>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data = "OD".$_POST["Data"];
$SQL01 = "select * from data13 where IdOrden LIKE '$Data%'";
$SQL02 = "select * from data16 where IdOrden LIKE '$Data%'";
$SQL01 = mysql_query($SQL01);
$SQL02 = mysql_query($SQL02);

$iterator=0;
if (strlen($_POST["Data"])!=0) {
while($ROW01 = mysql_fetch_object($SQL01)){
	$fechai = date_create_from_format("Y-m-d H:i:s",$ROW01->FechaDePedido);
	$fecha = date_format($fechai, 'd/m/Y h:i a');
	$fechat = date_format($fechai, 'Y-m-d');
	if ($fechat==date("Y-m-d")) {
		$class = "SecondOption";
	}
	else{
		$class = "IdOrden";
	}
	echo "<tr class='$class' data='$ROW01->IdOrden'>";
	echo "<td>$ROW01->IdOrden</td>";
	echo "<td>$ROW01->Mesa</td>";
	echo "<td>$fecha</td>";
	echo "</tr>";
	$iterator++;
}
}
if ($iterator==0) {
	echo "<tr><td colspan='3'>¡No hay resultados!</td></tr>";
}
?>
</table>
<h3>Ordenes Borradas</h3>
<table class="OrdenesBorradas">
	<thead>
		<tr>
			<th>Número de orden</th>
			<th>Mesa</th>
			<th>Fecha de la orden</th>
		</tr>
	</thead>
<?php
$iterator2=0;
if (strlen($_POST["Data"])!=0):
while($ROW02 = mysql_fetch_object($SQL02)):
	$iterator2++;
	$fechaib = date_create_from_format("Y-m-d H:i:s",$ROW02->FechaDePedido);
	$fechab = date_format($fechaib, 'd/m/Y h:i a');
	$fechatb = date_format($fechaib, 'Y-m-d');
?>
<tr class="OrdenBorrada" data="<?php echo $ROW02->IdOrden;?>">
	<td><?php echo $ROW02->IdOrden; ?></td>
	<td><?php echo $ROW02->Mesa; ?></td>
	<td><?php echo $fechab; ?></td>
</tr>
<?php
endwhile;
endif;
if ($iterator2==0) {
	echo "<tr><td colspan='3'>¡No hay resultados!</td></tr>";
}
?>
</table>
<br>
<script>
$(".IdOrden").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion050101.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheck").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheck").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheck").html(data);
		}
	});
});
$(".OrdenBorrada").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion050102.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheck").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheck").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheck").html(data);
		}
	});
});
$(".SecondOption").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion050101.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheck").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheck").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheck").html(data);
		}
	});
});
</script>
<style>
.IdOrden:hover, .OrdenBorrada:hover{
	background-color: gainsboro;
	cursor: pointer;
}
.SecondOption:hover{
	background-color: gainsboro;
	cursor: pointer;
}
.Ordenes, .OrdenesBorradas{
	border: 1px solid silver;
	cursor: default;
	border-radius: 3px;
	text-align: center;
	margin: 0 auto;
}
.Ordenes td, .OrdenesBorradas td{
	border: 1px solid silver;
	padding: 6px;
}
.Ordenes thead, .OrdenesBorradas thead{
	background-color: #0279C0;
	color: white;
}
.Ordenes thead th, .OrdenesBorradas thead th{
	padding: 7px;
}
</style>