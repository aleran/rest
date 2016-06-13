<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataU01 = $_SESSION['idtbr'];

$data00ori = $_GET["data00"];
$data00 = date_create_from_format("d/m/Y",$data00ori);
$data00 = date_format($data00, 'Y-m-d');
$data00 = $data00." 00:00:00";

$data01ori = $_GET["data01"];
$data01 = date_create_from_format("d/m/Y",$data01ori);
$data01 = date_format($data01, 'Y-m-d');
$data01 = $data01." 23:59:59";

$SQL01 = "select * from data13 where UsuarioOrdena='$DataU01' and FechaDePedido>='$data00' and FechaDePedido<'$data01'";
$SQL02 = "select * from data16 where UsuarioOrdena='$DataU01' and FechaDePedido>='$data00' and FechaDePedido<'$data01'";
$SQL01 = mysql_query($SQL01);
$SQL02 = mysql_query($SQL02);
?><br>
Desde (<?php echo $data00ori; ?>) => Hasta (<?php echo $data01ori; ?>)
<br><table class="Ordenes">
	<thead>
		<tr>
			<th>Número de orden</th>
			<th>Mesa</th>
			<th>Fecha de la orden</th>
		</tr>
	</thead>
<?php
$iterator=0;
while($ROW01 = mysql_fetch_object($SQL01)){
	$fechai = date_create_from_format("Y-m-d H:i:s",$ROW01->FechaDePedido);
	$fecha = date_format($fechai, 'd/m/Y h:i a');
	$fechat = date_format($fechai, 'Y-m-d');
	if ($fechat==date("Y-m-d")) {
		$class = "SecondOptionS";
	}
	else{
		$class = "IdOrdenS";
	}
	echo "<tr class='$class' data='$ROW01->IdOrden'>";
	echo "<td>$ROW01->IdOrden</td>";
	echo "<td>$ROW01->Mesa</td>";
	echo "<td>$fecha</td>";
	echo "</tr>";
	$iterator++;
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
while($ROW02 = mysql_fetch_object($SQL02)):
	$iterator2++;
	$fechaib = date_create_from_format("Y-m-d H:i:s",$ROW02->FechaDePedido);
	$fechab = date_format($fechaib, 'd/m/Y h:i a');
	$fechatb = date_format($fechaib, 'Y-m-d');
?>
<tr class="OrdenBorradaUsers" data="<?php echo $ROW02->IdOrden;?>">
	<td><?php echo $ROW02->IdOrden; ?></td>
	<td><?php echo $ROW02->Mesa; ?></td>
	<td><?php echo $fechab; ?></td>
</tr>
<?php
endwhile;
if ($iterator2==0) {
	echo "<tr><td colspan='3'>¡No hay resultados!</td></tr>";
}
?>
</table>
<br>
<script>
$(".IdOrdenS").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion050101.php",
		data: DataString,
		beforeSend:function(){
			$(".ShowOrden").html("Cargando...");
		},
		error:function(){
			$(".ShowOrden").html("Error de conexion...");
		},
		success:function(data){
			$(".ShowOrden").html(data);
		}
	});
});
$(".SecondOptionS").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion050101.php",
		data: DataString,
		beforeSend:function(){
			$(".ShowOrden").html("Cargando...");
		},
		error:function(){
			$(".ShowOrden").html("Error de conexion...");
		},
		success:function(data){
			$(".ShowOrden").html(data);
		}
	});
});
$(".OrdenBorradaUsers").click(function(){
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
.IdOrdenS:hover, .OrdenBorradaUsers:hover{
	background-color: gainsboro;
	cursor: pointer;
}
.SecondOptionS:hover{
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