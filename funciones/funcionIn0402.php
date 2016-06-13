<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$id = $_POST["id"];
$SQL = "select * from data05 where id='$id'";
$SQL = mysql_query($SQL);
$ROW = mysql_fetch_object($SQL);

$DeleteSQL = "delete from data05 where id='$id'";
mysql_query($DeleteSQL);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Eliminación de producto','Inventario > Modificar > Producto: $ROW->NombreProducto','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<script>
$("#PRD<?php echo $id;?>").remove();
$("#AreaC").remove();
$("#AvisoMod").html("<div id='AlertaLo' title='Aviso' style='text-align:center'><span style='color:green'>Producto eliminado</span></div>");
$("#AlertaLo").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>