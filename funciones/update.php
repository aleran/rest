<?php 
include("./config/config00.php");

$update01 = "insert into data01(id, NombreModulo, Modulo, Niveles) values('x05','<span class=\"octicon octicon-terminal\"></span> Caja','','1') ";
$update02 = "insert into data01(id, NombreModulo, Modulo, Niveles) values('x0501','Despachadas','funcionDesp.php','2') ";
$update03 = "insert into data04(IdRol, IdModulo, Estado) values('1','x05','1') ";
$update04 = "insert into data04(IdRol, IdModulo, Estado) values('1','x0501','1') ";
$update05 = "update data00 set `update`='1' where id='1' ";

mysql_query($update01);
mysql_query($update02);
mysql_query($update03);
mysql_query($update04);
mysql_query($update05) or die (mysql_error());
?>
"Sistema actualizado"