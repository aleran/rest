<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$namemenuSQL = "SELECT * FROM data17 WHERE Estado='1'";
$namemenuSQL = mysql_query($namemenuSQL);
$namemenuROW = mysql_fetch_object($namemenuSQL);

$id_menu_a = $namemenuROW->id;
$DataSQL00 = "select * from data12 where sub_id='$_POST[Data01]' and Nivel='2' and Estado='1' and id_menu='$id_menu_a'";
$DDataSQL01 = "select * from data12 where sub_id='$_POST[Data01]' and Nivel='2' and Estado='1' and id_menu='0'";
$DataSQL00 = mysql_query($DataSQL00);
$DDataSQL01 = mysql_query($DDataSQL01);
echo "<b>".$_POST["Data02"]."</b><span id='close'>X</span><ul class='SubOpcionesDeMenu'>";
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	$parte="$DataROW00[Costo]";
	if($DataROW00["Platillo"]==0){
		$parte.=" Pieza";
	}
	echo "<li data01='$DataROW00[id]'
			  data02='$DataROW00[Nombre]'
	          data03='$DataROW00[Subniveles]'
	          data04='$DataROW00[Platillo]'
	          data05='$_POST[Data02]'
	          >$DataROW00[Nombre] ($parte)</li>";
}
while($DDataROW01 = mysql_fetch_array($DDataSQL01)){
	$parte="$DDataROW01[Costo]";
	if($DDataROW01["Platillo"]==0){
		$parte.=" Pieza";
	}
	echo "<li data01='$DDataROW01[id]'
			  data02='$DDataROW01[Nombre]'
	          data03='$DDataROW01[Subniveles]'
	          data04='$DDataROW01[Platillo]'
	          data05='$_POST[Data02]'
	          >$DDataROW01[Nombre] ($parte)</li>";
}
echo "</ul>
<script>
DataSublevel = '$_POST[Data02]';
</script>
";
?>
<style>
#close{
position: absolute;
top:0;
right: 0;
color: white;
cursor: pointer;
border:2px solid gainsboro;
background-color:red;
padding-left: 4px;
padding-right: 4px;
border-radius: 2px;
}
#close:hover{
	color:white;
	background-color: #c00;
	border-color: #0279C0;
}
.SubOpcionesDeMenu{
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
max-height: 150px;
overflow: auto;
}
.SubOpcionesDeMenu li:before{
content: "\00BB \0020";
}
.SubOpcionesDeMenu li{
list-style: none;
border:1px solid silver;
border-radius:5px;
background:linear-gradient(white,#f0f0f0);
padding:4px;
color:#004276;
font-weight:bold;
cursor:pointer;
margin: 5px 5px 5px -15px;
}
.SubOpcionesDeMenu li:hover{
background:linear-gradient(#f0f0f0,white);
color:black;
}
</style>
<script>
$(".SubOpcionesDeMenu li").click(function(){
	if($(this).attr("data03")==0){
		if($(this).attr("data04")==0){
				VsumaPers++;
				$(perso).before( "<div class='hospan' id='PedPerson"+$(this).attr("data01")+"'><input type='hidden' name='PedidoPerso-"+namesub+"-"+VsumaPers+"' value='"+$(this).attr("data01")+"'>["+DataSublevel+"] " + $(this).attr("data02")+" &nbsp;<span onclick='CloseOrden( \"PedPerson"+$(this).attr("data01")+"\" );' class='this-close'>X</span></div>");
				$("#NumeroPedidosPers").val(VsumaPers);
		}
		if($(this).attr("data04")==1){
			NewData = $("#"+Datas01Sub);
			if(NewData.length > 0){
			}
			else {
				$("#DataId").before("<div id='"+Datas01Sub+"' class='PrincipalOrden'><span onclick='CloseOrden( \""+Datas01Sub+"\" );' class='this-close type-orden'>X</span><span onclick='OcConten(\"#"+Datas01Sub+"\")' class='head-pedido'> "+ Datas01SubNombre +" </span><hr><div class='UpDown'><span class='"+ Datas01Sub +"'></span></div></div>");
			}
			if($("#Ped"+$(this).attr("data01")).length > 0) {
				valorsuma = $(".put"+$(this).attr("data01")).val();
				valorsuma++;
				$("#put"+$(this).attr("data01")).html('['+valorsuma+']');
				$(".put"+$(this).attr("data01")).val(valorsuma);
			}
			else{
				Vsuma++;
				$("." + Datas01Sub).before( "<div class='hospan' id='Ped"+$(this).attr("data01")+"'><input type='hidden' name='Pedido"+Vsuma+"' value='"+$(this).attr("data01")+"'><input type='hidden' class='put"+$(this).attr("data01")+"' name='Cant"+Vsuma+"' id='Cant"+Vsuma+"' value='1' />["+DataSublevel+"] <span id='put"+$(this).attr("data01")+"'>[1]</span> " + $(this).attr("data02")+" &nbsp;<span onclick='CloseOrden( \"Ped"+$(this).attr("data01")+"\" );' class='this-close'>X</span></div>");
				$("#NumeroPedidos").val(Vsuma);
			}
		}
	}
	count++;
});
$("#close").click(function(){
	$("#SubNivel").toggle(300);
})
</script>
