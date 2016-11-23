<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$name = $_POST["name"];
$id_menu = $_POST["id_menu"];


$NameMenuSQL = "INSERT INTO data10(Nombre,Estado,id_menu) VALUES('$name','1','$id_menu')";
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