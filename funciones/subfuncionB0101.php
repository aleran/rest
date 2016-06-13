<?php
require("../config/config00.php");
require("../config/config02.php");
$ContadorUsuarios=$_POST['paginas'];
$UsuariosActivosSQL = "SELECT * FROM data02 WHERE id!='1' and Estado='1' LIMIT $ContadorUsuarios , 5";
$UsuariosActivosSQL = mysql_query($UsuariosActivosSQL);
$iuser=0;
while($UsuariosActivosROW = mysql_fetch_array($UsuariosActivosSQL)){
	echo "<tr class='user-color ver-usuario' id='".$UsuariosActivosROW["CodigoTbr"]."'>
		  <td>".$UsuariosActivosROW["CodigoTbr"]."</td>
		  <td>".$UsuariosActivosROW["Cedula"]."</td>
		  <td>".$UsuariosActivosROW["PrimerNombre"]." ".$UsuariosActivosROW["SegundoNombre"]." ".$UsuariosActivosROW["PrimerApellido"]." ".$UsuariosActivosROW["SegundoApellido"]."</td>
		  <td>".$UsuariosActivosROW["Usuario"]."</td>
		  <td>".funcion04($UsuariosActivosROW["FechaIngreso"])."</td>
		  </tr>";
	$iuser++;
}
if($iuser==0){
	echo "<tr><td colspan='5'>No hay usuarios registrados</td></tr>";
}
$PageTope=0;
$PageTopeSQL = "SELECT * FROM data02 WHERE id!='1' and Estado='1'";
$PageTopeSQL = mysql_query($PageTopeSQL);
while($PageTopeROW = mysql_fetch_array($PageTopeSQL)){
	$PageTope++;
}
echo "
<script>
paginaTope=$PageTope;
renovacion();
</script>
<script type='text/javascript' src='js/subfuncionB101.js'></script>
";
?>
