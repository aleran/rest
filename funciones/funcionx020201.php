<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data00 = $_GET["data00"];
$data01 = $_GET["data01"];

$dataD00 = funcion0402($data00)." 00:00:00";
$dataD01 = funcion0402($data01)." 23:59:59";

$datetime = date("Y-m-d")." 00:00:00";
$SQL01 = "select * from data13 where FechaDePedido>='$dataD00' and FechaDePedido<'$dataD01'";
$SQL04 = "select * from data16 where FechaDePedido>='$dataD00' and FechaDePedido<'$dataD01'";
$result = mysql_query("SELECT SUM(efectivo) as totale, SUM(debito) as totald, SUM(credito) as totalc FROM data13 WHERE FechaDePedido>='$dataD00' and FechaDePedido<'$dataD01'");	
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$SQL01 = mysql_query($SQL01);
$SQL04 = mysql_query($SQL04);
$iterator=0;
$iteraplato=0;
$recaudado=0;
$cancdele=0;
while($ROW04 = mysql_fetch_array($SQL04)){
	$cancdele++;
}
while($ROW01 = mysql_fetch_array($SQL01)){
	$SQL02 = "select * from data14 where Orden='$ROW01[IdOrden]'";
	$SQL02 = mysql_query($SQL02);
	while ($ROW02 = mysql_fetch_array($SQL02)){
		if($ROW02["Personalizado"]==0){
			$iteraplato=$iteraplato+$ROW02["Cantidad"];
			$recaudado+=($ROW02["Costo"]*$ROW02["Cantidad"]);
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
?>
<h3>Reporte del rango: <?php echo "del (".$data00.") al (".$data01.")"; ?></h3>
<h4><u><li>Menú</li></u></h4>
Ordenes atendidas: <?php echo $iterator; ?><br>
Platos despachados: <?php echo $iteraplato; ?><br>
Ordenes Cancelados/Borradas: <?php echo $cancdele; ?> <br>
Total Efectivo: <?php echo $row["totale"]; ?> <br>
Total Credito: <?php echo $row["totald"]; ?> <br>
Total Debito: <?php echo $row["totalc"]; ?> <br>
Recaudado: <?php echo $recaudado; ?> Bs.<br>
<h4><u><li>Inventario</li></u></h4>
<h5><u>Nuevos productos ingresado</u></h5>
<?php 
$IngSQL00 = "select * from data05 where FechaIng>='$dataD00' and FechaIng<'$dataD01'";
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
?>
<h5><u>Actualizado recientemente</u></h5>
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
	$InSQL01 = "select * from data08 where IdProducto='$InROW00->id' and FechaIngreso>='$dataD00' and FechaIngreso<'$dataD01'";
	$InSQL01 = mysql_query($InSQL01);
	$InSQL02 = "select * from data09 where IdProducto='$InROW00->id' and FechaRegistro>='$dataD00' and FechaRegistro<'$dataD01'";
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
<style>
.t-h-data{
	background-color: silver;
	font-weight: bold;
}
.data-table{
	text-align: center;
	cursor: default;
	border: 1px solid silver;
	border-radius: 2px;
}
.data-table td{
	padding: 6px;
	border: 1px solid silver;
}
</style>