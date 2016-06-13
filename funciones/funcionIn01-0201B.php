<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data = $_POST["data"];

$DataSQL00 = "select * from vista04 where Lote='$Data'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);
?>
<div id="LoteVer" title="Lote: <?php echo $DataROW00["Lote"];?>">
<?php
$FechaCaducidad = funcion0401($DataROW00["FechaCaducidad"]);
$FechaIngreso = funcion04($DataROW00["FechaIngreso"]);
$Existencia = $DataROW00["Existencia"]/1000;
echo "
<b>Producto: </b>$DataROW00[NombreProducto] <br>
<b>Existencia: </b>$Existencia ($DataROW00[Abreviatura])<br><br>
<b>Ingreso del lote: </b>$DataROW00[Cantidad] ($DataROW00[Tipo]) <br>
<b>Fecha de Ingreso: </b>$FechaIngreso <br>
<b>Fecha de Caducidad: </b>$FechaCaducidad <br>
";
?>
</div>
<script>
$("#LoteVer").dialog({
	modal:true
});
</script>
