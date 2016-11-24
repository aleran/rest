<div class="cont-op">
	<h4>Reporte diario:</h4>
	<div class="ui styled fluid accordion">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$datetime = date("Y-m-d")." 00:00:00";

//REVISAR PARA MODIFICACION {

$SQL01 = "select * from data13 where FechaDePedido>'$datetime'";
$SQL04 = "select * from data16 where FechaDePedido>'$datetime'";
$SQL01 = mysql_query($SQL01);
$SQL04 = mysql_query($SQL04);
$iterator=0;
$iteraplato=0;
$recaudado=0;
$cancdele=0;
while($ROW04 = mysql_fetch_array($SQL04)){
	$cancdele++;
}
$result = mysql_query("SELECT SUM(efectivo) as totale, SUM(debito) as totald, SUM(credito) as totalc FROM data13 WHERE FechaDePedido>'$datetime'");	
$row = mysql_fetch_array($result, MYSQL_ASSOC);
echo "<script>
		console.log(".$row["totale"].");
		console.log(".$row["totald"].");
		console.log(".$row["totalc"].");
	</script>";
while($ROW01 = mysql_fetch_array($SQL01)){
	$SQL02 = "select * from data14 where Orden='$ROW01[IdOrden]'";
	$SQL02 = mysql_query($SQL02);
	while ($ROW02 = mysql_fetch_array($SQL02)){
		if($ROW02["Personalizado"]==0){
			$iteraplato=$iteraplato+$ROW02["Cantidad"];
			$recaudado+=($ROW02["Costo"]*$ROW02["Cantidad"]); 

			//guardar total recaudado en un campo de la base de datos
		}
		if($ROW02["Personalizado"]!=0){
			$SQL03 = "select * from data15 where IdPersolizado='$ROW02[IdPerCan]'";
			$SQL03 = mysql_query($SQL03);
			while($ROW03 = mysql_fetch_array($SQL03)){
				$recaudado+=$ROW03["CostoSec"];
			}
			$iteraplato++;
		}
	}
	$iterator++;
}
//REVISAR PARA MODIFICACION }
?>

<div class="title"><i class="dropdown icon"></i> Menú</div>
<div class="content">
	<p class="transition hidden">
		<table class="repotesG">
			<tr><td class="data-table-rep">Ordenes atendidas:</td><td><?php echo $iterator; ?></td></tr>
			<tr><td class="data-table-rep">Platos despachados:</td><td><?php echo $iteraplato; ?></td></tr>
			<tr><td class="data-table-rep">Ordenes Cancelados/Borradas:</td><td><?php echo $cancdele; ?></td></tr>
			<tr><td class="data-table-rep">Total Efectivo:</td><td><?php echo $row["totale"]; ?> Bs.</td></tr>
			<tr><td class="data-table-rep">Total Debito:</td><td><?php echo $row["totald"]; ?> Bs.</td></tr>
			<tr><td class="data-table-rep">Total Credito:</td><td><?php echo $row["totalc"]; ?> Bs.</td></tr>
			<tr><td class="data-table-rep">Recaudado:</td><td><?php echo $recaudado; ?> Bs.</td></tr>
		</table>
	</p>
</div>
<div class="title"><i class="dropdown icon"></i> Inventario</div>
<div class="content">
	<p class="transition hidden"><b>Nuevos productos ingresado</b>
<?php 
$IngSQL00 = "select * from data05 where FechaIng>'$datetime'";
$IngSQL00 = mysql_query($IngSQL00);
$itep=0;
echo "<ol>";
while ($IngROW00 = mysql_fetch_object($IngSQL00)) {
	echo "<li>$IngROW00->NombreProducto</li>";
$itep++;
}
echo "</ol>";
if($itep==0){
	echo "¡No hay nuevos productos!";
}
?><br><br><hr><br>
<b>Actualizado recientemente</b>
<table class="data-table">
	<tr class="t-h-data">
		<td>Producto</td>
		<td>Añadido</td>
		<td>Consumido/Retirado</td>
	</tr>
<?php 
$InSQL00 = "select * from data05 where Estado='1'";
$InSQL00 = mysql_query($InSQL00);
while ($InROW00 = mysql_fetch_object($InSQL00)){
	$InSQL01 = "select * from data08 where IdProducto='$InROW00->id' and FechaIngreso>'$datetime'";
	$InSQL01 = mysql_query($InSQL01);
	$InSQL02 = "select * from data09 where IdProducto='$InROW00->id' and FechaRegistro>'$datetime'";
	$InSQL02 = mysql_query($InSQL02);
	$iteratorProducto=0;
	$add=0;
	$less=0;
	$typeu = "";
	if($InROW00->TipoUnidad=="1"){
		$typeu = "Kg";
	}
	if($InROW00->TipoUnidad=="2"){
		$typeu = "L";
	}
	if($InROW00->TipoUnidad=="3"){
		$typeu = "U";
	}
	while($InROW01 = mysql_fetch_object($InSQL01)){
		$Indata00=$InROW01->Cantidad;
		if($InROW01->Tipo=="Gramo (g)" || $InROW01->Tipo=="Mililitro (ml)"){
			$Indata00=$Indata00/1000;
		}
		$add+=$Indata00;
		$iteratorProducto++;
	}
	while($InROW02 = mysql_fetch_object($InSQL02)){
		$Indata00=$InROW02->Cantidad;
		if($InROW02->Tipo=="Gramo (g)" || $InROW02->Tipo=="Mililitro (ml)"){
			$Indata00=$Indata00/1000;
		}
		$less+=$Indata00;
		$iteratorProducto++;
	}
	if($iteratorProducto>0){
		echo "<tr><td>$InROW00->NombreProducto</td><td>$add ($typeu)</td><td>$less ($typeu)</td></tr>";
	}
}
?>
</table>
</p>
</div>
<?php
$DataSQL01 = "select * from data12 where Subniveles='0' and Platillo='1' AND Nivel BETWEEN 1 AND 2";
$DataSQL02 = "select * from data12 where Subniveles='0' and Platillo='0' AND Nivel BETWEEN 1 AND 2";
$DataSQL01 = mysql_query($DataSQL01);
$DataSQL02 = mysql_query($DataSQL02);

$anual01 = date("Y")."-01-01 00:00:00";
$anual02 = date("Y")."-12-31 23:59:59";

$mensual01 = date("Y-m")."-01 00:00:00";
$mensual02 = date("Y-m-d")." 23:59:59";

$diario01 = date("Y-m-d")." 00:00:00";
$diario02 = date("Y-m-d")." 23:59:59";

function my_query($id,$fecha01,$fecha02){
	$query = "SELECT Id,Cantidad
			  FROM data14
			  JOIN data13
			  ON data14.Orden=data13.IdOrden
			  WHERE IdPlato='$id' and FechaDePedido>='$fecha01' and FechaDePedido<='$fecha02'
			  ";
	$query = mysql_query($query);
	$total=0;
	while($row = mysql_fetch_object($query)){
		$total+=$row->Cantidad;
	}
	echo $total;
}
function mysecond_query($id,$fecha01,$fecha02){
	$query = "SELECT data15.Id
			  FROM data14
			  JOIN data13
			  ON data14.Orden=data13.IdOrden
			  JOIN data15
			  ON data14.IdPerCan=data15.IdPersolizado
			  WHERE IdPlatoSec='$id' and FechaDePedido>='$fecha01' and FechaDePedido<='$fecha02'
			  ";
	$query = mysql_query($query);
	$total=0;
	while($row = mysql_fetch_object($query)){
		$total++;
	}
	echo $total;
}
function my_name($id){
	$namesql = "SELECT * FROM data12 WHERE id='$id'";
	$namesql = mysql_query($namesql);
	$name_result="";
	while($namerow = mysql_fetch_object($namesql)){
		$name_result = "[".$namerow->Nombre."] ";
	}
	echo $name_result;
}
?>
<div class="title"><i class="dropdown icon"></i> Reporte general de plato/ordenes</div>
<div class="content">
	<p class="transition hidden"><b>Platos</b><br>
		<table class="OrdenesGeneral">
			<thead>
				<th>Plato / N° Ordenes</th>
				<th>Diario</th>
				<th>Mensual</th>
				<th>Anual</th>
				<th>Total de ordenes</th>
			</thead>
			<?php while($DataROW01 = mysql_fetch_object($DataSQL01)): ?>
				<tr>
					<td><?php my_name($DataROW01->sub_id); echo $DataROW01->Nombre; ?></td>
					<td><?php my_query($DataROW01->id, $diario01, $diario02); ?></td>
					<td><?php my_query($DataROW01->id, $mensual01, $mensual02); ?></td>
					<td><?php my_query($DataROW01->id, $anual01, $anual02); ?></td>
					<td><?php my_query($DataROW01->id, "2016-01-01 00:00:00", $diario02); ?></td>
				</tr>
			<?php endwhile; ?>
		</table><br>
		<b>Partes de un plato</b><br><br>
		<table class="OrdenesGeneral">
			<thead>
				<th>Plato / N° Ordenes</th>
				<th>Diario</th>
				<th>Mensual</th>
				<th>Anual</th>
				<th>Completo</th>
			</thead>
			<?php while($DataROW02 = mysql_fetch_object($DataSQL02)): ?>
				<tr>
					<td><?php my_name($DataROW02->sub_id); echo $DataROW02->Nombre; ?></td>
					<td><?php mysecond_query($DataROW02->id, $diario01, $diario02); ?></td>
					<td><?php mysecond_query($DataROW02->id, $mensual01, $mensual02); ?></td>
					<td><?php mysecond_query($DataROW02->id, $anual01, $anual02); ?></td>
					<td><?php mysecond_query($DataROW02->id, "2016-01-01 00:00:00", $diario02); ?></td>
				</tr>
			<?php endwhile; ?>
		</table><br>
	</p>
</div>
</div>
<style>
.OrdenesGeneral{
	width: 100%;
}
.OrdenesGeneral th{
	background-color: #d8d8d8;
	font-weight: bold;
}
.t-h-data, .data-table-rep{
	background-color: silver;
	font-weight: bold;
}
.data-table-rep{
	text-align: left;
}
.data-table, .OrdenesGeneral, .repotesG{
	text-align: center;
	cursor: default;
	border: 1px solid silver;
	border-radius: 2px;
}
.repotesG td{
	border: 1px solid silver;
	padding: 5px;
}
.data-table td, .OrdenesGeneral td, .OrdenesGeneral th{
	padding: 6px;
	border: 1px solid silver;
}
</style>
<script>
	$(".ui.accordion").accordion();
</script>