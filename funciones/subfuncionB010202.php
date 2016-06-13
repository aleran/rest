<?php
session_start();
if(!isset($_SESSION['user_cio'])){
	echo "<script>sessionoff();</script>";
}
if(isset($_SESSION['user_cio'])){

//~ for($i=0;$i<12000000;$i++){
//~ }
$error=0;
$error_consulta=0;
require("../config/config00.php");
require("../config/config04.php");
$dodigousuario = $_POST['dodigousuario'];
$Cedula = $_POST['Cedula'];
$PrimerNombre = $_POST['PrimerNombre'];
$SegundoNombre = $_POST['SegundoNombre'];
$PrimerApellido = $_POST['PrimerApellido'];
$SegundoApellido = $_POST['SegundoApellido'];
$Usuario = $_POST['Usuario'];
$password = $_POST['password'];
$SelectRol = $_POST['SelectRol'];
$Estado = $_POST['Estado'];

if($password==""){
	$password="";
}
if($password!=""){
	$password = md5($password);
	$password = ",Pass='$password'";
}
if($error==0){
if(CheckCadena($PrimerNombre)!=0) $error=1;
if($SegundoNombre!=""){
	if(CheckCadena($SegundoNombre)!=0) $error=1;
}
if(CheckCadena($PrimerApellido)!=0) $error=1;
if($SegundoApellido!=""){
	if(CheckCadena($SegundoApellido)!=0) $error=1;
}
if(CheckCadena($Usuario)!=0) $error=1;
}

if($error==0){

$UpdateTrbSQL = "UPDATE data02 SET Cedula='$Cedula',PrimerNombre='$PrimerNombre',SegundoNombre='$SegundoNombre',PrimerApellido='$PrimerApellido',SegundoApellido='$SegundoApellido',Rol='$SelectRol',Usuario='$Usuario',Estado='$Estado'$password WHERE CodigoTbr='$dodigousuario'";
mysql_query($UpdateTrbSQL);
$error_mysql = mysql_errno($con) . ": " . mysql_error($con). "\n";
$numero_error = mysql_errno($con);
if($numero_error!="0"){
	echo "<div id='errorconsulta' title='Error'>$error_mysql</div>";
	echo "
	<script>
	dialogos('#errorconsulta');
	</script>
	";
	$error_consulta=1;
}
$Estado = "Sin Errores";
if($numero_error!="0"){
	$Estado = "Error código".$error_mysql;
}
if($numero_error=="0"){
	$Estado = "¡Cambios guardados con éxito!";
}
$idtbr = $_SESSION['idtbr'];
$registro = "Modificacion de datos de usuario";
$modulo = "Administrador > Usuario > Modificar Usuario> Usuario: <b>$PrimerNombre $PrimerApellido</b>";
$ip = $_SERVER["REMOTE_ADDR"];
$logSQL = "INSERT INTO data06(IdOperador, Registro, IdDatoUsuario, Módulo, IP, Estado) VALUES('$idtbr','$registro','$dodigousuario','$modulo','$ip','$Estado')";
mysql_query($logSQL);
if($error_consulta==0){
?>
<script>
dialogos("#CambiosGuardados");
</script>
<div id="CambiosGuardados" title="Modificar usuario">
<img src="./img/check.png" width="20px">Cambios guardados
</div>
<?php
}
}
}
?>
