<form id="IngresoDeNuevoUsuario">
	<fieldset class="fielduser">
		<label for="AggCedula" class="new-user">Cédula <b style="color:red">(*)</b></label>
			<select id="TypeDocument" name="TypeDocument" style="width:100px" onchange="funcionSFB02()" >
				<option onclick="funcionSFB02()" value="0">Tipo</option>
				<option onclick="funcionSFB02()" value="V.-">V.-</option>
				<option onclick="funcionSFB02()" value="P.-">P.-</option>
				<option onclick="funcionSFB02()" value="E.-">E.-</option>
				<option onclick="funcionSFB02()" value="O.-">O.-</option>
			</select>
			<input type="text" name="AggCedula" id="AggCedula" class="text ui-widget-content ui-corner-all" onkeyup="funcionSFB02()" onkeypress='return permiteme(event, "num","#AggCedula", "Cédula")' placeholder="Cédula de usuario" style="display:inline;width:370px" autocomplete="off"/><span id="cargadocedu"></span>
		<label for="AggPrimerNombre" class="new-user">Primer Nombre <b style="color:red">(*)</b></label>
			<input type="text" name="AggPrimerNombre" id="AggPrimerNombre" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "car","#AggPrimerNombre", "Primer Nombre")' onKeyUp="capitalizar(this)"  placeholder="Primer nombre del usuario" autocomplete="off"/>
		<label for="AggSegundoNombre" class="new-user">Segundo Nombre</label>
			<input type="text" name="AggSegundoNombre" id="AggSegundoNombre" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "car","#AggSegundoNombre", "Segundo Nombre")' onKeyUp="capitalizar(this)" placeholder="Segundo nombre del usuario" autocomplete="off"/>
		<label for="AggPrimerApellido" class="new-user">Primer Apellido <b style="color:red">(*)</b></label>
			<input type="text" name="AggPrimerApellido" id="AggPrimerApellido" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "car","#AggPrimerApellido", "Primer Apellido")' onKeyUp="capitalizar(this)" placeholder="Primer Apellido del usuario" autocomplete="off"/>
		<label for="AggSegundoApellido" class="new-user">Segundo Apellido</label>
			<input type="text" name="AggSegundoApellido" id="AggSegundoApellido" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "car","#AggSegundoApellido", "Segundo Apellido")' onKeyUp="capitalizar(this)" placeholder="Segundo Apellido del usuario" autocomplete="off"/>
		<label for="AggUsuario" class="new-user">Usuario <b style="color:red">(*)</b></label>
			<input type="text" name="AggUsuario" id="AggUsuario" class="text ui-widget-content ui-corner-all" onkeyup="funcionSFB01()" onkeypress='return permiteme(event, "num_car","#AggUsuario", "Usuario")' placeholder="Nombre de usuario del sistema" style="display:inline;width:390px" autocomplete="off"/><span id="cargadouser"></span>
		<label for="AggContraseña" class="new-user">Contraseña <b style="color:red">(*)</b></label>
			<input type="password" name="AggContraseña" id="AggContraseña" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "num_car","#AggContraseña", "Contraseña")' placeholder="Contraseña del usuario" autocomplete="off"/>
		<label for="AggContraseñacomp" class="new-user">Contraseña <b style="color:red">(*)</b></label>
			<input type="password" name="AggContraseñacomp" id="AggContraseñacomp" class="text ui-widget-content ui-corner-all" onkeypress='return permiteme(event, "num_car","#AggContraseñacomp", "Contraseña comprobar")' placeholder="Contraseña del usuario" autocomplete="off"/>
		<label for="AggSelectRol" class="new-user">Roles de Usuario</label>
		<select id="AggSelectRol" name="AggSelectRol">
			<option value="0" id="seleccionus">Seleccionar</option>
			<?php
				require("../config/config00.php");
				$RolSql = "SELECT * FROM data03 WHERE Estado='1'";
				$RolSql = mysql_query($RolSql);
				while($RolRow = mysql_fetch_array($RolSql)){
						echo "<option value='$RolRow[id]'>$RolRow[NombreRol]</option>";
				}
			?>
		</select>
	</fieldset>
</form>
<script type="text/javascript" src="js/subfuncionB010201.js"></script>
<div id="erroraddsis" title="Error"><span id="errorcod"></span></div>
