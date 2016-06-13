<?php
session_start();
if(!isset($_SESSION['user_cio'])){
	echo "<script>sessionoff();</script>";
}
if(isset($_SESSION['user_cio'])){
include("../config/config00.php");
include("../config/config02.php");
$Data01 = $_POST["TypeDocument"];
$Data02 = $_POST["AggCedula"];
$Data03 = $_POST["AggPrimerNombre"];
$Data04 = $_POST["AggSegundoNombre"];
$Data05 = $_POST["AggPrimerApellido"];
$Data06 = $_POST["AggSegundoApellido"];
$Data07 = $_POST["AggUsuario"];
$Data08 = md5($_POST["AggContraseña"]);
$Data10 = $_POST["AggSelectRol"];

$DataSQL00 = "select * from data00 where id='1'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

$DataSQL01 = "insert into
			  data02(CodigoTbr, Type, Cedula, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Usuario, Pass, Estado, Rol)
			  values('$DataROW00[Code]','$Data01','$Data02','$Data03','$Data04','$Data05','$Data06','$Data07','$Data08','1','$Data10')";
$DataSQL01 = mysql_query($DataSQL01);
$code = $DataROW00["Code"];
$code++;
$CodeReg = $DataROW00["Code"];

$DataError01 = mysql_errno($con);
if($DataError01!=0){
$DataError00 = mysql_error($con);
$DataError0001 = "<p style='color:red;text-align:justify'>$DataError00</p>";
echo "<div id='Error' title='Error número: $DataError01'>$DataError0001</div>";
echo "
<script>
dialogos('#Error');
</script>
";
$CodeReg = "";
}
$Estado = "Sin Errores";
if($DataError01!="0"){
	$Estado = "Error número: ".$DataError01;
}
if($DataError01=="0"){
	$Estado = "¡Cambios guardados con éxito!";
}
$idtbr = $_SESSION['idtbr'];
$registro = "Ingresar nuevo usuario";
$modulo = "Administrador > Usuario > Ingresar Usuario";
$ip = $_SERVER["REMOTE_ADDR"];
$logSQL = "INSERT INTO data06(IdOperador, Registro, IdDatoUsuario, Módulo, IP, Estado) VALUES('$idtbr','$registro','$CodeReg','$modulo','$ip','$Estado')";
mysql_query($logSQL);
if($DataError01==0){
	$DataSQL02 = "update data00 set Code='$code' where id='1'";
	$DataSQL02 = mysql_query($DataSQL02);
	$DataSQL03 = "select data02.*,data03.NombreRol from data02 join data03 on data02.Rol=data03.id where CodigoTbr='$CodeReg'";
	$DataSQL03 = mysql_query($DataSQL03);
	$DataROW03 = mysql_fetch_array($DataSQL03);
	echo "<div class='AvisoAlert' title='Datos del Usuario'>";
	echo "
		<table class='usuario-datos'>
		<tr class='td-sombra'><td><b>Código de usuario: </b>$DataROW03[CodigoTbr]</td><td><b>Usuario: </b>$DataROW03[Usuario]</td></tr>
		<tr><td colspan='2'><b>Cédula: </b>$DataROW03[Cedula]</td></tr>
		<tr class='td-sombra'><td colspan='2'><b>Nombres: </b>$DataROW03[PrimerNombre] $DataROW03[SegundoNombre]</td></tr>
		<tr><td colspan='2'><b>Apellidos: </b>$DataROW03[PrimerApellido] $DataROW03[SegundoApellido]</td></tr>
		<tr class='td-sombra'><td colspan='2'><b>Fecha de ingreso: </b>".funcion04($DataROW03["FechaIngreso"])."</td></tr>
		<tr><td colspan='2'><b>Rol de Usuarios: </b>$DataROW03[NombreRol]</td></tr>";
		if($DataROW03["Estado"]=="1"){
			echo "<tr class='td-sombra'><td colspan='2'><b>Estado: </b>Activo</td></tr>";
		}
		if($DataROW03["Estado"]=="0"){
			echo "<tr class='td-sombra'><td colspan='2'><b>Estado: </b>Inactivo</td></tr>";
		}
	echo "</table></div>
	<script>
	$('.AvisoAlert').dialog({
		modal:true,
		height: 330,
		width: 460,
		close: function(){
			$(this).remove();
		},
		buttons:{
			Ok:function(){
				$(this).dialog('close');
			}
		}
		});
	</script>
	";
}
}
?>
