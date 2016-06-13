<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
<span id="indexAdminGeneral"></span>
<div style="position:absolute;right: 100px">
<a href="#indexAdminGeneral" class="VIndiceReporte">Indice</a>
</div>
<style>
.VIndiceReporte{
	position: fixed;
	z-index: 20;
}
</style>
<script>
$(".VIndiceReporte").button();
$(document).ready(function(){
	$(".guia-index li").click(function(){
		data = "./"+$(this).find("a").attr("href");
		window.location.replace(data);
	});
});
</script>
<ul class="guia-index">
	<li><a href="#AdminResumen">Resumen</a></li>
	<li><a href="#AdminUsuario">Usuarios</a></li>
	<li><a href="#AdminRoles">Roles</a></li>
</ul>
<hr>
<h5 id="AdminResumen">Resumen</h5>
<p class="DatosGuia">
En este apartado podemos ingresamos, modificar y borrar roles y/o usuarios. <br><br>
<img src="img/Guia/Administrador/Administrador00.png" class="ImgGuia" style="width:80%"><br>

</p>
<h5 id="AdminUsuario">Usuarios</h5>
<p class="DatosGuia">
Esta apartado posee tres (3) pestañas <b>"Activo"</b>, <b>"Modificar"</b> e <b>"Ingresar"</b>. <br><br>
<ul class="guia-index">
	<li><a href="#AdminDosVUser">Ver usuario</a></li>
	<li><a href="#AdminDosEUser">¿Cómo editar usuario?</a></li>
	<li><a href="#AdminDosIUser">¿Cómo ingresar un Usuario?</a></li>
	<li><a href="#AdminBorrarUser">¿Cómo borrar un Usuario?</a></li>
</ul>
<hr>
<h5 id="AdminDosVUser">Ver usuario</h5>
<p class="DatosGuia">
Para ver un usuario nos situamos en la pestaña de <b>"Activos"</b>, bien podemos buscar en tabla principal el usuario que 
deseas ver o presionar en el botón <b>"Buscar Usuario"</b>. <br><br>
<img src="img/Guia/Administrador/Administrador01.png" class="ImgGuia" style="width:80%"><br><br>
Si presionamos el botón <b>"Buscar Usuario"</b> no saldrá la siguiente ventana, y en el campo de texto ingresaremos el usuario a buscar. <br><br>
<img src="img/Guia/Administrador/Administrador02.png" class="ImgGuia" style="width:80%"><br><br>
Seleccionamos el usuario ya sea a través de la tabla o el buscador, nos saldrá la siguiente ventana con los datos de usuario. <br> <br>
<img src="img/Guia/Administrador/Administrador03.png" class="ImgGuia" style="width:60%"><br><br>
</p>
<h5 id="AdminDosEUser">¿Cómo editar usuario?</h5>
<p class="DatosGuia">
Para editar un usuario, podemos presionar el botón de edición que esta en la fila del usuario en la tabla que se encuentra en la pestaña <b>"Modificar"</b> o con el botón buscar<br><br>
<img src="img/Guia/Administrador/Administrador04.png" class="ImgGuia" style="width:80%"><br><br>
Al seleccionar nos saldrá la siguente ventana. <br> <br>
<img src="img/Guia/Administrador/Administrador05.png" class="ImgGuia" style="width:45%"><br><br>
Después de hacer los cambios necesarios presionamos el botón <b>"Guardar cambios"</b> y nos saldrá una ventana de confirmación. <br><br>
<img src="img/Guia/Administrador/Administrador06.png" class="ImgGuia" style="width:45%"><br><br>
</p>
<h5 id="AdminDosIUser">¿Cómo ingresar Usuario?</h5>
En la pestaña ingresar presionamos el botón <b>"Crear nuevo usuario"</b>. <br><br>
<img src="img/Guia/Administrador/Administrador07.png" class="ImgGuia" style="width:80%"><br><br>
Nos saldrá una ventana para ingresar los datos del usuario. <br><br>
<img src="img/Guia/Administrador/Administrador08.png" class="ImgGuia" style="width:45%"><br><br>
Presionamos <b>"Guardar cambios"</b> luego nos saldrá una ventana indicandos los datos del usuario ingresado. <br><br>
<img src="img/Guia/Administrador/Administrador09.png" class="ImgGuia" style="width:45%"><br><br>
</p>
<h5 id="AdminBorrarUser">¿Cómo borrar un usuario?</h5>
<p class="DatosGuia">
Para borrar procedemos a presionar el botón de papelera situado al lado del botón de editar en la fila del usuario que se desea borrar. <br><br>
<img src="img/Guia/Administrador/Administrador04.png" class="ImgGuia" style="width:80%"><br><br>
Nos saldrá un aviso preguntando <b>"¿Deseas borrar al usuario "Nombre de usuario"?"</b> <br><br>
<img src="img/Guia/Administrador/Administrador10.png" class="ImgGuia" style="width:45%"><br><br>
Si se desea borrar presionamos <b>"Aceptar"</b> y el sistema nos arrojará un aviso comprobando la acción. <br> <br>
<img src="img/Guia/Administrador/Administrador11.png" class="ImgGuia" style="width:45%"><br><br>
</p>
<h5 id="AdminRoles">Roles</h5>
<p class="DatosGuia">
<ul class="guia-index">
	<li><a href="#ResumenRoles">Resumen</a></li>
	<li><a href="#VRoles">Ver roles activos</a></li>
	<li><a href="#ERoles">Editar roles</a></li>
	<li><a href="#IRoles">Ingresar roles</a></li>
</ul>
<h5 id="ResumenRoles">Resumen</h5>
Los roles de usuario es un módulo para gestionar los permisos de cada usuario en el sistema, en el cuál cada usuario será asignado a un 
rol y cada rol tendrá permisos específicos que otorgue el administrador, por defecto vienen dos tipos de roles, <b>"Administrador"</b> 
tiene control total del sistema y no se puede modificar y mesonero viene con algunos permisos que pueden ser editables, además que también 
pueden ser añadidos más roles de usuario. Este módulo muestra tres (3) pestañas <b>"Activos"</b>, <b>"Modificar"</b> e <b>"Ingresar"</b>. <br><br>
<img src="img/Guia/Roles/Roles00.png" class="ImgGuia" style="width:80%"><br><br>
</p>

<h5 id="VRoles">Ver roles activos</h5>
<p class="DatosGuia">
Para ver los roles activos nos posicionamos en la pestaña de <b>"Activos"</b> alli veremos los roles que se encuentran activos en el 
sistema y ademas la cantidad de usuario con ese rol. <br><br>
<img src="img/Guia/Roles/Roles01.png" class="ImgGuia" style="width:45%"><br><br>
Podemos darle click a uno de los roles y ver los permisos que tiene el rol. <br><br>
<img src="img/Guia/Roles/Roles02.png" class="ImgGuia" style="width:45%"><br><br>
</p>

<h5 id="ERoles">Editar roles</h5>
<p class="DatosGuia">
Para editar un rol de usuario nos posicionamos en la pestaña de Modificar, nos saldrá la lista de los roles. <br><br>
<img src="img/Guia/Roles/Roles03.png" class="ImgGuia" style="width:45%"><br><br>
Presionamos en el rol que queramos modificar y nos saldrá la siguiente ventana con los permisos disponibles. <br><br>
<img src="img/Guia/Roles/Roles04.png" class="ImgGuia" style="width:55%"><br><br>
Seleccionamos o quitamos los permisos que se desea otorgar y presionamos <b>"Guardar Cambios"</b>, nos saldrá una ventana confirmando la acción.<br><br>
<img src="img/Guia/Roles/Roles05.png" class="ImgGuia" style="width:45%"><br><br>
</p>

<h5 id="IRoles">Ingresar roles</h5>
<p class="DatosGuia">
Para ingresar un rol de usuario, ingresamos a la pestaña de <b>"Ingresar"</b> habrá un único botón. <br><br>
<img src="img/Guia/Roles/Roles06.png" class="ImgGuia" style="width:25%"><br><br>
Lo presionamos y nos saldrá la ventana siguiente. <br> <br>
<img src="img/Guia/Roles/Roles07.png" class="ImgGuia" style="width:55%"><br><br>
Ingresamos el nombre del rol y le damos los permisos que se desee y presionamos el botón <b>"Ingresar"</b>, luego nos saldrá una ventana confirmando el ingreso. <br><br>
<img src="img/Guia/Roles/Roles08.png" class="ImgGuia" style="width:45%"><br><br>
</p>
</div>