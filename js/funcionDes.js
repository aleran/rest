function reajaxCaja(){
	$.ajax({
		url: "funciones/funcionDes01.php",
		beforeSend:function(){
			// $("#ShowOrdenActiveCaja").html("Cargando...");
		},
		error:function(){
			$("#ShowOrdenActiveCaja").html("Error...");
		},
		success:function(data){
			$("#ShowOrdenActiveCaja").html(data);
		}
	});
}
reajaxCaja();

setInterval(reajaxCaja,5000);

$(".btn-print").button();
$("#back-ordenlist").click(function(){
	$("#ShowOrdenActiveCaja").fadeIn();
	$("#show_print").fadeOut(0);
});
$("#show_print").fadeOut(0);
$("#imprimir-text").click(function(){
	imprimir_orden();
});
function imprimir_orden(){
	var ficha = document.getElementById('content_print');
	var ventimp = window.open('','popimpr');
	ventimp.document.write(ficha.innerHTML);
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
}