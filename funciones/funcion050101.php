<div id="VerOrden">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data = $_POST["Data"];

$DataResult = 0;

$DataSQL01 = "select * from vista06 where Orden='$Data' ";
$DataSQL01 = mysql_query($DataSQL01);

$SQL00 = "select * from data13 where IdOrden='$Data' ";
$SQL00 = mysql_query($SQL00);
$ROW00 = mysql_fetch_object($SQL00);

$fechaio = date_create_from_format("Y-m-d H:i:s",$ROW00->FechaDePedido);
$fechao = date_format($fechaio, 'd/m/Y h:i a');
$fechat0 = date_format($fechaio, 'Y-m-d');

if($ROW00->Estatus==0){
	$EstadoOrden = "Despachada";
}
if($ROW00->Estatus==1){
	$EstadoOrden = "En edición";
}
if($ROW00->Estatus==2){
	$EstadoOrden = "En proceso";
}
if($ROW00->Estatus==3){
	$EstadoOrden = "En cocina";
}
if($ROW00->Estatus==4){
	$EstadoOrden = "Despachando";
}

$SQL01 = "select * from data02 where CodigoTbr='$ROW00->UsuarioOrdena' ";
$SQL01 = mysql_query($SQL01);
$ROW01 = mysql_fetch_object($SQL01);

$DataSQL02 = "select * from data14 where Orden='$Data' ";
$DataSQL02 = mysql_query($DataSQL02);

	?>
	<script type="text/javascript">
		$("#VerOrden").attr("title" , "Número de orden: <?php echo $Data;?>");
	</script>
	<span class="UserOrden">
		<b>Quien Ordena: </b> <?php echo $ROW01->CodigoTbr." - ".$ROW01->PrimerNombre." ".$ROW01->PrimerApellido; ?><br>
		<b>Datos </b>[<b>Mesa: </b><?php echo $ROW00->Mesa; ?>] [<b>Fecha:</b> <?php echo $fechao; ?>] [<b>Estado:</b> <?php echo $EstadoOrden; ?>]
	</span><br>
	<b>Ordenes: </b><br>
	<table style="font-size:90%">
	<?php
	while($DataROW01 = mysql_fetch_array($DataSQL01)){
		echo "<tr><td style='text-align:right'>".$DataROW01["DeCosto"]." Bs.</td><td>[$DataROW01[Cantidad]]</td><td>".$DataROW01["Nombre"]."</td></tr>";
		$DataResult = $DataResult + ($DataROW01["DeCosto"]*$DataROW01["Cantidad"]);
	}
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		$IdPer = $DataROW02["IdPerCan"];
		if($IdPer!=""){
				echo "<tr><td style='text-align:right'></td><td colspan='2'><b>Plato Personalizado</b></td></tr>";
				$DataSQL03 = "select * from vista07 where IdPersolizado='$IdPer' ";
				$DataSQL03 = mysql_query($DataSQL03) or die (mysql_error());
				while($DataROW03 = mysql_fetch_array($DataSQL03)){
					echo "<tr><td style='text-align:right'></td><td></td><td>&nbsp;&nbsp;".$DataROW03["CostoSec"]." Bs. ".$DataROW03["Nombre"]."</td></tr>";
					$DataResult = $DataResult + $DataROW03["CostoSec"];
				}
			}
		// 
	}
	echo "</table>";
	echo "<br><hr><p style='text-align:right'>Total: ".$DataResult." Bs.</p>";
?>
<script type="text/javascript">
$("#VerOrden").dialog({
	modal:true,
	width:450,
	close: function(){
		$(this).remove();
	}
});
</script>
<style type="text/css">
#ActualizarEstado{
	padding: 5px;
	border: 1px solid silver;
	border-radius: 4px;
}
#ActualizarEstado:focus{
	border:1px solid #FF8015;
	box-shadow: 3px 3px 3px black;
}
#LoadAct{
	font-style: italic;
	display: none;
}
.UserOrden{
	font-size: 12px;
}
</style>