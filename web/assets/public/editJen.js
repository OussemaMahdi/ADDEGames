$(document).ready(function() {

	var containerAddMission = $('div#add_missions');
	var containerListeMission = $('div#liste_missions');
	var addMissionLink = $('<a id="add_mission_title" class="btn btn-primary">Ajouter une mission</a>');
	containerAddMission.append(addMissionLink);
	addMissionLink.click(function(e) {
		var mIndex = addMission(containerListeMission);
		addStep(mIndex);//le formulmaire d'une mission
		missions();// mise a jour du form wizzard des missions
		e.preventDefault(); // évite qu'un # apparaisse dans l'URL
		return false;
	});

	var indexGlobal = 0; // l'index des entites ajoutés
	var index = $("#sce_userbundle_jen_missions").find(':input').length; // l'index affiché des entités

	if (index == 0) {//s'il n ya pas de mission
		var mIndex = addMission(containerListeMission); // le titre et le form wizzard
		addStep(mIndex);//le formulmaire d'une mission
		missions();// mise a jour du form wizzard des missions
	} else {
		$("div#sce_userbundle_jen_missions").children('div').each(function() {
			var mIndex = addMission(containerListeMission);// les titres
			addStepLink(mIndex);// wizard des missions
			var prototype =  $('<div class="row setup-content" id="step-'+mIndex+'"> </div>');
			$(this).wrap(prototype);
			containerImages = $(this).find("div#sce_userbundle_jen_missions_"+indexGlobal+"_images");
			$('div#liste_missions').find("#Mission-"+mIndex).val(
				$(this).find("#sce_userbundle_jen_missions_"+indexGlobal+"_titre").val()
			);
			containerImages.children('div').each(function() {
				addDeleteImageLink($(this));

				var file = $(this).find(':file');
				var input = file.parents('.input-group').find(':text');
				input.val("fichier déja ajouté");

				addFileEvent($(this));
			})
			addImageLink(indexGlobal, mIndex);
			indexGlobal++;
		});
		missions();// mise a jour du form wizzard des missions
	}

	

	// La fonction qui ajoute un Mission
	function addMission($container) {

		index = ($container.find(':input').length)+1;

		var prototype =  $('<div class="form-group" id='+ index +'> </div>');
		var label =  $('<label class="control-label">Mission '+ index +'</label>');

		var row =  $('<div class="row">');
		var col1 =  $('<div class="col-md-6">');
		var col2 =  $('<div class="col-md-6">');
		var input =  $('<input id="Mission-'+(index)+'" maxlength="200" type="text" class="form-control" placeholder="Mission '+ (index) +'" />');

		input.on('input',function(e){
			id = $( this ).attr('id').replace("Mission-", "");
			pere = $("#sce_userbundle_jen_missions");
			div = pere.find("#step-"+id);
			titre = div.find(':input').filter(':input:text:first');;
			titre.val($( this ).val());
		});

		prototype.append(label);
		prototype.append(row);

		row.append(col1);
		col1.append(input);
		
		row.append(col2);
		addDeleteLink(col2, prototype, $container);

		$container.append(prototype);

		return index;
	}

	function addStepLink($index) {
		var stepwizard = $('div#stepwizard');
		var prototype =  $('<div class="stepwizard-step" id="stepLink-'+$index+'"> </div>');
		var stepLink = $('<a href="#step-'+$index+'" type="button" class="btn btn-default btn-circle">'+$index+'</a>');
		var text = $('<p>Mission '+$index+'</p>');  
		prototype.append(stepLink); 
		prototype.append(text);
		stepwizard.append(prototype);
	}

	// La fonction qui ajoute un formulaire Mission
	function addStep($index) {
		var continuous = $('div#sce_userbundle_jen_missions');
		addStepLink($index);
		   
		prototype =  $('<div class="row setup-content" id="step-'+$index+'"> </div>');

		var regex1 = new RegExp("sce_userbundle_jen_missions___name___", "gi");
		var regex2 = new RegExp("sce_userbundle_jen\\[missions\\]\\[__name__\\]", "gi");
		
		var $prototypeMission = $(continuous.attr('data-prototype')
			.replace(regex1, "sce_userbundle_jen_missions_"+indexGlobal+"_")
			.replace(regex2, "sce_userbundle_jen[missions]["+indexGlobal+"]"));

		prototype.append($prototypeMission); 
		continuous.append(prototype);

		addImageLink(indexGlobal, $index);

		indexGlobal++;
	}

	function addImageLink($myStep, $index){
		var continuous = $('div#sce_userbundle_jen_missions');
		containerImgs =  continuous.find("#sce_userbundle_jen_missions_"+$myStep+"_images");
		
		var addImgLink = $('<a href="#" id="add_image_step_'+$index+'" class="btn btn-success">Ajouter une image</a>');
		containerImgs.prepend(addImgLink);
		addImgLink.click(function(e) {
			addImage($myStep);
			e.preventDefault(); // évite qu'un # apparaisse dans l'URL
			return false;
		});

		var div = $('<div class="form-group"></div>');
		addImgLink.wrap(div);
	}

	function addImage($myStep) {
		var continuous = $('div#sce_userbundle_jen_missions');
		var containerImgs =  continuous.find("#sce_userbundle_jen_missions_"+$myStep+"_images");
		var indexImg = (containerImgs.find(':file').length)+1;

		var prototypeImg = $(containerImgs.attr('data-prototype')
			//.replace(/__name__label__/g, ''/*'Image n°' + indexImg*/)
			.replace(/__name__/g, indexImg));

		
		addFileEvent(prototypeImg);
		
		containerImgs.append(prototypeImg);

		addDeleteImageLink(prototypeImg);
	}

	function addFileEvent($prototypeImg){
		var file = $prototypeImg.find(':file');

		file.on('change', function() {
			var input = $(this),
				numFiles = input.get(0).files ? input.get(0).files.length : 1,
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});

		file.on('fileselect', function(event, numFiles, label) {
			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;

			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
		});
	}

	function addDeleteImageLink($prototypeImg){

		$prototypeImg.find('.btn-danger').click(function() {
			$prototypeImg.remove();
		});
	}

	function addDeleteLink($row, $prototype, $container) {
		var deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
		$row.append(deleteLink);
		deleteLink.click(function(e) {
			nbMissions = $container.find(':input').length;
			if(nbMissions>1) {// au moin une mission
				$prototype.remove();
				$index=$prototype.attr('id');
				deleteStep($index);
				
				var i=0;
				$divs = $container.children();
				$divs.each(function() {
					i++;
					$( this ).attr("id",i);
				});

				i=0;
				$labels = $container.find('label');
				$labels.each(function() {
					i++;
					$( this ).text( "Mission "+ (i) );
				});

				i=0;
				$inputs = $container.find(':input');
				$inputs.each(function() {
					i++;
					$( this ).attr("placeholder", "Mission "+ (i));
					$( this ).attr("id", "Mission-"+(i));
				});
			}
			
			e.preventDefault(); // évite qu'un # apparaisse dans l'URL
			return false;
		});
	}

	function deleteStep($index) {
		var continuous = $('div#sce_userbundle_jen_missions');
		var stepwizard = $('div#stepwizard');
		stepwizard.find('div#stepLink-'+$index).remove();
		continuous.find('div#step-'+$index).remove();
		var i=0;
		$steps = stepwizard.children();
		$stepsContinuous = continuous.children();
		$steps.each(function() {
			i++;
			$( this ).attr("id", "stepLink-"+ (i));
			$lien = $( this ).find("a");
			$lien.text(i);
			$lien.attr("href", "#step-"+ (i));

			$p = $( this ).find("p");
			$p.text("Mission "+i);
		});
		i=0;
		$stepsContinuous.each(function() {
			i++;
			$( this ).attr("id", "step-"+ (i));
		});
	}

	
});

function missions() {
	var navListItems = $('div.setup-panel div a'),
			allWells = $('.setup-content'),
			firstWell = allWells[0],
			allNextBtn = $('.nextBtn');

	allWells.hide();
	firstWell=$('.setup-content').eq(0);
	firstWell.show();

	navListItems.click(function (e) {
		e.preventDefault();
		var $target = $($(this).attr('href')),
				$item = $(this);

		if (!$item.hasClass('disabled')) {
			navListItems.removeClass('btn-primary').addClass('btn-default');
			$item.addClass('btn-primary');
			allWells.hide();
			$target.show();
			$target.find('input:eq(0)').focus();
		}

		e.preventDefault(); // évite qu'un # apparaisse dans l'URL
			return false;
	});

	allNextBtn.click(function(){
		var curStep = $(this).closest(".setup-content"),
			curStepBtn = curStep.attr("id"),
			nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
			curInputs = curStep.find("input[type='text'],input[type='url']"),
			isValid = true;

		$(".form-group").removeClass("has-error");
		for(var i=0; i<curInputs.length; i++){
			if (!curInputs[i].validity.valid){
				//isValid = false;
				$(curInputs[i]).closest(".form-group").addClass("has-error");
			}
		}

		if (isValid)
			nextStepWizard.removeAttr('disabled').trigger('click');
	});

	$('div.setup-panel div a.btn-primary').trigger('click');
};