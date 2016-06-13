<div class="cont-op">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataU01 = $_SESSION['idtbr'];

$DataUserSQL = "select data02.*, data03.NombreRol
				from data02
				join data03
				on data02.Rol=data03.id
				where CodigoTbr='$DataU01'";
$DataUserSQL = mysql_query($DataUserSQL);
$DataUser = mysql_fetch_object($DataUserSQL);
?>
	<h3>Datos de Usuario (<?php echo $DataUser->CodigoTbr; ?>)</h3>
	<table class="UserDataTable">
		<tr>
			<td class='ImpUser'>Cédula:</td><td><?php echo $DataUser->Type.$DataUser->Cedula; ?></td>
		</tr>
		<tr>
			<td class='ImpUser'>Nombre(s):</td><td><?php echo $DataUser->PrimerNombre." ".$DataUser->SegundoNombre; ?></td>
		</tr>
		<tr>
			<td class='ImpUser'>Apellido(s):</td><td><?php echo $DataUser->PrimerApellido." ".$DataUser->SegundoApellido; ?></td>
		</tr>
		<tr>
			<td class='ImpUser'>Usuario:</td><td><?php echo $DataUser->Usuario; ?></td>
		</tr>
		<tr>
			<td class='ImpUser'>Rol de Usuario:</td><td><?php echo $DataUser->NombreRol; ?></td>
		</tr>
		<tr>
			<td class='ImpUser'>Fecha de ingreo:</td><td><?php echo funcion04($DataUser->FechaIngreso); ?></td>
		</tr>
	</table>
	<br>
	<button id="EditarMyData" data="<?php echo $DataUser->CodigoTbr; ?>">Editar</button>
<style>
.ImpUser{
	font-weight: bold;
	background-color: #d8d8d8;
}
.UserDataTable{
	border: 1px solid silver;
	border-radius: 3px;
}
.UserDataTable td{
	padding: 5px;
	border:1px solid silver;
}
#UserEditDataDialog{
	font-size: 12px;
}
</style>
<script type="text/javascript" src="js/funcionP01.js"></script>
<div id="UserEditDataDialog" title="Modificar usuario">
	<p class="validateTips">Todos los campos son requeridos.</p>
	<div id="UserEditData"></div>
</div>
<div class="cargadatos"></div>
<br>
</div>