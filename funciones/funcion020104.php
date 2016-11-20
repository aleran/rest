<div id="VerMesa">
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data = $_POST["Data"];
$DataSQL00 = "select * from vista05 where MesaNumero='$Data'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);

$DataResult = 0;

$DataSQL01 = "select *
			  from vista06
			  where Orden='$DataROW00[IdOrden]'";
$DataSQL01 = mysql_query($DataSQL01);

$DataSQL02 = "select * from data14 where Orden='$DataROW00[IdOrden]' ";
$DataSQL02 = mysql_query($DataSQL02);

if(strlen($DataROW00["MesaNumero"])==0) {
	echo "Mesa desocupada...";
}
else{
	?>
	<script type="text/javascript">
		$("#VerMesa").attr("title" , "Mesa: <?php echo $DataROW00["MesaNumero"];?>");
		Estado = "<?php echo $DataROW00["EstadoActual"];?>";
	</script>
	<b>Número de Orden: </b><?php echo $DataROW00["IdOrden"];?>
	<hr>
	<b>Ordenes: </b><br>
	<table style="font-size:90%">
	<?php
	function data_menus($id){
		$p_sql = "SELECT * FROM data12 WHERE id='$id'";
		$p_sql = mysql_query($p_sql);
		$name = "";
		while($p_row = mysql_fetch_object($p_sql)){
			$name = "[".$p_row->Nombre."]";
		}
		return $name;
	}
	while($DataROW01 = mysql_fetch_array($DataSQL01)){
		$b_id = "SELECT * FROM data12 WHERE id='$DataROW01[id]' ";
		$b_id = mysql_query($b_id);
		$b_row = mysql_fetch_object($b_id);
		$id_Sub = $b_row->sub_id;
		$Despacho="";
		$DespachoStyle="";
		if($DataROW01["Despacho"]==1){
			$Despacho=" (Despachado)";
			$DespachoStyle="despacho-style";
		}
		$sub_m = data_menus($id_Sub);
		echo "<tr class='$DespachoStyle'><td style='text-align:right'>".$DataROW01["DeCosto"]." Bs.</td><td>[$DataROW01[Cantidad]]</td><td>".$sub_m." ".$DataROW01["Nombre"].$Despacho."</td></tr>";
		$DataResult = $DataResult + ($DataROW01["DeCosto"]*$DataROW01["Cantidad"]);
	}
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		$IdPer = $DataROW02["IdPerCan"];
		$Despacho="";
		$DespachoStyle="";
		if($DataROW02["Despacho"]==1){
			$Despacho=" (Despachado)";
			$DespachoStyle="despacho-style";
		}
		if($IdPer!=""){
				echo "<tr class='$DespachoStyle'><td style='text-align:right'></td><td colspan='2'><b>Plato Personalizado $Despacho</b></td></tr>";
				$DataSQL03 = "select * from vista07 where IdPersolizado='$IdPer' ";
				$DataSQL03 = mysql_query($DataSQL03) or die (mysql_error());
				while($DataROW03 = mysql_fetch_array($DataSQL03)){
					echo "<tr class='$DespachoStyle' ><td style='text-align:right'></td><td></td><td>&nbsp;&nbsp;".$DataROW03["CostoSec"]." Bs. ".$DataROW03["Nombre"]."</td></tr>";
					$DataResult = $DataResult + $DataROW03["CostoSec"];
				}
			}
		// 
	}
	echo "</table>";
	echo "<br><hr><p style='text-align:right'>Total: ".$DataResult." Bs.</p>
	<script>
	var data = '".$DataROW00["IdOrden"]."';
	</script>
	";
}
?>
<input type="hidden" id="data01" name="data01" value="<?php echo $Data;?> " />
<input type="hidden" id="data01IdOrden" name="data01IdOrden" value="<?php echo $DataROW00["IdOrden"];?> " />
<!--
<select id="ActualizarEstado" name="ActualizarEstado">
<option value="1">Editando</option>
<option value="2">Procesando</option>
<option value="3">En Cocina</option>
<option value="4">Despachando</option>
<option value="5">Mesa libre</option>
</select>-->
<div id="LoadAct"></div>
</div>
<script type="text/javascript">
$("#VerMesa").dialog({
	modal:true,
	buttons:{
		Cambiar:function(){
			data00 = "data="+data;
			$.ajax({
				type: "POST",
				url: "funciones/funcion02010402.php",
				data: data00,
				beforeSend:function(){
					$("#LoadAct").html("<center><span style='color:green'>Cargando...</span></center>").slideDown(300);
				},
				error:function(){
					$("#LoadAct").html("<center><span style='color:red'>Error...</span></center>").delay(1200).fadeOut(300);
				},
				success:function(data){
					$("#LoadAct").html(data);
					ContentMod = $(".content-mod");
					sizex = ContentMod.width();
					sizey = ContentMod.height();
					sizexx = sizex/4;
					sizeyy = sizey;
					sizexx = "-"+sizexx+"px";
					sizeyy = "-"+sizeyy+"px";
					ContentMod
						.css("position","absolute")
						.css("top","50%")
						.css("left","50%")
						.css("margin-left",sizeyy)
						.css("margin-top",sizexx);
				}
			});
		},
		/*Actualizar:function(){
			DataString = "Data=+"+$("#ActualizarEstado").val()+"&&Data01="+$("#data01").val();
			$.ajax({
				type: "POST",
				url: "funciones/funcion02010401.php",
				data: DataString,
				beforeSend:function(){
					$("#LoadAct").html("<center><span style='color:green'>Cargando...</span></center>").slideDown(300);
				},
				error:function(){
					$("#LoadAct").html("<center><span style='color:red'>Error...</span></center>").delay(1200).fadeOut(300);
				},
				success:function(data){
					$("#LoadAct").html(data).delay(1200).fadeOut(300);
				}
			});
		},*/
		Eliminar:function(){
			DataString = "data00="+$("#data01IdOrden").val();
			$("#LoadAct").html("<div id='Confirmar' title='Borrar orden'>¿Desea borrar la orden?</div>");
			$("#Confirmar").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				},
				buttons:{
					Aceptar:function(){
						$.ajax({
							type: "POST",
							url: "funciones/funcionD01.php",
							data: DataString,
							beforeSend:function(){
								$("#LoadAct").html("<center><span style='color:green'>Cargando...</span></center>").slideDown(300);
							},
							error:function(){
								$("#LoadAct").html("<center><span style='color:red'>Error...</span></center>").delay(1200).fadeOut(300);
							},
							success:function(data){
								$("#OrdenarCheck").html(data);
								$("#Confirmar").dialog("close");
							}
						});
					},
					Cancelar:function(){
						$("#Confirmar").dialog("close");
					}
				}
			});
		}
	},
	width:450,
	close: function(){
		$(this).remove();
	}
});
// $("#ActualizarEstado").val(Estado);
</script>
<style type="text/css">
#ActualizarEstado{
	padding: 5px;
	border: 1px solid silver;
	border-radius: 4px;
}
#ActualizarEstado:focus{
	border:1px solid #FF8015;
	box-shadow: 3px 3px 3px black;
}
#LoadAct{
	font-style: italic;
	display: none;
}
.despacho-style{
	color: green;
	font-weight: bold;
}
</style>