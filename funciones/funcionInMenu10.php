<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["id"];
$name = $_POST["name"];
$id_menu = $_POST["id_menu"];
$activo = $_POST["activo"];

$CategoriaSQL = "SELECT * FROM data10 WHERE id='$id' ";
$CategoriaSQL = mysql_query($CategoriaSQL);
$CategoriaROW = mysql_fetch_object($CategoriaSQL);

$EdiCate = "UPDATE data10 SET Nombre='$name',id_menu='$id_menu',Estado='$activo' WHERE id='$id' ";
mysql_query($EdiCate);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Editar Categoría','Administrador > Menú > Editar Categoría > Categoría:<br> De: <b>$CategoriaROW->Nombre</b> <br> A: <b>$name</b>','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<div id="AvisoName" title="¡Aviso!">
	<p style="color:green;text-align:center">¡Cambios guardados!<br> De: <b><?php echo $CategoriaROW->Nombre; ?></b><br> A: <b><?php echo $name; ?></b></p>
</div>
<script>
$("#Cname<?php echo $id; ?>").html("<?php echo $name; ?>");
$("#AvisoName").dialog({
	modal:true,
	close:function(){
		$(this).remove();
		$("#EditarCategoría").remove();
	}
});
</script>