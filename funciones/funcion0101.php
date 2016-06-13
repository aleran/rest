<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL01 = "select * from vista05 where EstadoActual='3' or EstadoActual='2'";
$DataSQL01 = mysql_query($DataSQL01);
echo '<ul class="menu-del-dia">';
$iterarRe = 0;
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	echo "<li data='$DataROW01[Mesa]'>Mesa: $DataROW01[Mesa] - Número de Orden: $DataROW01[IdOrden]";
	$iterarRe++;
}
echo "</ul>";
if($iterarRe==0){
	echo "<center><b>¡No hay pedidos!</b></center>";
}
?>

<script type="text/javascript">
$(".menu-del-dia li").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion010101.php",
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