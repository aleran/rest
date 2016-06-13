<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$DataSQL01 = "select * from data03 where Estado='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<table class='table-rol'>
	<tr style='font-weight:bold;background-color:silver'><td>Rol</td><td>Número de Usuarios</td></tr>
";
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	$DataSQL02 = "select * from vista00 where IdRol='$DataROW01[id]'";
	$DataSQL02 = mysql_query($DataSQL02);
	$trb = 0;
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		$trb++;
	}
	echo "<tr style='cursor:pointer' id='$DataROW01[id]' class='VerRol'><td>$DataROW01[NombreRol]</td><td>$trb</td></tr>";
}
echo "</table>";
?>
<div id='UserShow'></div>
<script>
$(".VerRol").click(function(){
	dataString = "id="+ $(this).attr("id");
	$.ajax({
		type: "POST",
		url: "funciones/funcionB010201.php",
		data: dataString,
		beforeSend: function(){
			$("#UserShow").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
		},
		success: function(data){
			$('#UserShow').html(data);
		}
	});
});
</script>
