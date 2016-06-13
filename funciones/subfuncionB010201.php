<?php
require("../config/config00.php");
$CodigoTbr=$_POST['id'];
$ModUserSQL = "SELECT * FROM data02 WHERE CodigoTbr='$CodigoTbr'";
$ModUserSQL = mysql_query($ModUserSQL);
$ModUserROW = mysql_fetch_array($ModUserSQL);
?>
<form id="ModUsuarioSistema" onsubmit="return evitar(this);">
	<fieldset class="fielduser">
	<table><tr><td>
	<label for="dodigousuario" class="mod-usuario-form title-mod-user">Código de usuario</label>
		<input type="text" value="<?php echo $ModUserROW['CodigoTbr']; ?>" style="width:150px" class="text ui-widget-content ui-corner-all mod-usuario-form" readonly="readonly"/>
		<input type="hidden" name="dodigousuario" id="dodigousuario" value="<?php echo $ModUserROW['CodigoTbr']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form" onkeypress='return permite(event, "esp","#dodigousuario", "Código")'>
	</td>
	<?php if($CodigoTbr!="AA-0000"): ?>
	<td style="padding: 1px 0 8px 1px;">
	<label for="Estado" class="mod-usuario-form title-mod-user">Rol</label>
		<select id="Estado" name="Estado" style="display:inline;width:150px">
			<?php
			if($ModUserROW['Estado']=="1"){
				echo "<option value='1' selected>Activo</option>";
				echo "<option value='0'>Inactivo</option>";
			}
			if($ModUserROW['Estado']=="0"){
				echo "<option value='1' >Activo</option>";
				echo "<option value='0' selected>Inactivo</option>";
			}
			?>
		</select>
	</td>
<?php endif ?>
	</tr></table>
	<label for="Cedula" class="mod-usuario-form title-mod-user">Cédula</label>
		<input type="text" name="Cedula" id="Cedula" readonly value="<?php echo $ModUserROW['Cedula']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form" onkeypress='return permite(event, "num","#Cedula", "Cédula")' autocomplete="off"/>
	
	<label for="PrimerNombre" class="mod-usuario-form title-mod-user">Primer Nombre</label>
		<input type="text" name="PrimerNombre" id="PrimerNombre" value="<?php echo $ModUserROW['PrimerNombre']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form capitalizar" onkeypress='return permite(event, "car","#PrimerNombre", "Primer Nombre")' onKeyUp="capitalize(this)" autocomplete="off"/>
	
	<label for="SegundoNombre" class="mod-usuario-form title-mod-user">Segundo Nombre</label>
		<input type="text" name="SegundoNombre" id="SegundoNombre" value="<?php echo $ModUserROW['SegundoNombre']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form capitalizar" onkeypress='return permite(event, "car","#SegundoNombre", "Segundo Nombre")' onKeyUp="capitalize(this)" autocomplete="off"/>
	
	<label for="PrimerApellido" class="mod-usuario-form title-mod-user">Primer Apellido</label>
		<input type="text" name="PrimerApellido" id="PrimerApellido" value="<?php echo $ModUserROW['PrimerApellido']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form capitalizar" onkeypress='return permite(event, "car","#PrimerApellido", "Primer Apellido")' onKeyUp="capitalize(this)" autocomplete="off"/>
	
	<label for="SegundoApellido" class="mod-usuario-form title-mod-user">Segundo Apellido</label>
		<input type="text" name="SegundoApellido" id="SegundoApellido" value="<?php echo $ModUserROW['SegundoApellido']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form capitalizar" onkeypress='return permite(event, "car","#SegundoApellido", "Segundo Apellido")' onKeyUp="capitalize(this)" autocomplete="off"/>
	
	<label for="Usuario" class="mod-usuario-form title-mod-user">Usuario</label>
		<input type="text" name="Usuario" id="Usuario" value="<?php echo $ModUserROW['Usuario']; ?>" class="text ui-widget-content ui-corner-all mod-usuario-form"  readonly="readonly" autocomplete="off"/>
	
	<table>
	<tr><td>
	<label for="password" class="mod-usuario-form title-mod-user">Contraseña</label>
		<input type="password" placeholder="Contraseña..." name="password" id="password" class="text ui-widget-content ui-corner-all mod-usuario-form" style="width:150px;display:inline"/>&nbsp;<button style="display:inline" onclick="resetearp()">Resetear</button>
		<input type="password" placeholder="Contraseña..." name="passwordCheck" id="passwordCheck" class="text ui-widget-content ui-corner-all mod-usuario-form" style="width:150px;display:inline"/>
	</td>
	<?php if($CodigoTbr!="AA-0000"): ?>
	<td style="padding: 1px 0 8px 1px;">
	<label for="Rol" class="mod-usuario-form title-mod-user">Rol</label>
		<select id="SelectRol" name="SelectRol" style="display:inline">
			<?php
				$RolSql = "SELECT * FROM data03 WHERE Estado='1'";
				$RolSql = mysql_query($RolSql);
				while($RolRow = mysql_fetch_array($RolSql)){
					if($ModUserROW['Rol']!=$RolRow['id']){
						echo "<option value='$RolRow[id]'>$RolRow[NombreRol]</option>";
					}
					if($ModUserROW['Rol']==$RolRow['id']){
						echo "<option value='$RolRow[id]' selected>$RolRow[NombreRol]</option>";
					}
				}
			?>
		</select><br><br><br>
	</td>
	<?php endif ?>
	<?php if($CodigoTbr=="AA-0000"): ?>
		<input type="hidden" name="SelectRol" value="1" />
		<input type="hidden" name="Estado" value="1" />
	<?php endif ?>
	</tr>
	</table>
	<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
	</fieldset>
</form>
<script>
$(function() {
		$("button")
			.button()
			.click(function( event ) {
				event.preventDefault();
			});
	});
$(function() {
    $( "#SelectRol" ).selectmenu();
    $( "#Estado" ).selectmenu();
  });
</script>
