$(document).ready(function () {
	//Initialize tooltips
	$('.nav-tabs > li a[title]').tooltip();
	
	//Wizard
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

		var $target = $(e.target);
	
		if ($target.parent().hasClass('disabled')) {
			return false;
		}
	});

	$(".next-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		$active.next().removeClass('disabled');
		nextTab($active);

	});
	$(".prev-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		prevTab($active);

	});
});

function nextTab(elem) {
	switch ($(elem).attr("id")) {
		case "0":
			verifStep0($(elem));
			break;
		case "1":
			verifStep1($(elem));
			break;
		case "2":
			verifStep2($(elem));
			break;
		case "3":
			verifStep3($(elem));
			break;
		case "4":
			verifStep4($(elem));
			break;
		case "5":
			verifStep5($(elem));
			break;
		default:
	}

	$(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
	$(elem).prev().find('a[data-toggle="tab"]').click();
}

function verifStep0(elem) {
	var b_noError=true;
	($('#span_step_0').removeClass("notvalid"));
	($('#span_step_0').addClass("valid"));
	return b_noError;
}

function verifStep1(elem) {
	($('#erreurs_step_1').html(""));//initialisation du message
	var b_noError=true;
	
	($('#erreurs_step_1').html(
		($('#erreurs_step_1').html())+("il vous manque de preciser :")
		)
	);
	if($('#sce_userbundle_jen_intitule').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Intitule de votre jeu")
			)
		);
	}
	if($('#sce_userbundle_jen_nbEnseignants').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Nombre d'enseignants participant dans votre jeu")
			)
		);
	}
	if($('#sce_userbundle_jen_nbEtudiants').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Nombre d'entudiants participant dans votre jeu")
			)
		);
	}
	if($('#sce_userbundle_jen_nbActeurs').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Nombre d'acteurs participant dans votre jeu")
			)
		);
	}
	if($('#sce_userbundle_jen_outils').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Liste des outils à mettre en disposition")
			)
		);
	}
	if($('#sce_userbundle_jen_dispositifs').val() == ''){
		b_noError=false;
		($('#erreurs_step_1').html(
			($('#erreurs_step_1').html())+("<br/>* Liste des dispositifs à mettre en disposition")
			)
		);
	}


	if(!b_noError){
		if (($('#message_step_1').hasClass("hide"))){
			($('#message_step_1').removeClass("hide"));
		}
		($('#span_step_1').removeClass("valid"));
		($('#span_step_1').addClass("notvalid"));
	} else {
		if (!($('#message_step_1').hasClass("hide"))){
			($('#message_step_1').addClass("hide"));
			($('#erreurs_step_1').html(""));
		}
		($('#span_step_1').removeClass("notvalid"));
		($('#span_step_1').addClass("valid"));
	}
	return b_noError;
}

function verifStep2(elem) {
	($('#erreurs_step_2').html(""));//initialisation du message
	var b_noError=true;
	
	($('#erreurs_step_2').html(
		($('#erreurs_step_2').html())+("il vous manque de preciser :")
		)
	);

	b_noError=false;

	if(!b_noError){
		if (($('#message_step_2').hasClass("hide"))){
			($('#message_step_2').removeClass("hide"));
		}
		($('#span_step_2').removeClass("valid"));
		($('#span_step_2').addClass("notvalid"));
	} else {
		if (!($('#message_step_2').hasClass("hide"))){
			($('#message_step_2').addClass("hide"));
			($('#erreurs_step_2').html(""));
		}
		($('#span_step_2').removeClass("notvalid"));
		($('#span_step_2').addClass("valid"));
	}
	return b_noError;
}

function verifStep3(elem) {
	($('#erreurs_step_3').html(""));//initialisation du message
	var b_noError=true;
	
	($('#erreurs_step_3').html(
		($('#erreurs_step_3').html())+("il vous manque de preciser :")
		)
	);

	b_noError=false;

	if(!b_noError){
		if (($('#message_step_3').hasClass("hide"))){
			($('#message_step_3').removeClass("hide"));
		}
		($('#span_step_3').removeClass("valid"));
		($('#span_step_3').addClass("notvalid"));
	} else {
		if (!($('#message_step_3').hasClass("hide"))){
			($('#message_step_3').addClass("hide"));
			($('#erreurs_step_3').html(""));
		}
		($('#span_step_3').removeClass("notvalid"));
		($('#span_step_3').addClass("valid"));
	}
	return b_noError;
}

function verifStep4(elem) {
	($('#erreurs_step_4').html(""));//initialisation du message
	var b_noError=true;
	
	($('#erreurs_step_4').html(
		($('#erreurs_step_4').html())+("il vous manque de preciser :")
		)
	);

	b_noError=false;

	if(!b_noError){
		if (($('#message_step_4').hasClass("hide"))){
			($('#message_step_4').removeClass("hide"));
		}
		($('#span_step_4').removeClass("valid"));
		($('#span_step_4').addClass("notvalid"));
	} else {
		if (!($('#message_step_4').hasClass("hide"))){
			($('#message_step_4').addClass("hide"));
			($('#erreurs_step_4').html(""));
		}
		($('#span_step_4').removeClass("notvalid"));
		($('#span_step_4').addClass("valid"));
	}
	return b_noError;
}

function verifStep5(elem) {
	($('#erreurs_step_5').html(""));//initialisation du message
	var b_noError=true;
	
	($('#erreurs_step_5').html(
		($('#erreurs_step_5').html())+("il vous manque de preciser :")
		)
	);

	b_noError=false;

	if(!b_noError){
		if (($('#message_step_5').hasClass("hide"))){
			($('#message_step_5').removeClass("hide"));
		}
		($('#span_step_5').removeClass("valid"));
		($('#span_step_5').addClass("notvalid"));
	} else {
		if (!($('#message_step_5').hasClass("hide"))){
			($('#message_step_5').addClass("hide"));
			($('#erreurs_step_5').html(""));
		}
		($('#span_step_5').removeClass("notvalid"));
		($('#span_step_5').addClass("valid"));
	}
	return b_noError;
}