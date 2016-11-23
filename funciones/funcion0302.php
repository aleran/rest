<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data00 = $_POST["Data00"];
$DataSub00 = $_POST["Data00"];
$id_menu = $_POST["DataMenu00"];
$Cache = $Data00;
	$DataSQL01 = "select id from data12 where id like '$Data00%' and id!='$Data00' ORDER BY id DESC";
	$DataSQL01 = mysql_query($DataSQL01);
	$ident=0;
	while($DataROW01 = mysql_fetch_array($DataSQL01) and $ident==0){
		$Data00 = $DataROW01["id"];
		$Data00++;
		$ident++;
	}
	if($ident==0){
		$Data00 = $Data00."01";
	}

$Data05 = $_POST["Data05"];
$Data06 = $_POST["Data06"];
$Data01 = 1;
if(array_key_exists("Data01", $_POST)){
	$Data01=2;
}
$Data03 = 1;
if(array_key_exists("Data03", $_POST)){
	$Data03=0;
}
$Data04 = 0;
if(array_key_exists("Data04", $_POST)){
	$Data04=1;
}
if(array_key_exists("Data02", $_POST)){
	$DataS00 = $_POST["Data02"];
	$DataSub00 = $_POST["Data02"];
	$CacheS0 = $DataS00;
	$DataSQL00 = "select id from data12 where id like '$DataS00%' and id!='$DataS00' ORDER BY id DESC";
	$DataSQL00 = mysql_query($DataSQL00);
	$ident=0;
	while($DataROW00 = mysql_fetch_array($DataSQL00) and $ident==0){
		$Data00 = $DataROW00["id"];
		$Data00++;
		$ident++;
	}
	if($ident==0){
		$Data00 = $DataS00."01";
	}
}
if (array_key_exists("Data04", $_POST)) {
	$Data00 = $_POST["Data00"];
	$Cache = $Data00;
	$DataSQL01 = "select id from data12 where id like '$Data00%' and id!='$Data00' ORDER BY id DESC";
	$DataSQL01 = mysql_query($DataSQL01);
	$ident=0;
	while($DataROW01 = mysql_fetch_array($DataSQL01) and $ident==0){
		$DataCl00 = $DataROW01["id"];
		if(strlen($DataCl00)==6){
			$Data00 = $DataROW01["id"];
			$Data00++;
			$ident++;
		}
	}
	if($ident==0){
		$Data00 = $Data00."01";
	}
}
// echo $_POST["Data04"]."-".$_POST["Data00"]."-".$Data00;
$DataSQL02 = "insert into data12(sub_id,Nombre,Nivel,Subniveles,Estado,Platillo,Costo,id_menu) value('$DataSub00','$Data05','$Data01','$Data04','1','$Data03','$Data06','$id_menu')";
mysql_query($DataSQL02) or die ("Error: ".mysql_error());

$DataU01 = $_SESSION['idtbr'];
$ipe = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado, Tipo)
		   value('$DataU01','Agregar nuevo plato o categoria','Menú > Añadir > Plato o categoría: $Data05','$ipe','¡Exitóso!','0')";
$LogSql = mysql_query($LogSql);
?>
<div class="NotiAvi" title="Notificación">
<center><img src="img/comp.png" width="5%"> ¡Plato agregado con éxito!</center><br>
<?php
$DataMenu = "select * from data10 where id='$Cache'";
$DataMenu = mysql_query($DataMenu);
$DataMenuROW = mysql_fetch_array($DataMenu);
echo "<b>Menu:</b> ".$DataMenuROW["Nombre"]."<br><br>";

if(array_key_exists("Data02", $_POST)){
$DataCategoria = "select * from data12 where id='$CacheS0'";
$DataCategoria = mysql_query($DataCategoria);
$DataCategoriaROW = mysql_fetch_array($DataCategoria);
echo "&nbsp;&nbsp;&nbsp;<b>Categoria:</b> ".$DataCategoriaROW["Nombre"]."<br><br>";
}

$DataPlato = "select * from data12 where id='$Data00'";
$DataPlato = mysql_query($DataPlato);
$DataPlatoROW = mysql_fetch_array($DataPlato);

if($DataPlatoROW["Subniveles"]==1) $PlatoCategoria="<b>Categoría:</b> ";
if($DataPlatoROW["Subniveles"]==0) $PlatoCategoria="<b>Plato:</b> ";

$partede="";
if($DataPlatoROW["Subniveles"]==0){
if($DataPlatoROW["Platillo"]==1) $partede="<b>Plato</b>";
if($DataPlatoROW["Platillo"]==0) $partede="<b>Parte de un plato</b>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$PlatoCategoria".$DataPlatoROW["Nombre"]."<br>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$partede<br>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Costo:</b> ".$DataPlatoROW["Costo"]
	  ;
?>
</div>
<script>
$(".NotiAvi").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
})
</script>