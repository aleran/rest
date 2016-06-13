<?php
function funcion00(){
	session_start();
	if (!isset($_SESSION['user_cio'])){ 
	}
	echo "<script>renovar();</script>";
}
function funcion01(){
	if(!isset($_SESSION['user_cio'])){
		echo "
		<div class='sesion'>
			<form action='./config/config03.php' method='post' >
				<table class='ini_sesion'>
					<thead>
						<tr><th colspan='2'>Iniciar sesión</th></tr>
					</thead>
					<tr>
						<td>Usuario</td><td><input type='text' name='sesion00' id='sesion00' class='i_sesion' autocomplete='off'/></td>
					</tr>
					<tr>
						<td>Contraseña</td><td><input type='password' name='sesion01' id='sesion01' class='i_sesion' autocomplete='off'/></td>
					</tr>
					<tr>
						<td colspan='2'><button id='ses-submit'><span class=\"octicon octicon-key\"></span> Ingresar</button></td>
					</tr>
				</table>
			</form>";
		$sqlupdate = mysql_query("select * from data00 where id='1'");
		$rowupdate = mysql_fetch_object($sqlupdate);
		if($rowupdate->update==0){
			include("./funciones/update.php");
		}
		echo "</div>";
	}
}
function funcion02(){
	if (isset($_SESSION['user_cio'])){
		$idRol=$_SESSION['IdRol'];
		echo "<div id='panel_iz'>";
		$MenuSQL = "SELECT * FROM vista01 WHERE Niveles='1' and IdRol='$idRol' ORDER BY id";
		$MenuSQL = mysql_query($MenuSQL) or die ("<h3>No se pudo cargar el menu:</h3><b style='color:red'>(".mysql_error().")</b>");
		echo "<ul class='menu-principal'>";
		while($MenuROW = mysql_fetch_array($MenuSQL)){
			echo "<li onclick='mostrar($MenuROW[id]);selected(this)' class='unselected'>$MenuROW[NombreModulo]</li>";
		}
		echo "<li onclick='location.href=\"./funciones/funcionA01.php\"' class='unselected'><span class='octicon octicon-sign-out'></span> Salir</li>";
		echo "</ul>";
		echo "</div>";
		?><script src='js/funcionA0101.js'></script><?php
	}
}
function funcion03(){
	if(isset($_SESSION['user_cio'])){
	$idRol=$_SESSION['IdRol'];
	echo "<div id='contenido'>";
	$OpcionesSQL = "SELECT * FROM vista01 WHERE Niveles='1' and IdRol='$idRol'";
	$OpcionesSQL = mysql_query($OpcionesSQL) or die ("<h3>No se pudo cargar la módulo:</h3><b style='color:red'>(".mysql_error().")</b>");
	while($OpcionesROW = mysql_fetch_array($OpcionesSQL)){
		echo "<div id='$OpcionesROW[id]' class='opcion'>";
		$id_o=$OpcionesROW['id'];
		$OpcionSQL = "SELECT *
						FROM vista01
						WHERE id LIKE '$id_o%' and id!='$id_o' and Niveles='2' and IdRol='$idRol'
						";
		$OpcionSQL = mysql_query($OpcionSQL) or die ("<h3>No se pudo cargar la opción:</h3><b style='color:red'>(".mysql_error().")</b>");
		echo "
			<script>
			$(function() {
			$('#tabs$OpcionesROW[id]').tabs({
			beforeLoad: function( event, ui ) {
			ui.jqXHR.fail(function() {
			ui.panel.html(
			'No se ha podido cargar su petición. ' +
			'Notifique sobre el problema para solucionarlo los más pronto posible.' );
			});
			}
			});
			});
			</script>
			";
		echo "<div id='tabs$OpcionesROW[id]' class='tabFp'>
			  <ul>";
		while($OpcionROW = mysql_fetch_array($OpcionSQL)){
			echo "<li><a href='./funciones/$OpcionROW[Modulo]'>$OpcionROW[NombreModulo]</a></li>";
		}
		echo "</ul>
			  </div>";
		echo "</div>";
	}
	echo "</div><div id='aviso' title='¡Aviso!'></div>";
}
}
function funcion04($fecha){
	$fecha = substr($fecha, 0, -9);
	list($anio, $mes, $dia) = explode("-",$fecha);
	return $fecha = $dia."/".$mes."/".$anio;
}
function funcion0401($fecha){
	list($anio, $mes, $dia) = explode("-",$fecha);
	return $fecha = $dia."/".$mes."/".$anio;
}
function funcion0402($fecha){
	list($dia, $mes, $anio) = explode("/",$fecha);
	return $fecha = $anio."-".$mes."-".$dia;
}
function funcion05($fecha){
	list($dia, $mes, $anio) = explode("/",$fecha);
	return $fecha = $anio."-".$mes."-".$dia;
}
function errores(){
	if(array_key_exists('error',$_GET) and $_GET['error']=='1'){
		echo "
		<div id='errordesesion' title='¡Error de Sesión!'>
			¡Usuario o Contraseña inválidos!
		</div>
		<script>
		dialogos('#errordesesion');
		</script>
		";
	}
	if(array_key_exists('error',$_GET) and $_GET['error']=='4'){
		echo "
		<div id='errordesesion' title='¡Error de Sesión!'>
			¡No dejes valores en blanco!
		</div>
		<script>
		dialogos('#errordesesion');
		</script>
		";
	}
	if(array_key_exists('sesion',$_GET) and $_GET['sesion']=='off'){
		echo "
		<div id='errorsesionoff' title='¡Error de Sesión!'>
			La sesión se ha cerrado.
		</div>
		<script>
		dialogos('#errorsesionoff');
		</script>
		";
	}
	if(array_key_exists('sesion',$_GET) and $_GET['sesion']=='autooff'){
		echo "
		<div id='errorsesionoff' title='¡Error de Sesión!'>
			¡Su sesión en el sistema ha caducado!
		</div>
		<script>
		dialogos('#errorsesionoff');
		</script>
		";
	}
}
?>
