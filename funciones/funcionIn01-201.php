<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data = $_POST["Data"];
if(strlen($Data)!=0){
$DataSQL00 = "select * from vista03 where NombreProducto like '$Data%'";
$DataSQL00 = mysql_query($DataSQL00);
$i=0;
echo "<ul id='Pro'>";
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	$Existencia=$DataROW00["Existencia"]/1000;
	echo "<li class='ProB' data='$DataROW00[id]'>$DataROW00[NombreProducto] $Existencia ($DataROW00[Abreviatura])</li>";
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
.ProB{
	border:1px solid white;
	padding:3px;
	cursor:pointer;
}
.ProB:hover{
	border:1px solid silver;
	border-radius:5px;
	background: linear-gradient(white,silver);
}
.ProB:active{
	background: linear-gradient(silver,white);
}
.ProB:before{
content: "\00BB \0020";
}
#Pro{
list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
</style>
<script>
$(".ProB").click(function(){
	$.ajax({
		type: "POST",
		url: "funciones/funcionIn01.php",
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
