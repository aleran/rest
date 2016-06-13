$(function(){
	var dialog, form,
	emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
	PrimerNombre,
	SegundoNombre,
	PrimerApellido,
	SegundoApellido,
	Usuario,
	password,
	passwordCheck,
	allFields = $( [] ).add( PrimerNombre ).add( SegundoNombre ).add( PrimerApellido ).add( SegundoApellido ).add( Usuario ).add( password ),
	tips = $( ".validateTips" );
	
	function updateTips( t ) {
		tips
		.text( t )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}
	
	function checkLength( o, n, min, max ) {
		if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "El tamaño del " + n + " debe constar entre " +
			min + " y " + max + "." );
			return false;
			}
		else{
			return true;
		}
	}
	
	function checkRegexp( o, regexp, n ) {
		if ( !( regexp.test( o.val() ) ) ) {
			o.addClass( "ui-state-error" );
			updateTips( n );
			return false;
		}
		else{
			return true;
		}
	}
	
	function check_password(password01,password02){
		v01 = password01.val();
		v02 = password02.val();
		if(v01.length!=0 && v02.length!=0){
			if(v01==v02){
				return true;
			}
			else{
				password01.addClass("ui-state-error");
				password02.addClass("ui-state-error");
				updateTips("¡Contraseñas no coinciden!");
				return false;
			}
		}
		if(v01.length!=0 && v02.length==0){
			password02.addClass("ui-state-error");
			updateTips("¡Vuelva a ingresar nuevamente la contraseña!");
			return false;
		}
		if(v01.length==0 && v02.length!=0){
			password01.addClass("ui-state-error");
			updateTips("¡Ingrese su nueva contraseña!");
			return false;
		}
	}

	function addUser() {
		var valid = true;
		$("input").removeClass( "ui-state-error" );

		valid = valid && checkLength( PrimerNombre, "Primer Nombre", 3, 16 );
		valid = valid && checkLength( PrimerApellido, "Primer Apellido", 3, 16 );
		valid = valid && checkLength( Usuario, "Usuario", 3, 16 );
		if(password.val().length!=0 || passwordCheck.val().length!=0){
			valid = valid && check_password(password,passwordCheck);
		}
		if(password.val().length!=0){
			valid = valid && checkLength( password, "contraseña", 3, 16 );
			valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "La contraseña debe constar de: a-z 0-9" );
		}

		valid = valid && checkRegexp( PrimerNombre, /^[a-z]([a-z_\sáéíóúÁÉÍÓÚñÑ])+$/i, "El primer nombre debe constar de caracteres alfabéticos" );
		valid = valid && checkRegexp( PrimerApellido, /^[a-z]([a-z_\sáéíóúÁÉÍÓÚñÑ])+$/i, "El primer apellido debe constar de caracteres alfabéticos" );
		valid = valid && checkRegexp( Usuario, /^[a-z]([0-9a-z_\s])+$/i, "El usuario debe constar de caracteres alfanuméricos a-z, 0-9." );
		

		if (valid){
			$.ajax({
				type: 'POST',
				url: 'funciones/subfuncionB010202.php',
				data: $('#ModUsuarioSistema').serialize(),
				beforeSend: function(){
					$('#cargadatos').fadeIn(0);
					$('#cargadatos').html('<div class="full"><div class="load"><img src="img/loading.gif" width="100px"></div></div>');
				},
				success: function(data){
					$('#cargadatos').html(data);
					usersMod(paginaMod);
				}
			});
			dialog.dialog( "close" );
		}
		return valid;
	}
	dialog = $( "#dialogform" ).dialog({
		autoOpen: false,
		height: 610,
		width: 460,
		modal: true,
		buttons: {
			"Guardar cambios": addUser,
			Cancel: function() {
			dialog.dialog( "close" );
			}
		},
		show: {
			effect: "scale",
			duration: 300
		},
		close: function() {
			allFields.removeClass( "ui-state-error" );
		}
	});

	form = dialog.find( "form" ).on( "submit", function( event ) {
		event.preventDefault();
		addUser();
	});
	
	$(".mod-user").click(function(){
		id=this.id;
		var dataString = 'id='+id;
		$.ajax({
			type: 'POST',
			url: 'funciones/subfuncionB010201.php',
			data: dataString,
			beforeSend: function () {
			},
			success: function(data) {
				$('#editarusuario').html(data);
				PrimerNombre=$("#PrimerNombre")
				SegundoNombre=$("#SegundoNombre");
				PrimerApellido=$("#PrimerApellido");
				SegundoApellido=$("#SegundoApellido");
				Usuario = $("#Usuario");
				password = $("#password");
				passwordCheck = $("#passwordCheck");
			}
		});
		$('#dialogform').dialog( "open" );
		
	});
});
function permite(elEvento, permitidos, idelement, elemento) {
$("input").removeClass( "ui-state-error" );
var tps = $( ".validateTips" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "<>=-+,_@\"";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 39, 40, 46];
switch(permitidos) {
	case 'num':
		permitidos = numeros;
		break;
	case 'car':
		permitidos = caracteres;
		break;
	case 'num_car':
		permitidos = numeros_caracteres;
		break;
	case 'esp':
		permitidos = espe_car_nume;
		break;
}
var evento = elEvento || window.event;
var codigoCaracter = evento.charCode || evento.keyCode;
var caracter = String.fromCharCode(codigoCaracter);
var tecla_especial = false;
for(var i in teclas_especiales) {
	if(codigoCaracter == teclas_especiales[i]) {
		tecla_especial = true;
	}
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=39 && codigoCaracter!=40 && codigoCaracter!=46){
		mensaje="El " + elemento + " debe constar de caracteres alfabéticos";
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tps.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
function evitar(eventos){
	return false;
}
function capitalize(change) {
	var tmpStr;
	tmpStr = change.value.toUpperCase().charAt(0) + change.value.substring(1);
	change.value = tmpStr;
}
function resetearp(){
	var password="cio0000";
	document.getElementById("password").value = password;
	document.getElementById("passwordCheck").value = password;
}
