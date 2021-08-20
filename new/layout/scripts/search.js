/**
*\file search.js
*\brief Linked to pages/includes/{dict}.php (letters generation and ajax)
*\date Summer 2021
*/

/**
 * Generation of letters for the direct search method (by letter)
 */
function letterGen(){
	const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for (let index = 0; index < alphabet.length; index++) {
		let letter = alphabet[index];
		$('#alpha_search .letter_container').append("<span onclick=\"printRes('"+letter+"')\">"+letter+"</span>");
	}
}

/*
 * Generation of letters for the invert search method (by letter)
 */
function letterExtendGen(){
	const alphabet = "?0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for (let index = 0; index < alphabet.length; index++) {
		let letter = alphabet[index];
		$('#alpha_search .letter_container').append("<span onclick=\"printRes('"+letter+"')\">"+letter+"</span>");
	}
}

/**
 * Hide and show filter options
 */
function toggleFilter(){
	$("#filter-form").toggleClass("form-hidden");
}

/**
 * Send an ajax request to get database data about fas dictionary (direct search)
 * @param {string} range The letter or part of word that the word begin
 * @param {object} filter An object with every data which is complete in the filter
 * @param {boolean} isDefault If the hidden input "dict" is removed or doesn't exist
 */
function printResDirectFas(range,filter,isDefault){
	/* Configuration */
	if(isDefault){
		var options = {
			"dict":"fas",
			"method":"letter",
			range,
			filter
		};
	}else{
		var options = {
			"dict":$('#dictionary').val(),
			"method":"letter",
			range,
			filter
		};
	}

	/* Ajax request */
	var jqxhr = $.post("../../api/direct_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					$('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (let index = 0; index < data.length; index++) {
						$('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'</td><td>'+data[index].reactions+'</td></tr>').appendTo(".result-table table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}

/**
 * Send an ajax request to get database data about fas dictionary (invert search)
 * @param {string} range The letter, part of word, range of stimulus or range of reaction to sort results
 * @param {object} filter An object with every data which is complete in the filter
 * @param {string} method Search method : letter, stim or react
 */
function printResInvertFas(range,filter,method){
	/* Configuration */
	const methods = ["letter","stim","react"];
	if(methods.includes(method)){
		var options = {
			"dict":"fas",
			method,
			range,
			filter
		};
	}else{
		var options = {
			"dict":$('#dictionary').val(),
			"method":"letter",
			range,
			filter
		};
	}

	/* Ajax request */
	var jqxhr = $.post("../../api/invert_search.php", options)
	.done(function(response){
		var data = response.data;
		show_loader(false);
		switch (response.status) {
			case 200:
				$('<div class="result-table"><table><thead><tr><th>#</th><th>Reaction</th><th>Stimulus</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
				for (let index = 0; index < data.length; index++) {
					$('<tr><td>'+data[index].id+'</td><td>'+data[index].reaction+'</td><td>'+data[index].stimulus+'</td></tr>').appendTo(".result div table tbody");
				}
				break;
			case 400:
				response.error.forEach(error =>{
					$('<div>'+error+'<br/></div>').appendTo(".result");
				});
				break;
			default:
				break;
		}		
	})
	.fail(function(error){
		show_loader(false);
		$('<div>The program has encountered an error.</div>').appendTo(".result");
		console.log(error);
	});
}

/**
 * Send an ajax request to get database data about sanf dictionary (direct search)
 * @param {string} range The letter or part of word that the word begin
 * @param {object} filter An object with every data which is complete in the filter
 */
function printResDirectSanf(range,filter){
	/* Configuration */
	var options = {
		"dict":$('#dictionary').val(),
		"method":"letter",
		range,
		filter
	};

	/* Ajax request */
	var jqxhr = $.post("../../api/direct_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					$('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (let index = 0; index < data.length; index++) {
						$('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'</td><td>'+data[index].reactions+'</td></tr>').appendTo(".result-table table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}


/**
 * Organize function's call thanks to url params
 * @param {string} range Parameter for the research (letter, range of stimulus, range of reactions)
 */
function printRes(range){
	$('.result').empty();
	show_loader(true);

	/* POST parameters creation (filter data) */
	let education = [];
	var education_checkbox = document.getElementsByName('education');
	for (let index = 0; index < education_checkbox.length; index++) {
		if(education_checkbox[index].checked){education.push(education_checkbox[index].value);}
	}
	if(education.length==0){education=["lycee","etudiant","doctorant","docteur_science","hdr"];}
	var filter = {
		"agemin":$("#agemin").val(),
		"agemax":$("#agemax").val(),
		"region":$("#region").val(),
		"city":$("#city").val()==""?"noImportant":$("#city").val(),
		"specialization":$("#specialization").val()==""?"noImportant":$("#specialization").val(),
		"sex":document.querySelector('input[name="sexe"]:checked').value,
		"lang":$("#language").val(),
		"education":education
	};

	/* Redirect to the correct function */
	let url_string = window.location.href;
	let url = new URL(url_string);
	if(url.searchParams.get("method")=="inv"){
		/* Invert dictionary */
		switch ($('#dictionary').val()) {
			case "fas2":
			case "fas1_red":
			case "fas2_red":
			case "fas":
				switch (url.searchParams.get("num")) {
					case "3":
						printResInvertFas(range,filter,"react");
						break;
					case "2":
						printResInvertFas(range,filter,"stim");
						break;
					default:
						printResInvertFas(range,filter,"letter");
						break;
				}
				break;
			case "sanfn":
				break;
			default:
				//printResInvertFas(range,filter,"defaultLetter");
				break;
			}
	}else{
		/* Direct dictionary */
		switch ($('#dictionary').val()) {
			case "fas":
			case "fas2":
			case "fas1_red":
			case "fas2_red":
				printResDirectFas(range,filter,false);
				break;
			case "sanfn":
				printResDirectSanf(range,filter);
				break;

		}
	}
}

/**
 * Sort by Reaction (invert search)
 * This function must be deleted and replaced by function "printRes(range)"
 * 	for the centralisation
 */
function printByReact(){
	console.log("Sort by Reaction");
	printRes("a");
}

/**
 * Sort by Frequency (invert search)
 * This function must be deleted and replaced by function "printRes(range)"
 * 	for the centralisation
 */
function printByFreq(frequency){
	console.log("Sort by Frequence from "+frequency+"% to "+(frequency+20)+"%");
	printRes("a");
}

/**
 * Initialize the first questionnaire and the maximum (number) of questionnaires
 */
function initQuestionnaires(){
	$('.result').empty();
	show_loader(true);
	/* Var initializing */
	let max = 1;
	var llang = "";
	//var lang = 'ru'
	readTextFile("../lang/data.json", function(text){
    		llang = JSON.parse(text);
	});

	$('#quest-number-max').val(max);
	$('.search_nav')[0].children[3].innerText = "1/"+ max;

	var options = {
		"dict":$('#dictionary').val(),
		"method":"range"
	};

	/* Ajax request */
	var jqxhr = $.post("../../api/anketa_search.php", options)
		.done(function(response){
			var data = response.data;
			switch (response.status) {
				case 200:
					max = data[0].value;
					$('#quest-number-max').val(max);
					$('.search_nav')[0].children[3].innerText = "1/"+ max;
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});

	options = {
		"dict":$('#dictionary').val(),
		"method":"que",
		"offset":0
	};

	/* Ajax request */
	var jqxhr = $.post("../../api/anketa_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					let sex = data[0].sex?"../../images/male.png":"../../images/female.png";
					$('<div class="result-indiv-quest"><div class="indiv-info"><div class="line"><img src="'+sex+'" alt="sexe"><div>'+llang.filter.age[lang]+': '+data[0].age+'</div><div>'+llang.filter.city[lang]+': '+data[0].from+'</div></div><div class="line"><div>'+llang.filter.language[lang]+': '+data[0].language+'</div><div>'+llang.filter.specialization[lang]+': '+data[0].specialization+'</div><div>'+llang.filter.education.title[lang]+': '+data[0].formation+'</div></div> <table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (var index in data) {
						if(index == 0) continue;
						$("<tr><td>"+data[index]['id']+"</td><td>"+data[index]['stimulus']+"</td><td>"+data[index]['reaction']+"</td><td>"+data[index]['frequency']+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});

}

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        } else {
	}
    }
    rawFile.send(null);
}

/**
 * Calculate which questionnaire to display and display it
 * @param {string} diff The number of the questionnaire compared to the current one
 */
function printQuestionnaire(diff){
	$('.result').empty();
	show_loader(true);
	//usage:
	var llang = "";
	//var lang = 'ru'
	readTextFile("../lang/data.json", function(text){
    		llang = JSON.parse(text);
	});
	/* Define the new value */
	let actualValue = parseInt(document.getElementById("quest-number-current").value);
	let maxValue = parseInt(document.getElementById("quest-number-max").value)
	let newValue = actualValue;
	switch (diff) {
		case 'first':
			newValue = 1;
			break;
		case 'add':
			newValue += 1;
			break;
		case 'add10':
			newValue += 10;
			break;
		case 'less':
			newValue -= 1;
			break;
		case 'less10':
			newValue -= 10;
			break;
		case 'last':
			newValue = maxValue;
			break;
		default:
			newValue = 1;
			break;
	}
	/* Don't be out */
	if(newValue<1) newValue = 1;
	if(newValue>maxValue) newValue = maxValue;
	
	$('.search_nav')[0].children[3].innerText = newValue+"/"+ maxValue;
	$('#quest-number-current').val(newValue);
	
	var options = {
		"dict":$('#dictionary').val(),
		"method":"que",
		"offset":newValue-1
	};

	/* Ajax request */
	var jqxhr = $.post("../../api/anketa_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					let sex = data[0].sex?"../../images/male.png":"../../images/female.png";
					$('<div class="result-indiv-quest"><div class="indiv-info"><div class="line"><img src="'+sex+'" alt="sexe"><div>'+llang.filter.age[lang]+': '+data[0].age+'</div><div>'+llang.filter.city[lang]+': '+data[0].from+'</div></div><div class="line"><div>'+llang.filter.language[lang]+': '+data[0].language+'</div><div>'+llang.filter.specialization[lang]+': '+data[0].specialization+'</div><div>'+llang.filter.education.title[lang]+': '+data[0].formation+'</div></div> <table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (var index in data) {
						if(index == 0) continue;
						$("<tr><td>"+data[index]['id']+"</td><td>"+data[index]['stimulus']+"</td><td>"+data[index]['reaction']+"</td><td>"+data[index]['frequency']+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}

/**
 * Creation of the loading animation (when the client wait to receive data from database)
 */
function init_loader(){
	let base = document.getElementById("res_loader");
	let letters = base.textContent.split("");
	base.textContent="";
	letters.forEach((letter, i) => {
		let span = document.createElement("span");
		span.textContent = letter;
		span.style.animationDelay = `${i / 20}s`;
		base.append(span);
	});
}

/**
 * Hide or show the loader to wait data from database
 * @param {boolean} show If the loader is to be shown
 */
function show_loader(show){
	if(show){
		let base = document.getElementById("res_loader");
		base.style.display = "flex";
	}else{
		let base = document.getElementById("res_loader");
		base.style.display = "none";
	}
}
