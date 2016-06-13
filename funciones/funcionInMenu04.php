<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$idmenu = $_POST["data_id"];

$view00 = "SELECT * FROM data17 WHERE id='$idmenu' ";
$view00 = mysql_query($view00);
$rowview00 = mysql_fetch_object($view00);

$MenuIdSQL01 = "UPDATE data17 SET Estado='0' WHERE Estado='1'";
mysql_query($MenuIdSQL01);

$MenuIdSQL02 = "UPDATE data17 SET Estado='1' WHERE id='$idmenu'";
mysql_query($MenuIdSQL02);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Actualizar Menú','Administrador > Menú > Seleccionado: $rowview00->NombreMenu','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>