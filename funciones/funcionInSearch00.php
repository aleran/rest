<div id="MostrarLogsQs"></div>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$data00ori = $_POST["data01"];
$data00 = date_create_from_format("d/m/Y",$data00ori);
$data00 = date_format($data00, 'Y-m-d');
$data00 = $data00." 00:00:00";

$data01ori = $_POST["data02"];
$data01 = date_create_from_format("d/m/Y",$data01ori);
$data01 = date_format($data01, 'Y-m-d');
$data01 = $data01." 23:59:59";

$DataSQL00 = "select * from vista11 where FechaRegistro>='$data00' and FechaRegistro<'$data01' order by FechaRegistro asc";
$DataSQL00 = mysql_query($DataSQL00);
if($data01<$data00){
	echo "<span style='color:red'>Fecha final del rango mayor a Fecha de inicio del rango</span>";
}
?>
<h3>Rango de Registro</h3>
Desde (<?php echo $data00ori; ?>) => Hasta (<?php echo $data01ori; ?>)
<span id="MostrarLogsQ"></span>
<table class="Registros">
<tr style="font-weight:bold;background-color:gainsboro" >
<td>Registro</td>
<td>Fecha</td>
<td>Cantidad</td>
</tr>
<?php
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<tr class='VerRegistrosPro' data='$DataROW00[id]'><td> $DataROW00[NombreProducto]</td><td>".funcion04($DataROW00["FechaRegistro"])."</td><td>$DataROW00[Cantidad] $DataROW00[Tipo]</td></tr>";
}
?>
</table>
<script>
$(".VerRegistrosPro").click(function(){
	dataid = $(this).attr("data");
	$.ajax({
		type: "post",
		url: "funciones/funcionInSearch01.php",
		data: "data="+dataid,
		beforeSend:function(){
			$("#MostrarLogsQs").html("Cargando...").fadeIn(30);
		},
		error:function(){
			$("#MostrarLogsQs").html("Error...").delay(300).fadeOut(400);
		},
		success:function(sql){
			$("#MostrarLogsQs").html(sql);
		}
	});
});
</script>