<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
mysql_query("delete from data02 where CodigoTbr='$data'");

$idtbr = $_SESSION['idtbr'];
$registro = "Usuario ".$_POST["name"]." borrado";
$modulo = "Administrador > Usuario > Modificar Usuario";
$ip = $_SERVER["REMOTE_ADDR"];
$Estado = "¡Éxitoso!";
$logSQL = "INSERT INTO data06(IdOperador, Registro, IdDatoUsuario, Módulo, IP, Estado) VALUES('$idtbr','$registro','$data','$modulo','$ip','$Estado')";
mysql_query($logSQL);
?>
<div id="AvisoBorrado" title="Aviso">
Usuario <b><?php echo $_POST["name"]; ?></b> borrado
</div>
<script type="text/javascript">
usersMod(paginaMod);
$("#AvisoBorrado").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
})
</script>