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

$DataSQL01 = "select * from vista06 where Orden='$DataROW00[IdOrden]' ";
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
		Estado = "<?php echo $DataROW00['EstadoActual'];?>";
	</script>
	<b>Número de Orden: </b><?php echo $DataROW00["IdOrden"];?>
	<hr>
	<b>Ordenes: </b><br>
	<table style="font-size:90%">
	<?php
	while($DataROW01 = mysql_fetch_array($DataSQL01)){
		echo "<tr><td style='text-align:right'>".$DataROW01["DeCosto"]." Bs.</td><td>[$DataROW01[Cantidad]]</td><td>".$DataROW01["Nombre"]."</td></tr>";
		$DataResult = $DataResult + ($DataROW01["DeCosto"]*$DataROW01["Cantidad"]);
	}
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		$IdPer = $DataROW02["IdPerCan"];
		if($IdPer!=""){
				echo "<tr><td style='text-align:right'></td><td colspan='2'><b>Plato Personalizado</b></td></tr>";
				$DataSQL03 = "select * from vista07 where IdPersolizado='$IdPer' ";
				$DataSQL03 = mysql_query($DataSQL03) or die (mysql_error());
				while($DataROW03 = mysql_fetch_array($DataSQL03)){
					echo "<tr><td style='text-align:right'></td><td></td><td>&nbsp;&nbsp;".$DataROW03["CostoSec"]." Bs. ".$DataROW03["Nombre"]."</td></tr>";
					$DataResult = $DataResult + $DataROW03["CostoSec"];
				}
			}
		// 
	}
	echo "</table>";
	echo "<br><hr><p style='text-align:right'>Total: ".$DataResult." Bs.</p>
		<input type='hidden' id='t2' value='".$DataResult."'>
	<script>
	var data = '$DataROW00[IdOrden]';
	</script> 
	";//total de orden arriba
	echo"<b>Forma de pago:</b><br><br>";
	echo"Efectivo<input type='number' name='efectivo' id='efectivo' class='calc' value='0'>Bs.<br><br>";
	echo"Debito<input type='number' name='debito' id='debito' class='calc' value='0'> Bs.<br><br>";
	echo"Credito<input type='number' name='credito' id='credito' class='calc' value='0'> Bs.";
	echo"<br><br><span id='falta'></span>";

	
}
?>
<input type="hidden" id="data01" name="data01" value="<?php echo $Data;?> " />
<input type="hidden" id="data01IdOrden" name="data01IdOrden" value="<?php echo $DataROW00["IdOrden"];?> " />
<!-- <select id="ActualizarEstado" name="ActualizarEstado"> -->
<!-- <option value="1">Editando</option> -->
<!-- <option value="2">Procesando</option> -->
<!-- <option value="3">En Cocina</option> -->
<!-- <option value="4">Despachando</option> -->
<!-- <option value="5">Mesa libre</option> -->
<!-- </select> -->
<div id="LoadAct"></div>
</div>
<style>
	.hidden {
		display: none;
	}
	#falta {
		color:red#FF0000;
		font-size: 40px;
	}
</style>
<script>


		

		

			
			$(".calc").keyup(function(){
				var efec = parseInt($('#efectivo').val());
		 		var deb = parseInt($('#debito').val());
				var cre = parseInt($('#credito').val());
				var total = efec+deb+cre;
				console.log(total);
				var tot2 = parseInt($('#t2').val());
				console.log(tot2);
				if (total < tot2) {
					$("#falta").html("Falta dinero!!"tot2);
					$(".ui-button-text-only").addClass("hidden");
				}
				if(total > tot2) {
					$("#falta").html("El pago del cliente es mayor al monto a cancelar");
					$(".ui-button-text-only").addClass("hidden");
				}
				if(total == tot2) {
					$("#falta").html("");
					$(".ui-button-text-only").removeClass("hidden");

				}
			})
			
		</script>";
<script type="text/javascript">
$("#VerMesa").dialog({
	modal:true,
	buttons:{
		"Mesa Libre":function(){
			DataString = "Data=5&&Data01="+$("#data01").val()+"&&"+"efec="+$("#efectivo").val()+"&&"+"deb="+$("#debito").val()+"&&"+"cre="+$("#credito").val();
			$.ajax({
				type: "POST",
				url: "funciones/funcion02010401.php?",
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
		},
		"Imprimir":function(){
			$("#VerMesa").dialog("close");
			$("#show_print").fadeIn();
			$("#ShowOrdenActiveCaja").fadeOut(0);
			$.ajax({
				type:"post",
				url:"funciones/funcionDes03.php",
				data:"Data=<?=$Data?>",
				success:function(success){
					$("#content_print").html(success);
				}
			});
		}
/*		Eliminar:function(){
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
		}*/
	},
	width:450,
	close: function(){
		$(this).remove();
	}
});
$("#ActualizarEstado").val(Estado);
	

</script>
<script>
	$(".ui-button-text-only").addClass("hidden");
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
</style>