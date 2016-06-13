<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$error=0;
$DataU01 = $_SESSION['idtbr'];
$DataId = $_POST["DataId"];
$Data00 = $_POST["Data00"];
$Data01 = $_POST["Data01"];

$DataSQL01 = "update data05 set NombreProducto='$Data00',Descripcion='$Data01' where id='$DataId'";
if(array_key_exists("Data02",$_POST)){
$Data02 = $_POST["Data02"];
$DataSQL01 = "update data05 set NombreProducto='$Data00',Descripcion='$Data01',TipoUnidad='$Data02' where id='$DataId'";
}

$DataSQL00 = "select NombreProducto from data05 where NombreProducto='$Data00' and id!='$DataId'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

if($DataROW00["NombreProducto"]==$Data00){
	$TypeError="producto ya registrado";
	$error=1;
}
else{
	
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
	$DataSQL02 = "select * from vista03 where id='$DataId'";
	$DataSQL02 = mysql_query($DataSQL02);
	$DataROW02 = mysql_fetch_array($DataSQL02);
	
	$Data03 = $DataROW02["id"];
	$Data04 = $DataROW02["NombreProducto"];
	$Data05 = $DataROW02["Descripcion"];
	$Data06 = $DataROW02["Medida"];
	
	$DataU01 = $_SESSION['idtbr'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
			   value('$DataU01','Editar producto','Inventario > Modificar > Producto: <b>$Data04</b>','$ip','¡Éxitoso!')";
	mysql_query($LogSql);

	echo '
		<div id="lks" title="Notificación">
			<br>
			<center>
				<img src="img/comp.png" width="5%"> <span style="color:green">¡Cambios guardados con éxito!</span>
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
