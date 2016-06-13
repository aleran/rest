<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$data = $_POST["data"];
$sql = "
select *
from vista11
join data02
on vista11.id_user=data02.CodigoTbr
where vista11.id='$data'";
$sql = mysql_query($sql);
$row = mysql_fetch_object($sql);
?>
<div id="ResultLogS" title="Producto: <?php echo $row->NombreProducto; ?>">
	<b>Quien retira:</b> <?php echo $row->PrimerNombre." ".$row->PrimerApellido; ?><br>
	<b>Fecha de retiro:</b> <?php echo funcion04($row->FechaRegistro); ?><br>
	<b>Cantidad retirada: </b> <?php echo $row->Cantidad." ".$row->Tipo; ?><br>
	<b>Motivo: </b> <?php echo $row->Motivo; ?>
</div>

<script type="text/javascript">
$("#ResultLogS").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:450,
	height:150
});
</script>