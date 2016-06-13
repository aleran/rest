<!-- <div class="cont-op"> -->
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
?>

<h3>Rango de Registro</h3>
Desde (<?php echo $data00ori; ?>) => Hasta (<?php echo $data01ori; ?>)
<span id="RegistroMostrar"></span>
<table class="RegistrosTable">
<tr style="font-weight:bold;background-color:gainsboro" >
<td>Tipo de Registro</td>
<td>Fecha</td>
</tr>

<?php

$DataU01 = $_SESSION['idtbr'];
$LogSQL = "select * from data06 where IdOperador='$DataU01' and Fecha>='$data00' and Fecha<'$data01' order by Fecha desc";
$LogSQL = mysql_query($LogSQL);
while ($LogROW = mysql_fetch_object($LogSQL)) {
	echo "<tr class='RegistroVer' data='$LogROW->id'><td>$LogROW->Registro</td><td>".funcion04($LogROW->Fecha)."</td></tr>";
}
?>
</table>
<br>
<!-- </div> -->
<style>
.RegistrosTable{
	font-size: 75%;
	border: 1px solid silver;
	border-radius: 5px;
	cursor: default;
	margin:0 auto;
}
.RegistrosTable td{
	border: 1px solid silver;
	text-align: center;
	padding: 3px;
}
.RegistrosTable tr:hover{
background-color: silver;
}
</style>
<script>
$(".RegistroVer").click(function(){
	data = $(this).attr("data");
	$.ajax({
		type: "post",
		url: "funciones/funcionx030101.php",
		data: "data="+data,
		beforeSend:function(){
			$("#RegistroMostrar").html("Cargando...").fadeIn(30);
		},
		error:function(){
			$("#RegistroMostrar").html("Error...").delay(300).fadeOut(400);
		},
		success:function(data){
			$("#RegistroMostrar").html(data);
		}
	});
});
</script>