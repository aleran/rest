<?php
include("../config/config00.php");
include("../config/config02.php");

$Data01 = $_POST["idcode"];
$Data02 = $_POST["ModNombreRol"];
$DataSQL00 = "delete from data04 where IdRol='$Data01'";
$DataSQL00 = mysql_query($DataSQL00);

$DataSQL01 = "select * from data01";
$DataSQL01 = mysql_query($DataSQL01);
while($DataROW00 = mysql_fetch_array($DataSQL01)){
	$DataL = $DataROW00["id"];
	if(array_key_exists($DataL,$_POST)){
		$DataSQL02 = "insert into data04(IdRol,IdModulo,Estado) value('$Data01','$DataL','1')";
		mysql_query($DataSQL02);
	}
}

$DataSQL02 = "update data03 set NombreRol='$Data02' where id='$Data01'";
$DataSQL02 = mysql_query($DataSQL02);
?>
<div id="Aviso" title="Aviso">
	<p style="text-align:center;color:green">¡Cambios guardados!</p>
</div>
<script>
$("#Aviso").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>
