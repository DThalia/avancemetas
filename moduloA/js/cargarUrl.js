$(document).ready(function(){

	$("#institucion").click(function(){
		$("#cuerpo").load("./institucion.php");
	});

	$("#crear_oficinas").click(function(){
		$("#cuerpo").load("./oficinas.php");
	});

	$("#crear_cargos").click(function(){
		$("#cuerpo").load("./cargos.php");
	});

	$("#agregar_personal").click(function(){
		$("#cuerpo").load("./personal.php");
	});

	$("#agregar_metas").click(function(){
		$("#cuerpo").load("./metas.php");
	});

	$("#estadisticas_oficinas").click(function(){
		$("#cuerpo").load("./estadisticas_oficinas.php");
	});

	$("#estadisticas_areas").click(function(){
		$("#cuerpo").load("./estadisticas_areas.php");
	});

});