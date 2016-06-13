<?php
require("../config/config00.php");
require("../config/config02.php");
$id=$_POST['id'];
$DatosUsuariosSQL = "SELECT data02.*,data03.NombreRol FROM data02 JOIN data03 ON data02.Rol=data03.id WHERE CodigoTbr='$id'";
$DatosUsuariosSQL = mysql_query($DatosUsuariosSQL);
$DatosUsuariosROW = mysql_fetch_array($DatosUsuariosSQL);

echo "
<table class='usuario-datos'>
	<tr class='td-sombra'><td><b>Código de usuario: </b>$DatosUsuariosROW[CodigoTbr]</td><td><b>Usuario: </b>$DatosUsuariosROW[Usuario]</td></tr>
	<tr><td colspan='2'><b>Cédula: </b>$DatosUsuariosROW[Type]$DatosUsuariosROW[Cedula]</td></tr>
	<tr class='td-sombra'><td colspan='2'><b>Nombres: </b>$DatosUsuariosROW[PrimerNombre] $DatosUsuariosROW[SegundoNombre]</td></tr>
	<tr><td colspan='2'><b>Apellidos: </b>$DatosUsuariosROW[PrimerApellido] $DatosUsuariosROW[SegundoApellido]</td></tr>
	<tr class='td-sombra'><td colspan='2'><b>Fecha de ingreso: </b>".funcion04($DatosUsuariosROW["FechaIngreso"])."</td></tr>
	<tr><td colspan='2'><b>Rol de Usuarios: </b>$DatosUsuariosROW[NombreRol]</td></tr>";
	if($DatosUsuariosROW["Estado"]=="1"){
		echo "<tr class='td-sombra'><td colspan='2'><b>Estado: </b>Activo</td></tr>";
	}
	if($DatosUsuariosROW["Estado"]=="0"){
		echo "<tr class='td-sombra'><td colspan='2'><b>Estado: </b>Inactivo</td></tr>";
	}
echo "</table>
";
?>
