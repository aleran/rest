<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["id"];
$name = $_POST["name"];
$sql01 = "SELECT * FROM data17 WHERE id='$id' ";
$sql01 = mysql_query($sql01);
$row01 = mysql_fetch_object($sql01);

$sql02 = "UPDATE data17 SET NombreMenu='$name' WHERE id='$id' ";
mysql_query($sql02);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Editar Menú','Administrador > Menú > Editar menú > menú:<br> De: <b>$row01->NombreMenu</b><br> A: <b>$name</b>','$ip','¡Éxitoso!')";
mysql_query($LogSql);

?>
<div id="SaveResult" title="¡Aviso!">
<p class="AvisoSv">
¡Cambios guardados! <br>
De: <b><?php echo $row01->NombreMenu; ?></b><br> A: <b><?php echo $name; ?></b>
</p>
</div>
<style>
.AvisoSv{
	color: green;
	text-align: center;
}
</style>
<script>
$("#name<?php echo $id; ?>").html("<?php echo $name; ?>");
SaveResult = $("#SaveResult");
SaveResult.dialog({
	modal:true,
	close:function(){
		$(this).remove();
		$("#EditarMenus").remove();
	}
});
</script>