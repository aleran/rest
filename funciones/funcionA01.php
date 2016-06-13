<?php
session_start();
$_SESSION['user_cio']=null;
$_SESSION['pass']=null;
$_SESSION['IdRol']=null;
$_SESSION['estado']=null;
$_SESSION['idtbr']=null;

header("location: ../");
?>
