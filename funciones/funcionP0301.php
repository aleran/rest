<!-- <div class="cont-op"> -->
<h3>Últimos 15 registros</h3>
<span id="RegistroMostrar"></span>
<table class="RegistrosTable">
<tr style="font-weight:bold;background-color:gainsboro" >
<td>Tipo de Registro</td>
<td>Fecha</td>
</tr>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataU01 = $_SESSION['idtbr'];
$LogSQL = "select * from data06 where IdOperador='$DataU01' order by Fecha desc limit 0,15";
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