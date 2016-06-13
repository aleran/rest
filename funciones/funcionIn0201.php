<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$DataU01 = $_SESSION['idtbr'];
$Data00 = funcion05($_POST["Data00"]);
$Data01 = $_POST["Data01"];
$Data01AC = $_POST["Data01"];
$Data02 = $_POST["Data02"];
$Data03 = $_POST["Data03"];
$Data04 = "LT".date("ymdHis");
$multi=1000;
if($Data02=="Kilogramo (kg)"){
	$Data01C = "kg";
}
if($Data02=="Gramo (g)"){
	$Data01C = "g";
}
if($Data02=="Litro (l)"){
	$Data01C = "l";
}
if($Data02=="Mililitro (ml)"){
	$Data01C = "ml";
}
if($Data02=="Unidad (U)"){
	$Data01C = "U";
	$multi=1;
}

$DataC01 = $Data01." (".$Data01C.")";

$DataSQL00 = "insert into data08(Lote,id_user,Cantidad,Tipo,FechaCaducidad,IdProducto) value('$Data04','$DataU01','$Data01','$Data02','$Data00','$Data03')";
$DataSQL00 = mysql_query($DataSQL00);

$ErrorNumber = mysql_errno();

if($ErrorNumber!=0){
$ErrorSQL01 = "Error: ".mysql_errno()." \"".mysql_error()."\"";
$ErrorSQL02 = "Error: ".mysql_errno();
$ipe = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado, Tipo)
		   value('$DataU01','Actualización de iventario','Inventario > Actualizar','$ipe','$ErrorSQL02','1')";
$LogSql = mysql_query($LogSql);

echo "
<style>
.ErrorSQL{
text-align:justify;
}
.ErrorSQL span{
color:red;
}
</style>
<div class='ErrorSQL' title='Error al actualizar'>
Hubo un error en la actualización del producto.<br><br>
<span>$ErrorSQL01</span>
</div>
<script>
$('.ErrorSQL').dialog({
modal:true,
width:520,
close:function(){
$(this).remove();
}
});
</script>
";
}

if($ErrorNumber==0){
$DataSQL01 = "select * from vista03 where id='$Data03'";
$DataSQL01 = mysql_query($DataSQL01);
$DataROW01 = mysql_fetch_array($DataSQL01);
if($Data02=="Kilogramo (kg)"){
	$Data01 = $Data01 * 1000;
}
if($Data02=="Litro (l)"){
	$Data01 = $Data01 * 1000;
}
$Data01E=($DataROW01["Existencia"]/$multi)." (".$DataROW01["Abreviatura"].")";
$Data01 = $DataROW01["Existencia"] + $Data01;
$DataSQL02 = "update data05 set Existencia='$Data01' where id='$Data03'";
mysql_query($DataSQL02);

$DataSQL02 = "select * from vista03 where id='$Data03'";
$DataSQL02 = mysql_query($DataSQL02);
$DataROW02 = mysql_fetch_array($DataSQL02);

$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Actualización de iventario','Inventario > Actualizar: <b>$DataROW01[NombreProducto]</b> con <b>$Data01AC $Data02</b>','$ip','Éxitoso')";
mysql_query($LogSql);

if($Data02=="Litro (l)" or $Data02=="Kilogramo (kg)" or $Data02=="Gramo (g)"){
$Data01 = $Data01/1000;
}

$echo = $Data01." (".$DataROW02["Abreviatura"].")";
?>
<div class="Aviso" title='Notificación'>
	<br>
	<center>
		<img src="img/comp.png" width="5%"> <span style="color:green">¡Producto Actualizado con éxito!</span>
	</center><br>
	<?php
		echo "
		<b>Producto:</b> $DataROW02[NombreProducto]<br>
		<b>En existencia:</b> $Data01E<br>
		<b>Se añadieron:</b> $DataC01<br>
		<b>Lote: </b>$Data04<br>
		<b>Quedando un Total:</b> $echo
		";
	?>
</div>
<script>
$("#<?php echo $Data03;?>").html("<?php echo $echo;?>");
$(".Aviso").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
});
</script>
<?php
}
?>
