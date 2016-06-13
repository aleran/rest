<div id="AddTable" title="Notificación">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$StatusTable = $_POST["StatusTable"];
$TableEdit = $_POST["TableEdit"];
$SQL00 = "update data11 set Estado='$StatusTable' where MesaNumero='$TableEdit'";
mysql_query($SQL00) or die("Error: ".mysql_error());
$SQL01 = "select * from data11 where MesaNumero='$TableEdit' order by MesaNumero desc limit 1";
$SQL01 = mysql_query($SQL01);
$ROW = mysql_fetch_object($SQL01);
if($ROW->Estado==0){
	$estado = "inactivo";
}
if($ROW->Estado==1){
	$estado = "activo";
}

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Edición de Mesa','Menú > Mesas > Mesa <b>#$TableEdit</b> a <b>\"$estado\"</b>','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
	Cambios guardados <br>
	Mesa #<?php echo $ROW->MesaNumero; ?> editada.<br>
	Estado: <?php echo $estado; ?>
</div>
<script>
$("#NewTable").remove();
$("#AddTable").dialog({
	modal:true,
	buttons:{
		Ok:function(){
			$(this).dialog("close");
		}
	},
	close:function(){
		$(this).remove();
	}
}).css({textAlign:"center"});
</script>