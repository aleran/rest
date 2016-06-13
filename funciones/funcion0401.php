<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
$SQLdata = "select * from data12 where Nombre LIKE '%$data%'";
$iterar=0;
$SQLdata = mysql_query($SQLdata);
echo "<ul class='modific'>";
while ($ROWdata00 = mysql_fetch_object($SQLdata)) {
	echo "<li class='pt$ROWdata00->id' data='$ROWdata00->id'>".$ROWdata00->Nombre."</li>";
	$iterar++;
}
echo "</ul>";
if($iterar==0){
	echo "No hay resultados";
}
?>
<script>
$(".modific li").click(function(){
	$.ajax({
		type:"post",
		url:"funciones/funcion040101.php",
		data:{data:$(this).attr("data")},
		beforeSend:function(){
			$("#ModCarga").html("Cargando...");
		},
		error:function(){
			$("#ModCarga").html("Error no se pudo cargar la petición...");
		},
		success:function(data){
			$("#ModCarga").html(data);
		}
	});
});
</script>