<?php
session_start();
if(isset($_SESSION['user_cio'])){
include("../config/config00.php");
$Data01 = $_SESSION['idtbr'];

$DataSQL00 = "select * from vista02 where CodigoTbr='$Data01'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

$DataSQL01 = "select * from data03 where id='$DataROW00[Rol]'";
$DataSQL01 = mysql_query($DataSQL01);
$DataROW01 = mysql_fetch_array($DataSQL01);

echo "
<table>
<tr><td><b>Código:</b> $DataROW00[CodigoTbr]</td><td><b>Usuario:</b> $DataROW00[Usuario]</td><td><b>Rol de Usuario:</b> $DataROW01[NombreRol]</td></tr>
<tr><td><b>Cédula:</b> $DataROW00[Cedula]</td><td><b>Nombres:</b> $DataROW00[PrimerNombre] $DataROW00[SegundoNombre]</td><td><b>Apellidos:</b> $DataROW00[PrimerApellido] $DataROW00[SegundoApellido]</td></tr>
</table>
";
}
else {
echo "
<script>
$('#footer').fadeOut(0);
</script>
";
}
?>
