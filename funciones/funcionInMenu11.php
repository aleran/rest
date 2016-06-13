<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["id"];

$my_menuSQL = "SELECT * FROM data17 WHERE id='$id'";
$my_menuSQL = mysql_query($my_menuSQL);
$my_menuROW = mysql_fetch_object($my_menuSQL);
$name = $my_menuROW->NombreMenu;

$delete = "DELETE FROM data17 WHERE id='$id'";
$m_borrado = mysql_query($delete);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Borrar menú','Administrador > Menú > Borrar menú > Menú: <b>$name</b>','$ip','¡Éxitoso!')";
mysql_query($LogSql);
if($m_borrado):
?>
<div id="AvisoBorrado" title="¡Aviso!">
	¡Menú <b><?php echo $name; ?></b> borrado.!
</div>
<script>
$("#AvisoBorrado").dialog({
	modal:true,
	close:function(){
		cargamenu();
		$(this).remove();
	}
});
</script>
<?php endif; ?>