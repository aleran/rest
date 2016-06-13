<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$error=0;
$DataU01 = $_SESSION['idtbr'];
$Data00 = $_POST["Data00"];
$Data01 = $_POST["Data01"];
$Data02 = $_POST["Data02"];

$DataSQL00 = "select NombreProducto from data05 where NombreProducto='$Data00'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

if($DataROW00["NombreProducto"]==$Data00){
	$TypeError="producto ya registrado";
	$error=1;
}
else{
	$DataSQL01 = "insert into data05(NombreProducto,Descripcion,TipoUnidad,Estado) value('$Data00','$Data01','$Data02','1')";
	$DataSQL01 = mysql_query($DataSQL01);

	$ErrorQuery = mysql_errno();

	if($ErrorQuery!=0){
		$error=1;
		$ip = $_SERVER["REMOTE_ADDR"];
		$TypeError="en la consulta, número de error: $ErrorQuery";
		$LogErrorSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
					    value('$DataU01','Ingreso de Producto','Inventario > Ingresar Producto','$ip','Error $TypeError')";
		$LogErrorSql = mysql_query($LogErrorSql);
	}
}
if($error==0){
	$DataU01 = $_SESSION['idtbr'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
			   value('$DataU01','Ingresar producto','Inventario > Ingresar Producto > Producto: $Data00','$ip','¡Éxitoso!')";
	mysql_query($LogSql);
	$DataSQL02 = "select * from vista03 order by id desc";
	$DataSQL02 = mysql_query($DataSQL02);
	$i=0;
	while($DataROW02 = mysql_fetch_array($DataSQL02) and $i<=0){
		$Data03 = $DataROW02["id"];
		$Data04 = $DataROW02["NombreProducto"];
		$Data05 = $DataROW02["Descripcion"];
		$Data06 = $DataROW02["Medida"];
		$i++;
	}
	echo '
		<div id="lks" title="Notificación">
			<br>
			<center>
				<img src="img/comp.png" width="5%"> <span style="color:green">¡Ingresado con éxito!</span>
			</center><br>
			<b>Nombre del producto: </b> '.$Data04.'<br>
			<b>Descripción del producto: </b> '.$Data05.'<br>
			<b>Tipo de medida: </b> '.$Data06.'<br><br>
		</div>
		<script>
		$("#lks").dialog({
			modal:true
			});
		</script>';
}
else{
	echo '
		<div id="Errors" title="Error">
			<br>
			<center>
				<img src="img/neg.png" width="5%"> <span style="color:red">¡Error '.$TypeError.'!</span>
			</center>
		</div>
		<script>
		$("#Errors").dialog({
			modal:true
			});
		</script>';
}
?>
