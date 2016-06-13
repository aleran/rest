<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$idRol=$_SESSION['IdRol'];
$id_o="x0102";
$OpcionUserSQL = "SELECT *
				FROM vista01
				WHERE id LIKE '$id_o%' and id!='$id_o' and Niveles='3' and IdRol='$idRol'
				ORDER BY vista01.id ASC
				";
$OpcionUserSQL = mysql_query($OpcionUserSQL) or die ("<h3>No se pudo cargar la opción:</h3><b style='color:red'>(".mysql_error().")</b>");
echo "
	<script>
	$(function() {
	$('#UsertabsX010201').tabs({
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
echo "<div id='UsertabsX010201' class='tabFp'>
	  <ul>";
while($OpcionUserROW = mysql_fetch_array($OpcionUserSQL)){
	echo "<li><a href='./funciones/$OpcionUserROW[Modulo]'>$OpcionUserROW[NombreModulo]</a></li>";
}
echo "</ul>
 </div>";
?>
