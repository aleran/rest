<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$data00ori = $_GET["data00"];
$data00 = date_create_from_format("d/m/Y",$data00ori);
$data00 = date_format($data00, 'Y-m-d');
$data00 = $data00." 00:00:00";

$data01ori = $_GET["data01"];
$data01 = date_create_from_format("d/m/Y",$data01ori);
$data01 = date_format($data01, 'Y-m-d');
$data01 = $data01." 23:59:59";

$DataSQL00 = "select * from vista08 where Fecha>='$data00' and Fecha<'$data01' order by Fecha desc";
$DataSQL00 = mysql_query($DataSQL00);
if($data01<$data00){
	echo "<span style='color:red'>Fecha final del rango mayor a Fecha de inicio del rango</span>";
}
?>
<h3>Rango de Registro</h3>
Desde (<?php echo $data00ori; ?>) => Hasta (<?php echo $data01ori; ?>)
<span id="MostrarRegistro"></span>
<table class="Registros">
<tr style="font-weight:bold;background-color:gainsboro" >
<td>Operador</td>
<td>Tipo de Registro</td>
</tr>
<?php
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<tr class='VerRegistros' data='$DataROW00[id]'><td>$DataROW00[PrimerNombre] $DataROW00[PrimerApellido]</td><td>$DataROW00[Registro]</td></tr>";
}
?>
</table>
<script>
$(".VerRegistros").click(function(){
	data = $(this).attr("data");
	$.ajax({
		type: "post",
		url: "funciones/funcionx030101.php",
		data: "data="+data,
		beforeSend:function(){
			$("#MostrarRegistros").html("Cargando...").fadeIn(30);
		},
		error:function(){
			$("#MostrarRegistros").html("Error...").delay(300).fadeOut(400);
		},
		success:function(data){
			$("#MostrarRegistros").html(data);
		}
	});
});
</script>