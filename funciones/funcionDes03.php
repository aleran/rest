<br>
<?php
include("../config/config00.php");
include("../config/config02.php");
$Data = $_POST["Data"];
$DataSQL00 = "select * from vista05 where MesaNumero='$Data'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

$DataResult = 0;

$DataSQL01 = "select * from vista06 where Orden='$DataROW00[IdOrden]' ";
$DataSQL01 = mysql_query($DataSQL01);

$DataSQL02 = "select * from data14 where Orden='$DataROW00[IdOrden]' ";
$DataSQL02 = mysql_query($DataSQL02);
?>
<b>Número de Orden: </b><?php echo $DataROW00["IdOrden"];?>
<hr>
<table id="imprimir-table">
<td><b>Ordenes </b></td>
<td><b>Cantidad</b></td>
<td style='text-align:right'><b>Precio unitario</b></td>
<?php
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	echo "<tr><td>".$DataROW01["Nombre"]."</td>
			  <td>$DataROW01[Cantidad]</td>
			  <td style='text-align:right'>".$DataROW01["DeCosto"]." Bs.</td>
		  </tr>";
	$DataResult = $DataResult + ($DataROW01["DeCosto"]*$DataROW01["Cantidad"]);
}
while($DataROW02 = mysql_fetch_array($DataSQL02)){
	$IdPer = $DataROW02["IdPerCan"];
	if($IdPer!=""){
			echo "<tr><td colspan='3'><b>Plato Personalizado</b></td></tr>";
			$DataSQL03 = "select * from vista07 where IdPersolizado='$IdPer' ";
			$DataSQL03 = mysql_query($DataSQL03) or die (mysql_error());
			while($DataROW03 = mysql_fetch_array($DataSQL03)){
				echo "<tr>
					  <td>&nbsp;&nbsp;&nbsp;<span class='octicon octicon-chevron-right'></span> ".$DataROW03["Nombre"]."</td>
					  <td>&nbsp;</td>
					  <td style='text-align:right'>".$DataROW03["CostoSec"]." Bs.</td>
					  </tr>";
				$DataResult = $DataResult + $DataROW03["CostoSec"];
			}
		}
	// 
}
echo "<tr><td colspan=3 style='text-align:right; border-top:4px solid silver'><b>Total:</b> ".$DataResult." Bs.</td></tr>";
echo "</table>";
?>
<style>
#imprimir-table td{
	/*border: 1px solid red;*/
}
#imprimir-table{
	width: 100% !important;
	font-size: 90%;
}
</style>