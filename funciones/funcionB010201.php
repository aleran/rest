<?php
include("../config/config00.php");
include("../config/config02.php");
$Data01 = $_POST['id'];
$DataSQL01 = "select * from data03 where id='$Data01'";
$DataSQL01 = mysql_query($DataSQL01);
$DataROW01 = mysql_fetch_array($DataSQL01);
?>
<div id="DatosRol" title="Rol de Usuario <?php echo $DataROW01["NombreRol"];?>">
<h4>Permisos</h4>
<?php
$DataSQL02 = "select * from vista01 where IdRol='$Data01' and Niveles='1' ORDER BY id ASC";
$DataSQL02 = mysql_query($DataSQL02);
echo "<ul style='cursor:default' class='permisos'>";
$c=0;
while($DataROW02 = mysql_fetch_array($DataSQL02)){
	echo "<li><b>$DataROW02[NombreModulo]</b>";
		$DataSQL03 = "select * from vista01 where id LIKE '$DataROW02[id]%' and IdRol='$Data01' and Niveles='2' ORDER BY id ASC";
		$DataSQL03 = mysql_query($DataSQL03);
		echo "<ul>";
		while($DataROW03 = mysql_fetch_array($DataSQL03)){
			echo "<li>$DataROW03[NombreModulo]";
				$DataSQL04 = "select * from vista01 where id LIKE '$DataROW03[id]%' and IdRol='$Data01' and Niveles='3' ORDER BY id ASC";
				$DataSQL04 = mysql_query($DataSQL04);
				echo "<ul>";
				while($DataROW04 = mysql_fetch_array($DataSQL04)){
					echo "<li>$DataROW04[NombreModulo]</li>";
				}
				echo "</ul>";
			echo "</li>";
		}
		echo "</ul>";
	echo "</li>";
	$c++;
}
echo "</ul>";
if($c==0){
	echo "<p class='sin-permisos'>Sin permisos otorgados</p>";
}
?>
</div>
<script>
$("#DatosRol").dialog({
	modal:true,
	close: function(){
		$(this).remove();
	},
	width:400,
	height:380
});
</script>

