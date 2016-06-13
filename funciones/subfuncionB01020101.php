<!--
<img src="img/loading.gif" style="width:18px;display:inline" />
-->
<?php
require("../config/config00.php");
$data01 = $_POST['comprobar'];
$sql01 = "SELECT * FROM data02 WHERE Usuario LIKE '$data01%'";
$sql01 = mysql_query($sql01);
$i=0;
if(strlen($data01)!=0){
while($row01 = mysql_fetch_array($sql01)){
	if($row01['Usuario']==$data01){
		$i++;
	}
}
if($i==0){
	echo '<script>
			
			blocked["usuario"]=0;
			$("#AggUsuario").removeClass("ui-state-error");
		  </script>
		  <img src="img/comp.png" style="width:18px;display:inline" />';
}
if($i!=0){
	echo '<script>
			block++;
			blocked["usuario"]=1;
			$("#AggUsuario").addClass("ui-state-error");
			$("#validateTipsAdd")
			.addClass("ui-state-highlight")
			.text("¡Usuario no disponible!");
		  </script>
	<img src="img/neg.png" style="width:18px;display:inline" />
	';
}
}

?>
