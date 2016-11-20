<h3>Resumen total</h3>
Ordenes realizadas: <span id="CanTotalOrden"></span><br>
Ordenes borradas: <span id="CanTotalOrdenDelete"></span>
<h3>Resumen diario</h3>
Ordenes realizadas: <span id="CanOrde"></span><br>
Ordenes borradas: <span id="CanOrDelete"></span>
<h3>Resumen del mes</h3>
Ordenes realizadas: <span id="OrdenMes"></span><br>
Ordenes borradas: <span id="OrdenMesDelete"></span>
<h3>Resumen del año</h3>
Ordenes realizadas: <span id="OrdenYear"></span><br>
Ordenes borradas: <span id="OrdenYearDelete"></span>
<br>
<center><h2>Ordenes atendidas hoy</h2></center>
<table class="Ordenes">
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
$DataU01 = $_SESSION['idtbr'];

$toda01 = date("Y-m-d")." 00:00:00";
$toda02 = date("Y-m-d")." 23:59:59";

$mestoday01 = date("Y-m")."-01 00:00:00";
$mestoday02 = date("Y-m")."-31 23:59:59";

$yeartoday01 = date("Y")."-01-01 00:00:00";
$yeartoday02 = date("Y")."-12-31 23:59:59";

$SQL01 = "select * from data13 where UsuarioOrdena='$DataU01' and FechaDePedido>='$toda01' and FechaDePedido<'$toda02' ";
$SQL02 = "select * from data16 where UsuarioOrdena='$DataU01' and FechaDePedido>='$toda01' and FechaDePedido<'$toda02' ";

$SQL03 = "select * from data13 where UsuarioOrdena='$DataU01' and FechaDePedido>='$mestoday01' and FechaDePedido<'$mestoday02' ";
$SQL04 = "select * from data16 where UsuarioOrdena='$DataU01' and FechaDePedido>='$mestoday01' and FechaDePedido<'$mestoday02' ";

$SQL05 = "select * from data13 where UsuarioOrdena='$DataU01' and FechaDePedido>='$yeartoday01' and FechaDePedido<'$yeartoday02' ";
$SQL06 = "select * from data16 where UsuarioOrdena='$DataU01' and FechaDePedido>='$yeartoday01' and FechaDePedido<'$yeartoday02' ";

$SQL07 = "select * from data13 where UsuarioOrdena='$DataU01'";
$SQL08 = "select * from data16 where UsuarioOrdena='$DataU01'";

$SQL01 = mysql_query($SQL01);
$SQL02 = mysql_query($SQL02);

$SQL03 = mysql_query($SQL03);
$SQL04 = mysql_query($SQL04);

$SQL05 = mysql_query($SQL05);
$SQL06 = mysql_query($SQL06);

$SQL07 = mysql_query($SQL07);
$SQL08 = mysql_query($SQL08);

$iterator=0;
$itemes=0;
$itemesbo=0;
$iteyear=0;
$iteyearbo=0;
$itetotal=0;
$itetotalbo=0;

while($ROW03 = mysql_fetch_object($SQL03)){
	$itemes++;
}
while($ROW04 = mysql_fetch_object($SQL04)){
	$itemesbo++;
}
while($ROW05 = mysql_fetch_object($SQL05)){
	$iteyear++;
}
while($ROW06 = mysql_fetch_object($SQL06)){
	$iteyearbo++;
}
while($ROW07 = mysql_fetch_object($SQL07)){
	$itetotal++;
}
while($ROW08 = mysql_fetch_object($SQL08)){
	$itetotalbo++;
}
while($ROW01 = mysql_fetch_object($SQL01)){
	$fechai = date_create_from_format("Y-m-d H:i:s",$ROW01->FechaDePedido);
	$fecha = date_format($fechai, 'd/m/Y h:i a');
	$fechat = date_format($fechai, 'Y-m-d');
	if ($fechat==date("Y-m-d")) {
		$class = "SecondOptionUser";
	}
	else{
		$class = "IdOrdenUser";
	}
	echo "<tr class='$class' data='$ROW01->IdOrden'>";
	echo "<td>$ROW01->IdOrden</td>";
	echo "<td>$ROW01->Mesa</td>";
	echo "<td>$fecha</td>";
	echo "</tr>";
	$iterator++;
}
if ($iterator==0) {
	echo "<tr><td colspan='3'>¡No haz realizado ninguna orden hoy!</td></tr>";
}
?>
</table>
<center><h3>Ordenes Borradas</h3></center>
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
while($ROW02 = mysql_fetch_object($SQL02)):
	$iterator2++;
	$fechaib = date_create_from_format("Y-m-d H:i:s",$ROW02->FechaDePedido);
	$fechab = date_format($fechaib, 'd/m/Y h:i a');
	$fechatb = date_format($fechaib, 'Y-m-d');
?>
<tr class="OrdenBorradaUser" data="<?php echo $ROW02->IdOrden;?>">
	<td><?php echo $ROW02->IdOrden; ?></td>
	<td><?php echo $ROW02->Mesa; ?></td>
	<td><?php echo $fechab; ?></td>
</tr>
<?php
endwhile;
if ($iterator2==0) {
	echo "<tr><td colspan='3'>¡No haz borrado ninguna orden hoy!</td></tr>";
}
?>
</table>
<br>
<script>
$("#CanOrde").text("<?php echo $iterator; ?>");
$("#CanOrDelete").text("<?php echo $iterator2; ?>");

$("#OrdenMes").text("<?php echo $itemes; ?>");
$("#OrdenMesDelete").text("<?php echo $itemesbo; ?>");

$("#OrdenYear").text("<?php echo $iteyear; ?>");
$("#OrdenYearDelete").text("<?php echo $iteyearbo; ?>");

$("#CanTotalOrden").text("<?php echo $itetotal; ?>");
$("#CanTotalOrdenDelete").text("<?php echo $itetotalbo; ?>");

$(".IdOrdenUser").click(function(){
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
$(".SecondOptionUser").click(function(){
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
$(".OrdenBorradaUser").click(function(){
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
</script>
<style>
.IdOrdenUser:hover, .OrdenBorradaUser:hover{
	background-color: gainsboro;
	cursor: pointer;
}
.SecondOptionUser:hover{
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
	background-color: #FF8015;
	color: white;
}
.Ordenes thead th, .OrdenesBorradas thead th{
	padding: 7px;
}
</style>