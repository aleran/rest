<?php
require("../config/config00.php");
$ContadorUsuarios=$_POST['paginasMod'];
$UsuariosActivosSQL = "SELECT * FROM data02 WHERE id!='1' LIMIT $ContadorUsuarios , 5";
$UsuariosActivosSQL = mysql_query($UsuariosActivosSQL);
$iuser=0;
while($UsuariosActivosROW = mysql_fetch_array($UsuariosActivosSQL)){
	$estilo="user-color";
	if($UsuariosActivosROW["Estado"]=="0"){
		$estilo = "ui-state-error ui-black";
	}
	$sqlnoborrar = "select * from data06 where IdOperador='".$UsuariosActivosROW["CodigoTbr"]."'";
	$sqlnoborrar = mysql_query($sqlnoborrar);
	$pp=0;
	while($rowno = mysql_fetch_object($sqlnoborrar)){
		$pp++;
	}
	echo "<tr class='$estilo'>
		  <td style='padding:0'>".$UsuariosActivosROW["CodigoTbr"]."</td>
		  <td style='padding:0'>".$UsuariosActivosROW["Cedula"]."</td>
		  <td style='padding:0'>".$UsuariosActivosROW["PrimerNombre"]." ".$UsuariosActivosROW["SegundoNombre"]." ".$UsuariosActivosROW["PrimerApellido"]." ".$UsuariosActivosROW["SegundoApellido"]."</td>
		  <td style='padding:0'>".$UsuariosActivosROW["Usuario"]."</td>
		  <td style='width:20%;padding:2px'>
		  <img src='img/edit.png' class='mod-user' id='".$UsuariosActivosROW["CodigoTbr"]."'/>";
		  if($pp==0):
		  echo "<img src='img/delete.png'
		  data-name='".$UsuariosActivosROW["PrimerNombre"]." ".$UsuariosActivosROW["SegundoNombre"]." ".$UsuariosActivosROW["PrimerApellido"]." ".$UsuariosActivosROW["SegundoApellido"]."'
		   class='del-user' id='".$UsuariosActivosROW["CodigoTbr"]."'/>";
		   endif;
		  echo "</td>
		  </tr>";
	$iuser++;
}
if($iuser==0){
	echo "<tr><td colspan='5'>No hay usuarios registrados</td></tr>";
}
$PageTope=0;
$PageTopeSQL = "SELECT * FROM data02 WHERE id!='1'";
$PageTopeSQL = mysql_query($PageTopeSQL);
while($PageTopeROW = mysql_fetch_array($PageTopeSQL)){
	$PageTope++;
}
echo "
<script>
paginaTopeMod=$PageTope;
</script>
";
?>
<script type="text/javascript" src="js/subfuncionB102.js"></script>
<script>
$(".del-user").click(function(){
	id = $(this).attr("id");
	texto = $(this).attr("data-name");
	$(this).before("<div id='borrar-user' title='Borrar usuario'>¿Deseas borrar al usuario <b>"+texto+"</b>?</div>");
	$("#borrar-user").dialog({
		modal:true,
		buttons:{
			Aceptar:function(){
				$.ajax({
					type:"post",
					url:"funciones/funcionMoUser.php",
					data:{data:id,name:texto},
					success:function(user){
						$("#searchresuluserdataLo").html(user);
						$("#borrar-user").dialog("close");
					}
				});
			},
			Cancelar:function(){
				$(this).dialog("close");
			}
		},
		close:function(){
			$(this).remove();
		}
	});
});
</script>
