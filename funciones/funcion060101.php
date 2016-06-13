<div id="AddTable" title="Notificación">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$SQL00 = "insert into data11(Estado) values('1')";
mysql_query($SQL00) or die("Error: ".mysql_error());
$SQL01 = "select * from data11 order by MesaNumero desc limit 1";
$SQL01 = mysql_query($SQL01);
$ROW = mysql_fetch_object($SQL01);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Registro de Mesa','Menú > Mesas > Ingreso de nueva mesa','$ip','¡Éxitoso!')";
mysql_query($LogSql);

?>
	¡Nueva mesa agregada!<br>
	Mesa #<?php echo $ROW->MesaNumero; ?>
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