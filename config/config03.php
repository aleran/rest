<!--Autor 
Edgar Carrizalez
C.I. V-19.3522.988
Correo: edg.sistemas@gmail.com
-->

<?php
	include("config00.php");
	$user=$_POST['sesion00'];
	$pass=$_POST['sesion01'];
	
	$sql=mysql_query("SELECT * FROM vista00 WHERE Usuario='$user'") or die (mysql_error());
	$sqlUser=mysql_query("SELECT * FROM data02 WHERE Usuario='$user'") or die (mysql_error());
	$row = mysql_fetch_array($sql);
	$rowUser = mysql_fetch_array($sqlUser);
	
	if($user==$row['Usuario'] and md5($pass)==$row['Pass'] and $row['Estado']=='1'){
			session_start();
			$_SESSION['user_cio']=$_REQUEST['sesion00'];
			$_SESSION['pass']=$_REQUEST['sesion01'];
			$_SESSION['IdRol']=$row['IdRol'];
			$_SESSION['estado']=$row['Estado'];
			$_SESSION['idtbr']=$rowUser['CodigoTbr'];
			header("location: ../");
	}
	
	if($row['Estado']=='0'){
		header("location: ../index.php?error=2");
	}
	if($user!=$row['Usuario'] or md5($pass)!=$row['Pass']){
		header("location: ../index.php?error=1");
	}
	if($user=="" or $pass==""){
		header("location: ../index.php?error=4");
	}	

?>

