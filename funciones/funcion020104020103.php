<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL00 = "select * from data10 where id='$_POST[Data]'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);
?>
<div class="Effect">
	<hr>
	<div>
		<div style='float:left;height:100%;width:6%'><img src="img/back.png" class="BackMenu" width="100%" /></div>
		&nbsp;&nbsp;&nbsp;
		<div style='float:left;height:50%;padding-left:2%;padding-top:1.5%'><b style='font-size:140%'><?php echo $DataROW00["Nombre"];?></b></div>
	<?php
		echo "
		<script>
			var Datas01Sub = '".$DataROW00["id"]."';
			var Datas01SubNombre = '".$DataROW00["Nombre"]."';
		</script>
		";
	?>
	</div><br>
	<ul class="OpcionesDeMenu">
	<?php
		$Data00 = $_POST["Data"];
		$DataSQL01 = "select * from data12 where id like '$Data00%' and Nivel='1' and Estado='1'";
		$DataSQL01 = mysql_query($DataSQL01);
		while($DataROW01 = mysql_fetch_array($DataSQL01)){
			$AddId="";
			$Cate="$DataROW01[Costo] Bs.";
			if($DataROW01["Subniveles"]==1){
				$AddId="id='categorias'";
				$Cate="Categoria";
			}
			echo "<li $AddId data01='$DataROW01[id]' data02='$DataROW01[Nombre]' data03='$DataROW01[Subniveles]' data04='$DataROW00[Nombre]'>$DataROW01[Nombre] ($Cate)</li>";
		}
	?>
	</ul>
</div>
<div id="SubNivel"></div>
<script src="js/funcion02010102.js"></script>
<style>
#SubNivel{
padding:3px;
position:absolute;
top:43%;
left:20%;
display:none;
border:1px solid silver;
border-radius:1px;
box-shadow: 3px 3px 3px black;
background-color:white;
width: 500px;
}
.Effect{
display:none;
}
.BackMenu{
margin-top:5px;
border:2px solid #dbdbdb;
border-radius:50px;
cursor:pointer;
}
.BackMenu:hover{
border:2px solid #0279C0;
background:linear-gradient(white,silver);
}
.OpcionesDeMenu{
width:80%;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.OpcionesDeMenu li:before{
content: "\00BB \0020";
}
.OpcionesDeMenu li{
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
.OpcionesDeMenu li:hover{
background:linear-gradient(#f0f0f0,white);
color:black;
}
#categorias{
border:1px solid silver;
color:white;
background: linear-gradient(#008DDF,#0279C0);
}
</style>
