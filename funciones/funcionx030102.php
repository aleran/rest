<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataSQL00 = "select * from vista08 order by Fecha desc LIMIT 0, 15";
$DataSQL00 = mysql_query($DataSQL00);
?>
<h3>Últimos 15 registros</h3>
<span id="MostrarRegistro"></span>
<table class="Registros">
<tr style="font-weight:bold;background-color:gainsboro" >
<td>Operador</td>
<td>Tipo de Registro</td>
</tr>
<?php
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<tr class='VerRegistro' data='$DataROW00[id]'><td>$DataROW00[PrimerNombre] $DataROW00[PrimerApellido]</td><td>$DataROW00[Registro]</td></tr>";
}
?>
</table>