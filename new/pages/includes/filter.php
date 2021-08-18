<?php 
/**
*\file filter.php
*\brief Form with the filter data to send to the api
*\	(maybe change it because parameters are not the same for each dictionary)
*\date Summer 2021
*/
?>
<div class="filter-section">
	<div class="icon-container">
		<span onclick="toggleFilter()"><i class="fas fa-sliders-h"></i> <?php echo $lang->filter->title->{$_SESSION["lang"]}." not implemented"; ?></span>
	</div>
	<div>
		<form action="" class="form-hidden" id="filter-form">
			<div class="input-group">
				<div>
					<div class="input-container age">
						<div><?php echo $lang->filter->age->{$_SESSION["lang"]}; ?> :</div>
						<div>
							<label for="agemin"><?php echo $lang->filter->from->{$_SESSION["lang"]}; ?></label>
							<input type="number" name="agemin" id="agemin" value="18">
							<label for="agemax"><?php echo $lang->filter->to->{$_SESSION["lang"]}; ?></label>
							<input type="number" name="agemax" id="agemax" value="25">
						</div>
					</div>
					<div class="input-container">
						<label for="region"><?php echo $lang->filter->region->{$_SESSION["lang"]}; ?> :</label>
						<select name="region" id="region">
							<option value="0" selected><?php echo $lang->filter->noImportant->{$_SESSION["lang"]}; ?></option>
							<option value="1"> Alsace </option>
							<option value="2"> Aquitaine </option>
							<option value="3"> Auvergne </option>
							<option value="4"> Bourgogne </option>
							<option value="5"> Bretagne </option>
							<option value="6"> Centre </option>
							<option value="7"> Champagne-Ardenne </option>
							<option value="8"> Corse </option>
							<option value="9"> Franche-Comté </option>
							<option value="10"> Ile-de-France </option>
							<option value="11"> Paris </option>
							<option value="12"> Languedoc-Roussillon </option>
							<option value="13"> Limousin </option>
							<option value="14"> Lorraine </option>
							<option value="15"> Midi-Pyrénées </option>
							<option value="16"> Nord-Pas-de-Calais </option>
							<option value="17"> Basse-Normandie </option>
							<option value="18"> Haute-Normandie </option>
							<option value="19"> Pays de la Loire </option>
							<option value="20"> Picardie </option>
							<option value="21"> Poitou-Charentes </option>
							<option value="22"> Provence-Côte d'Azur </option>
							<option value="23"> Rhône-Alpes </option>
							<option value="24"> Guyane </option>
							<option value="25"> Guadeloupe </option>
							<option value="26"> Martinique </option>
							<option value="27"> Réunion </option>
							<option value="28"> Belgique </option>
							<option value="29"> Suisse </option>
							<option value="30"> Canada </option>
						</select>
					</div>
					<div class="input-container">
						<label for="city"><?php echo $lang->filter->city->{$_SESSION["lang"]}; ?> :</label>
						<input type="text" name="city" id="city">
					</div>
				</div>
				<div>
					<div class="input-container">
						<label for="specialization"><?php echo $lang->filter->specialization->{$_SESSION["lang"]}; ?></label>
						<select name="specialization" id="specialization">
							<option value="noImportant" selected><?php echo $lang->filter->noImportant->{$_SESSION["lang"]}; ?></option>
							<option value="aucun"> Aucun </option>
							<option value="autre"> Autre </option>
							<option value="droit"> Droit </option>
							<option value="chimie"> Chimie </option>
							<option value="biologie"> Biologie </option>
							<option value="orthophonie"> Orthophonie </option>
							<option value="psychologie"> Psychologie </option>
							<option value="informatique"> Informatique </option>
							<option value="secrétariat"> Secrétariat </option>
							<option value="aéronautique"> Aéronautique </option>
							<option value="documentation"> Documentation </option>
							<option value="mathématiques"> Mathématiques </option>
							<option value="spectacle"> Arts du spectacle </option>
							<option value="sport"> Métiers du sport </option>
							<option value="sciences_humaines"> Sciences humaines </option>
							<option value="musicologie"> Arts et musicologie </option>
							<option value="terre"> Sciences de la terre </option>
							<option value="economiques"> Sciences économiques </option>
							<option value="paysage"> Horticulture - paysage </option>
							<option value="tourisme"> Hôtellerie - tourisme </option>
							<option value="agronomie"> Agriculture - agronomie </option>
							<option value="histoire"> Histoire - archéologie </option>
							<option value="lettres"> Lettres et littérature </option>
							<option value="materiaux"> Sciences des matériaux </option>
							<option value="urbanisme"> Architecture - urbanisme </option>
							<option value="sciences_ingenieur"> Sciences de l'ingénieur </option>
							<option value="sciences_education"> Sciences de l'éducation </option>
							<option value="communication"> Communication - journalisme </option>
							<option value="français"> Français langue étrangère </option>
							<option value="technologies"> Technologies de l'information
							</option>
							<option value="energetique"> Énergétique - électricité </option>
							<option value="alimentaire"> Alimentaire et agroalimentaire
							</option>
							<option value="scientifique"> Pluridisciplinaire scientifique
							</option>
							<option value="politiques"> Sciences sociales et politiques
							</option>
							<option value="télécommunications"> Télécommunications - réseaux </option>
							<option value="sciences_cognitives"> Sciences du langage et cognitives
							</option>
							<option value="traduction"> Langues étrangères et traduction
							</option>
							<option value="sante"> Médecine et métiers de la santé
							</option>
							<option value="ressources_humaines"> Ressources humaines et carrières sociales
							</option>
						</select>
					</div>
					<div class="input-container">
						<div><?php echo $lang->filter->sex->title->{$_SESSION["lang"]}; ?> :</div>
						<div class="no-input">
							<input type="radio" name="sexe" id="tous" value="tous" checked>
							<label for="tous"><?php echo $lang->filter->noImportant->{$_SESSION["lang"]}; ?></label>
							<input type="radio" name="sexe" id="femme" value="femme">
							<label for="femme"><?php echo $lang->filter->sex->woman->{$_SESSION["lang"]}; ?></label>
							<input type="radio" name="sexe" id="homme" value="homme">
							<label for="homme"><?php echo $lang->filter->sex->man->{$_SESSION["lang"]}; ?></label>
						</div>
					</div>
					<div class="input-container">
						<label for="language"><?php echo $lang->filter->language->{$_SESSION["lang"]}; ?> :</label>
						<select name="language" id="language">
							<option value="noImportant" selected><?php echo $lang->filter->noImportant->{$_SESSION["lang"]}; ?></option>
							<option value="arabe"> Arabe</option>
							<option value="bulgare"> Bulgare</option>
							<option value="allemand"> Allemand</option>
							<option value="anglais"> Anglais</option>
							<option value="espagnol"> Espagnol</option>
							<option value="francais"> Français</option>
							<option value="italien"> Italien</option>
							<option value="neerlandais"> Néerlandais</option>
							<option value="portugais"> Portugais</option>
							<option value="polonais"> Polonais</option>
							<option value="roumain"> Roumain</option>
							<option value="russe"> Russe</option>
							<option value="vietnamien"> Vietnamien</option>
							<option value="lyon"> Lyon</option>
							<option value="kurde"> Kurde </option>
							<option value="wolof"> Wolof </option>
							<option value="basque"> Basque </option>
							<option value="breton"> Breton </option>
							<option value="kabyle"> Kabyle </option>
							<option value="turque"> Turque </option>
							<option value="chinois"> Chinois </option>
							<option value="tcheque"> Tcheque </option>
							<option value="albanais"> Albanais </option>
							<option value="malgache"> Malgache </option>
							<option value="amharique"> Amharique </option>
							<option value="armenien"> Arménien </option>
							<option value="ukrainien"> Ukrainien </option>
							<option value="kinyarwanda"> Kinyarwanda (du rwanda) </option>
						</select>
					</div>
				</div>
			</div>
			<div class="input-container">
				<div><?php echo $lang->filter->education->title->{$_SESSION["lang"]}; ?> :</div>
				<div class="no-input">
					<input type="checkbox" name="education" id="lycee" value="lycee" checked>
					<label for="lycee"><?php echo $lang->filter->education->highSchool->{$_SESSION["lang"]}; ?></label>
					<input type="checkbox" name="education" id="etudiant" value="etudiant" checked>
					<label for="etudiant"><?php echo $lang->filter->education->student->{$_SESSION["lang"]}; ?></label>
					<input type="checkbox" name="education" id="doctorant" value="doctorant" checked>
					<label for="doctorant"><?php echo $lang->filter->education->PhD->{$_SESSION["lang"]}; ?></label>
					<input type="checkbox" name="education" id="docteur" value="docteur_science" checked>
					<label for="docteur"><?php echo $lang->filter->education->sciencePhD->{$_SESSION["lang"]}; ?></label>
					<input type="checkbox" name="education" id="hdr" value="hdr" checked>
					<label for="hdr"><?php echo $lang->filter->education->researchDirector->{$_SESSION["lang"]}; ?></label>
				</div>
			</div>
		</form>
	</div>
</div>