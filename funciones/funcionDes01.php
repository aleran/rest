<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL01 = "select * from vista05 where EstadoActual='4'";
$DataSQL01 = mysql_query($DataSQL01);
echo '<ul class="menu-del-dia-caja">';
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	echo "<li data='$DataROW01[Mesa]'>Mesa: $DataROW01[Mesa] - Número de Orden: $DataROW01[IdOrden]";
}
echo "</ul>";
?>

<script type="text/javascript">
$(".menu-del-dia-caja li").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcionDes02.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheckCaja").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheckCaja").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheckCaja").html(data);
		}
	});
});
</script>