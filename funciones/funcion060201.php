<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data00 = $_POST["Data00"];
$SQLtable02 = "select * from data11 where MesaNumero='$Data00'";
$SQLtable02 = mysql_query($SQLtable02);
$RowTable = mysql_fetch_object($SQLtable02);
?>
<h4>Estado</h4>
<select class="select-table" name="StatusTable">
	<?php
		if($RowTable->Estado==0){
			echo "<option value='0' selected>Inactiva</option>
				  <option value='1'>Activa</option>";
		}
		if($RowTable->Estado==1){
			echo "<option value='0'>Inactiva</option>
				  <option value='1' selected>Activa</option>";
		}
	?>
</select>