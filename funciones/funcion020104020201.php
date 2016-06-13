<?php 
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
$data01 = $_POST["data01"];
$data02 = $_POST["data02"];
$query = "delete from data15 where Id='$data'";
mysql_query($query);

$DataU01 = $_SESSION['idtbr'];
$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Borrar pedido','Menú > Ordenar > Orden: $data02 - Parte plato personalizado: $data01','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<span style='color:green'><i>Cambios guardados...</i></span>