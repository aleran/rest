<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["IdPlato"];
$nombre = $_POST["Data05"];
$costo = $_POST["Data06"];
$id_menu = $_POST["DataMenu00"];
$Estado="0";
if(array_key_exists("DataActive", $_POST)){
	$Estado = "1";
}

$SQLsave = "update data12 set Nombre='$nombre', Costo='$costo', Estado='$Estado', id_menu='$id_menu' where id='$id'";
mysql_query($SQLsave);

$DataU01 = $_SESSION['idtbr'];
$ipe = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado, Tipo)
		   value('$DataU01','Editar plato o categoria','Menú > Editar > Plato o categoría: $nombre','$ipe','¡Exitóso!','0')";
$LogSql = mysql_query($LogSql);
?>
<div id="AvisoChange" title="Aviso">¡Cambios guardados!</div>
<script>
$("#AddPlt").remove();
$(".pt<?php echo $id; ?>").text("<?php echo $nombre; ?>");
$("#AvisoChange").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>