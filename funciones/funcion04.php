<div class="cont-op">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$datasql = "select * from data12 order by Actualizado desc limit 0, 10";
$datasql = mysql_query($datasql);
?>
<input type="text" class="iNext ui-corner-all searchli" id="ModPlato"/>
<div id="ModPlatillo"></div>
<div id="ModCarga"></div>
<p><b>Últimos 10 platos actualizados</b></p>
<ul class="ultimos10mod">
<?php
while ($datarow = mysql_fetch_array($datasql)){
	echo "<li class='pt$datarow[id]' data='$datarow[id]'>$datarow[Nombre]</li>";
}
?>
</ul>
<script>
$("#ModPlato").keyup(function(){
	if($(this).val().length!=0){
	$.ajax({
		type:"post",
		url:"funciones/funcion0401.php",
		data:{data:$(this).val()},
		beforeSend:function(){
			$("#ModPlatillo").html("Cargando...");
		},
		error:function(){
			$("#ModPlatillo").html("Error de conexión...");
		},
		success:function(data){
			$("#ModPlatillo").html(data);
		}
	});
	}
	else{
		$("#ModPlatillo").html("<br>No hay resultados");
	}
});
$(".ultimos10mod li").click(function(){
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
<style>
.ultimos10mod, .modific{
list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.ultimos10mod li:before{
content: "\00BB \0020";
}
.modific li:before{
content: "\00BB \0020";
}
.ultimos10mod li,.modific li{
	border:1px solid silver;
	border-radius:5px;
	padding:4px;
	color:#FF841B;
	font-weight:bold;
	cursor:pointer;
	margin: 2px 5px 2px -15px;
}
.ultimos10mod li:hover, .modific li:hover{
	color:black;
	border-color: black;
	box-shadow: 2px 2px 2px silver;
}
.searchli{
	padding: 5px;
	width: 360px;
}
</style>
</div>