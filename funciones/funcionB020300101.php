<?php
include("../config/config00.php");
include("../config/config02.php");

//~ $Data01 = $_POST["idcode"];
$Data01 = $_POST["NewNombreRol"];

$DataSQL00 = "insert into data03(NombreRol,Estado) value('$Data01','1')";
$DataSQL00 = mysql_query($DataSQL00);

$DataSQL02 = "select * from data03 order by id desc";
$DataSQL02 = mysql_query($DataSQL02);
$i=0;
while($DataROW02 = mysql_fetch_array($DataSQL02) and $i==0){
	$Data02 = $DataROW02["id"];
	$i++;
}

$DataSQL01 = "select * from data01";
$DataSQL01 = mysql_query($DataSQL01);
while($DataROW00 = mysql_fetch_array($DataSQL01)){
	$DataL = $DataROW00["id"];
	if(array_key_exists($DataL,$_POST)){
		$DataSQL02 = "insert into data04(IdRol,IdModulo,Estado) value('$Data02','$DataL','1')";
		mysql_query($DataSQL02);
	}
}


?>
<div id="Aviso" title="Aviso">
	<p style="text-align:center;color:green">¡Rol Ingresado Exitósamente!</p>
</div>
<script>
$("#Aviso").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>
