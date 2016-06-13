<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["IdPlato"];
$nombre = $_POST["Data05"];

$SQLsave = "delete from data12 where id='$id'";
mysql_query($SQLsave);

$DataU01 = $_SESSION['idtbr'];
$ipe = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado, Tipo)
		   value('$DataU01','Borrar plato o categoria','Menú > Borrar > Plato o categoría: $nombre','$ipe','¡Exitóso!','0')";
$LogSql = mysql_query($LogSql);
?>
<div id="AvisoChange" title="Aviso">¡Plato o categoria <?php echo $nombre; ?> borrado!</div>
<script>
$("#AddPlt").remove();
$(".pt<?php echo $id; ?>").remove();
$("#AvisoChange").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>