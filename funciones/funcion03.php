<div class="cont-op">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$datasql = "select * from data12 order by Ingreso desc limit 0, 10";
$datasql = mysql_query($datasql);
?>

<center><button id="ButtonAdd">Nuevo Plato o Categoría</button></center>
<div id="AddPlatillo"></div>
<div id="AddCarga"></div>
<p><b>Últimos 10 platos ingresados</b></p>
<ul class="ultimos10">
<?php
while ($datarow = mysql_fetch_array($datasql)){
	echo "<li>$datarow[Nombre]</li>";
}
?>
</ul>
</div>
<script>
$("#ButtonAdd").button().click(function(){
	$.ajax({
		url:"funciones/funcion0301.php",
		beforeSend:function(){
			$("#AddPlatillo").html("Cargando...");
		},
		error:function(){
			$("#AddPlatillo").html("Error de conexión...");
		},
		success:function(data){
			$("#AddPlatillo").html(data);
		}
	});
});
</script>
<style>
.cont-op{
	/*height: 100%;*/
	/*max-height: 380px;*/
	/*overflow: auto;*/
}
.ultimos10{
list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.ultimos10 li:before{
content: "\00BB \0020";
}
.ultimos10 li{
	border:1px solid silver;
	border-radius:5px;
	padding:4px;
	color:#FF841B;
	font-weight:bold;
	cursor:pointer;
	margin: 2px 5px 2px -15px;
}
.ultimos10 li:hover{
	color:black;
	border-color: black;
	box-shadow: 2px 2px 2px silver;
}
</style>