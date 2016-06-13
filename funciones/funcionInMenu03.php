<!-- <button class="MenuAdd" id="SeacrhMenu"><span class="octicon octicon-search"></span> Buscar</button> -->
<b><label>Menús</label></b>
<br><br>
<button class="MenuAdd" id="MenuAdd"><span class="octicon octicon-diff"></span> Agregar</button>
<table id="Menus">
	<thead>
		<th>Menú</th>
		<th>Estado</th>
		<th>Seleccionar</th>
		<th>Editar</th>
		<th>Borrar</th>
	</thead>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

// $MenuSQL = "SELECT * FROM data17 WHERE Activo='1' ORDER BY id DESC limit 10";
$MenuSQL = "SELECT * FROM data17 WHERE Activo='1' ORDER BY id DESC";
$CategoriaSQL = "SELECT * FROM data10";
$MenuSQL = mysql_query($MenuSQL);
$CategoriaSQL = mysql_query($CategoriaSQL);
$ite = 0;
while($MenuROW = mysql_fetch_object($MenuSQL)):
	$ite++;
	$select="";
	if($MenuROW->Estado=="1"){
		$select = "<span class='octicon octicon-check'></span>";
	}
	echo "<tr><td id='name".$MenuROW->id."'>".$MenuROW->NombreMenu."</td><td>$select</td><td><span class='octicon octicon-desktop-download select-menu' data='".$MenuROW->id."'></span></td><td><span class='octicon octicon-pencil editar-menus' data='".$MenuROW->id."'></span></td><td><span class='octicon octicon-trashcan delete-menu' data='".$MenuROW->id."'></span></td></tr>";
endwhile;
if($ite==0){
	echo "<tr><td colspan='4'>¡No hay ningún menú!</td></tr>";
}
?>
</table>
<div id="NuevoMenus"></div>
<div id="Selected"></div>
<b><label>Categorías</label></b>
<br><br>
<button class="MenuAdd" id="AddCategoria"><span class="octicon octicon-diff"></span> Agregar</button>
<table id="CategoriasMenu">
	<thead>
		<th>Categorias</th>
		<th>Editar</th>
		<!-- <th>Borrar</th> -->
	</thead>
	<?php 
	while($CategoriaRow = mysql_fetch_object($CategoriaSQL)){
		$EstadoCategoria = "";
		if($CategoriaRow->Estado==0){
			$EstadoCategoria = "c-inactivo ";
		}
		echo "<tr class='$EstadoCategoria'><td id='Cname".$CategoriaRow->id."'>".$CategoriaRow->Nombre."</td><td><span class='octicon octicon-pencil editar-categoria' data='".$CategoriaRow->id."'></span></td><!-- <td><span class='octicon octicon-trashcan delete-categoria' data='".$CategoriaRow->id."'></span></td> --></tr>";
	}
	 ?>
</table>
<br><br>
<style>
#Menus, #CategoriasMenu{
	border: 1px solid silver;
	border-radius: 4px;
	margin: 0 auto;
}
#Menus thead, #CategoriasMenu thead{
	background-color: #d8d8d8;
}
#Menus tr:hover, #CategoriasMenu tr:hover{
	background-color: #d8d8d8;
}
#Menus td, #CategoriasMenu td{
	border: 1px solid silver;
	text-align: center;
	padding: 5px;
}
#Menus th, #CategoriasMenu th{
	padding: 5px;
	border: 1px solid #d8d8d8;
}
.select-menu:hover, .editar-categoria:hover, .editar-menus:hover, .delete-categoria:hover, .delete-menu:hover{
	color:blue;
}
.select-menu, .editar-categoria, .delete-categoria, .delete-menu{
	cursor: pointer;
}
.editar-menus{
	cursor: pointer;
}
.c-inactivo{
	background-color: #d8d8d8;
}
</style>

<script>
NuevoMenus = $("#NuevoMenus");
$(".MenuAdd").button();
$("#MenuAdd").click(function(){
	$.ajax({
		url:"funciones/funcionInMenu01.php",
		beforeSend:function(){
			NuevoMenus.html("Cargando...");
		},
		success:function(ventana){
			NuevoMenus.html(ventana);
		}
	});
});
$("#AddCategoria").click(function(){
	$.ajax({
		url:"funciones/funcionInMenu05.php",
		beforeSend:function(){
			NuevoMenus.html("Cargando...");
		},
		success:function(ventana){
			NuevoMenus.html(ventana);
		}
	});
});
$(".select-menu").click(function(){
	dataid = $(this).attr("data");
	$.ajax({
		type:"post",
		url:"funciones/funcionInMenu04.php",
		data:{
			data_id:dataid
		},
		success:function(selected){
			$("#Selected").html(selected);
			cargamenu();
		}
	});
});
$(".editar-menus").click(function(){
	id = $(this).attr("data");
	$.ajax({
		type:"post",
		url:"funciones/funcionInMenu07.php",
		data:{
			id:id
		},
		success:function(edit){
			NuevoMenus.html(edit);
		}
	});
});
$(".editar-categoria").click(function(){
	id = $(this).attr("data");
	$.ajax({
		type:"post",
		url:"funciones/funcionInMenu09.php",
		data:{
			id:id
		},
		success:function(edit){
			NuevoMenus.html(edit);
		}
	});
});
// $("#Menus").button();
$(".delete-menu").click(function(){
	data_id = $(this).attr("data");
	name_this = $("#name"+data_id).text();
	data_div = $(this);
	promt = "<div title='¡Aviso!' id='promt-delete'>¿Deseas borrar el menú <b>"+name_this+"</b>?</div>";
	$(this).before(promt);
	$("#promt-delete").dialog({
		modal:true,
		buttons:{
			Borrar:function(){
				$.ajax({
					type:"post",
					url:"funciones/funcionInMenu11.php",
					data:{
						id:data_id
					},
					success:function(action){
						data_div.html(action);
						$("#promt-delete").remove();
					}
				});
			},
			Cancelar:function(){
				$(this).remove();
			}
		},
		close:function(){
			$(this).remove();
		}
	});
});
</script>