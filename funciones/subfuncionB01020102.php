<!--
<img src="img/loading.gif" style="width:18px;display:inline" />
-->
<?php
require("../config/config00.php");
$data01 = $_POST['data02'];
$data01.= $_POST['comprobar'];
$sql01 = "SELECT * FROM vista02 WHERE TypeCedula='$data01'";
$sql01 = mysql_query($sql01);
$i=0;
if(strlen($data01)!=0){
$row01 = mysql_fetch_array($sql01);

//~ echo strlen($row01['TypeCedula'])."=".strlen($data01)."<br>";
if($row01['TypeCedula']!=$data01){
	echo '<script>
			blocked["cedula"]=0;
			$("#AggCedula").removeClass("ui-state-error");
		  </script>
		  <img src="img/comp.png" style="width:18px;display:inline" />';
}
if($row01['TypeCedula']==$data01){
	echo '<script>
			block++;
			blocked["cedula"]=1;
			$("#AggCedula").addClass("ui-state-error");
			$("#validateTipsAdd")
			.addClass("ui-state-highlight")
			.text("¡Esta Cédula ya se encuentra registrada!");
		  </script>
	<img src="img/neg.png" style="width:18px;display:inline" />
	';
}

}

?>
