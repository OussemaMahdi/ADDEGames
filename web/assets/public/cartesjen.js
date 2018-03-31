$(document).ready(function() {
	$( "#carte_tangible" ).click(function() {
		alert( "Cette fonctionnalité n'est pas encore disponible" );
	});

	$( "#carte_numerique").click(function() {
		$('div#container_cartesjen').toggleClass( "hidden");
	});
});