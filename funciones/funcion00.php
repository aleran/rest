<div class="cont-op">
	<?php
	include("../config/config00.php");
	include("../config/config02.php");
	funcion00();
	$datetime = date("Y-m-d")." 00:00:00";
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
	<h3>Resumen diario</h3>
	<table class="repotesG">
		<tr><td class="data-table-rep">Ordenes atendidas:</td><td><?php echo $iterator; ?></td></tr>
		<tr><td class="data-table-rep">Platos despachados:</td><td><?php echo $iteraplato; ?></td></tr>
		<tr><td class="data-table-rep">Ordenes Cancelados/Borradas:</td><td><?php echo $cancdele; ?></td></tr>
		<tr><td class="data-table-rep">Recaudado:</td><td><?php echo $recaudado; ?> Bs.</td></tr>
	</table>
</div>
<style>
.t-h-data, .data-table-rep{
	background-color: silver;
	font-weight: bold;
}
.data-table, .repotesG{
	text-align: center;
	cursor: default;
	border: 1px solid silver;
	border-radius: 2px;
}
.data-table td{
	padding: 6px;
	border: 1px solid silver;
}
.repotesG td{
	border: 1px solid silver;
	padding: 5px;
}
.data-table-rep{
	text-align: left;
}
</style>