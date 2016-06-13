<ul class="MostrarSub">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL00 = "select * from data10 where Estado='1'";
$DataSQL00 = mysql_query($DataSQL00);
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<li data='$DataROW00[id]'>$DataROW00[Nombre]</li>";
}
?>
</ul>
<script>
$(".MostrarSub li").click(function(){
	DataString = "Data="+$(this).attr("data");
	$.ajax({
		type:"POST",
		url: "funciones/funcion020104020103.php",
		data: DataString,
		beforeSend:function(){
			$("#OrMenuPrincipal").html("<br>Cargando...");
		},
		error:function(){
			$("#OrMenuPrincipal").html("<br><b>Error de carga, no se pudo conectar al servidor...</b>");
		},
		success:function(data){
			$("#OrMenuPrincipal").html(data);
			$(".Effect").toggle(300);
		}
	});
});
</script>