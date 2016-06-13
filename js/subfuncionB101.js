$(document).ready(function(){
	$("#DatosUsuarios" ).dialog({
		autoOpen: false,
		height: 330,
		width: 460,
		modal: true,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
			}
		},
		show: {
			effect: "scale",
			duration: 300
		}
	});
	$(".ver-usuario").dblclick(function(){
		id=this.id;
		var dataString = 'id='+id;
		$.ajax({
			type: 'POST',
			url: 'funciones/subfuncionB010101.php',
			data: dataString,
			beforeSend: function () {
			},
			success: function(data) {
				$('#DatosUsuarios').html(data);
			}
		});
		$('#DatosUsuarios').dialog( "open" );
	});
});
