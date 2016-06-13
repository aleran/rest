<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
$DataSQL00 = "select * from vista08 where id='$data' ";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);
?>
<div id="ShowLog" title="<?php echo $DataROW00["Registro"]; ?>">
<b>Usuario:</b> <?php echo $DataROW00["PrimerNombre"]." ".$DataROW00["PrimerApellido"]; ?><br><br>
<b>Registro:</b><br> <?php echo $DataROW00["Módulo"]?><br><br>
<b>Fecha:</b> <?php echo funcion04($DataROW00["Fecha"])?><br>
<b>Ip:</b> <?php echo $DataROW00["IP"]?><br>
<b>Estado:</b> <?php echo $DataROW00["Estado"]?><br>
</div>
<script type="text/javascript">
$("#ShowLog").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
})
</script>