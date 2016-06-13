<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data00 = $_POST["Data00"];

$DataSQL00 = "select * from data12 where id like '$Data00%' and Subniveles='1'";
$DataSQL00 = mysql_query($DataSQL00);
$NewSelect = "<br><b>De</b> <select name='Data02' id='NewData' class='ui-selectmenu-text ui-text-select NewSelect' >";
$i=0;
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	$NewSelect.="<option value='$DataROW00[id]'>$DataROW00[Nombre]</option>";
	$i++;
}
$NewSelect.="</select>";
if($i!=0){
echo $NewSelect;
?>
<br><br><b>Parte de un plato</b>
<div class='switch'>
	<input id='cmn-toggleClassSel'  name='Data03' class='cmn-toggle cmn-toggle-round-flat' type='checkbox'>
	<label for='cmn-toggleClassSel'></label>
</div>
<?php
}
else echo "No hay subniveles";
?>
