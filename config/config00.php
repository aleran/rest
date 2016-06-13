<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type:text/html;charset=utf-8");
$h="localhost";
$u="root";
$p="102236";
$con=mysql_connect($h,$u,$p) or die (mysql_error());
mysql_select_db("core_cio",$con) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
date_default_timezone_set("America/Caracas");
?>
