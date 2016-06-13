<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$name = $_POST["name"];

$NameMenuSQL = "INSERT INTO data17(NombreMenu,Estado,Activo) VALUES('$name','0','1')";
mysql_query($NameMenuSQL);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Registro de Menú','Administrador > Menú > Agregar Menú > Menú: $name','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<div id="AvisoName" title="¡Aviso!">
	<p style="color:green;text-align:center">Menú <b><?php echo $name; ?></b> agregado exitosamente...</p>
</div>
<script>
$("#AvisoName").dialog({
	modal:true,
	close:function(){
		$(this).remove();
		$("#IngresarNuevoMenu").remove();
		cargamenu();
	}
});
</script>