<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$name = $_POST["name"];
$id_menu = $_POST["id_menu"];

$solicitar_idSql = "SELECT * FROM data10 ORDER BY id DESC limit 1";
$solicitar_idSql = mysql_query($solicitar_idSql);
$solicitar_idRow = mysql_fetch_object($solicitar_idSql);

$id_cat = $solicitar_idRow->id;
$id_cat++;

$NameMenuSQL = "INSERT INTO data10(id,Nombre,Estado,id_menu) VALUES('$id_cat','$name','1','$id_menu')";
mysql_query($NameMenuSQL);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Registro de Categoría','Administrador > Menú > Agregar Categoría > Categoría: $name','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<div id="AvisoName" title="¡Aviso!">
	<p style="color:green;text-align:center">Categoría <b><?php echo $name; ?></b> agregada exitosamente...</p>
</div>
<script>
$("#AvisoName").dialog({
	modal:true,
	close:function(){
		$(this).remove();
		$("#IngresarNuevaCategoría").remove();
		cargamenu();
	}
});
</script>