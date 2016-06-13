<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data = $_POST["Data"];
if(strlen($Data)!=0){
$Data = "lt".$Data;
$DataSQL01 = "select * from vista04 where Lote like '$Data%'";
$DataSQL01 = mysql_query($DataSQL01);
$i=0;
echo "<ul id='Lot'>";
while($DataROW01 = mysql_fetch_array($DataSQL01)){
	echo "<li class='LotB' data='$DataROW01[Lote]'>$DataROW01[Lote] ($DataROW01[NombreProducto])</li>";
	$i++;
}
echo "</ul>";
if($i==0){
	echo "<center><span class='adver'>¡No hay resultados!</span></center>";
}
}
else "<center><span class='adver'>¡No hay resultados!</span></center>";
?>
<style>
.adver{
color:red;
font-weight:bold;
}
.LotB{
	border:1px solid white;
	padding:3px;
	cursor:pointer;
}
.LotB:hover{
	border:1px solid silver;
	border-radius:5px;
	background: linear-gradient(white,silver);
}
.LotB:active{
	background: linear-gradient(silver,white);
}
.LotB:before{
content: "\00BB \0020";
}
#Lot{
list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
</style>
<script>
$(".LotB").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn01-0201B.php",
		data: "data="+$(this).attr("data"),
		beforeSend:function(){
			$("#ProductoCarga").html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
		},
		error:function(){
			$("#ProductoCarga").html("<div class='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$(".ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			$("#Pestañas").dialog("close");
			$("#ProductoCarga").html(data);
		}
	});
});
</script>
