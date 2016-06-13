<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$DataSQL01 = "select * from data03 where id!='1'";
$DataSQL01 = mysql_query($DataSQL01);
echo "<table class='table-rol'>
	<tr style='font-weight:bold;background-color:silver'><td>Rol</td></tr>
";
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	$DataSQL02 = "select * from vista00 where IdRol='$DataROW01[id]'";
	$DataSQL02 = mysql_query($DataSQL02);
	$trb = 0;
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		$trb++;
	}
	echo "<tr style='cursor:pointer' id='$DataROW01[id]' class='VerRol'><td>$DataROW01[NombreRol]</td></tr>";
}
echo "</table>";
?>
<div id='UserShowMod'></div>
<script>
$(".VerRol").click(function(){
	dataString = "id="+ $(this).attr("id");
	$.ajax({
		type: "POST",
		url: "funciones/funcionB020202.php",
		data: dataString,
		beforeSend: function(){
			$("#UserShowMod").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
		},
		success: function(data){
			$('#UserShowMod').html(data);
		}
	});
});
</script>
