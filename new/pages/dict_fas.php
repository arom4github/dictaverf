<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fas->{$_SESSION["lang"]}; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<div class="sidebar one_quarter first">
				<nav class="sdb_holder">
					<ul>
						<li><a href="#about"><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#stim"><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=1"><?php echo $lang->dict->search_method->reaction->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->navbar->fas->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include  __DIR__."/lang/".$_SESSION["lang"]."/".$lang->fas->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fas->stim->{$_SESSION["lang"]}; ?></p>
					<p> abandonner, absence, accepter, accompagner, accomplir, accord, accorder, acheter, achever, acte, action,
					adresser, affaire, affirmer, âge, agir, agiter, aide, aider, aile, ailleurs, aimer, air, ajouter, aller, allumer,
					âme, amener, ami, amour, amuser, an, ancêtre, ancien, animal, année, annoncer, apercevoir, apparaître, appartement,
					appartenir, appel, appeler, apporter, apprendre, approcher, appuyer, arbre, argent, arme, armée, arracher, arrêter,
					arrière, arriver, art, article, aspect, asseoir, assimilé, assurer, attacher, atteindre, attendre, attention, attirer,
					attitude, aujourd'hui, auteur, authenticité, autre, autrefois, avancer, avenir, aventure, avis, avoir, avouer, baisser,
					banane, bas, bataille, battre, beau, beauté, besoin, bête, bien, bière, billet, blanc, bleu, boire, boisson, bon,
					bonheur, bord, bouche, bout, branche, bras, briller, briser, bruit, brûler, brun, bureau, but, cabaret, cabinet, cacher,
					calme, camarade, campagne, capable, caractère, carte, cas, case, cause, causer, centre, certain, cesser, chaîne, chair,
					chaise, chaleur, chambre, champ, changement, changer, chant, chanter, charge, charger, charlatan, chasser, chaud, chef,
					chemin, cher, chercher, cheval, cheveu, chien, choisir, chose, chrétien, ciel, circonstance, cité, civilisation, clair,
					clan, classe, coeur, coin, colère, colline, colonisation, combat, commencer, compagnie,
					compagnon, complet, composer, comprendre, compte, compter, condition, conduire, confiance, confier,
					connaissance, connaître, conscience, conseil, considérer, construire, contenir, content, continuer, contraire,
					convenir, conversation, corps, côte, côté, cou, coucher, couler, couleur, coup,
					couper, cour, courage, courant, courir, cours, court, coûter, coutume, couvrir,
					craindre, crainte, créer, creuser, cri, crier, crise, croire, croix, cuisine,
					culture, curiosité, dame, danger, dangereux, danser, debout, début, décider, déclarer,
					découvrir, défendre, demande, demander, demeurer, demi, démocratie, dent, départ, déposer,
					dernier, descendre, désert, désespoir, désir, désirer, détail, détruire, deuil, devenir,
					deviner, devoir, dieu, différent, difficile, digne, dire, direction, diriger, discours,
					disparaître, disposer, distinguer, docteur, doigt, donner, dormir, dos, dot, double,
					doucement, douleur, doute, douter, doux, drapeau, dresser, droit, dur, durer,
					eau, échapper, éclairer, éclat, éclater, école, écouter, écrire, éducation, effacer,
					effet, effort, égal, également, élections, élément, élever, éloigner, embrasser, emmener,
					émotion, empêcher, empire, employer, emporter, endormir, endroit, énergie, enfant, enfermer,
					enfoncer, engager, enlever, ennemi, énorme, ensemble, entendre, entier, entourer, entraîner,
					entrée, entrer, envelopper, envie, envoyer, épaule, époque, éprouver, escalier, espace,
					espèce, espérer, espoir, esprit, essayer, établir, étage, état, été, éteindre,
					étendre, éternel, ethnie, étoile, étonner, étrange, étranger, étroit, étude, étudier,
					européen, événement, éviter, examiner, exemple, exiger, existence, exister, expatrié, expérience,
					expliquer, expression, exprimer, face, facile, façon, faible, faim, faire, fait,
					falloir, famille, faute, fauteuil, faux, femme, fenêtre, fer, fermer, fête,
					feu, feuille, fier, figure, fil, fille, fils, fin, finir, fixer,
					flamme, fleur, flot, foi, fois, folie, fonction, fond, force, forcer,
					forêt, forme, former, fort, fortune, fou, foule, frais, franc, français,
					frapper, frère, froid, front, fruit, fuir, fumée, fumer, funérailles, gagner,
					garçon, garde, garder, gauche, général, genou, genre, gens, geste, glace,
					glisser, gloire, goût, goutte, gouvernement, grâce, grand, grandir, grave, gris,
					gros, groupe, guerre, habiter, habitude, haine, haricot, hasard, haut, hauteur,
					herbe, hésiter, heure, heureux, histoire, hiver, homme, honneur, honte, horizon,
					hôtel, humain, idée, ignorer, île, image, imaginer, immense, immobile, importance,
					important, importer, imposer, impossible, impression, inconnu, indigène, indiquer, inspirer, installer,
					instant, intellectuel, intelligence, intention, intéresser, intérêt, intérieur, interrompre, inutile, inventer,
					jambe, jardin, jaune, jeter, jeu, jeune, jeunesse, joie, joli, joue,
					jouer, jour, journal, journée, juge, juger, juste, justice, la somme, langue,
					large, larme, le passé, le présent, le sol, léger, lendemain, lentement, l'est, lettre,
					lever, lèvre, liberté, libre, lieu, ligne, lire, lisser, lit, livre,
					livrer, loi, loin, long, longtemps, l'or, lourd, lueur, lumière, lune,
					lutte, lutter, machine, madame, magnifique, main, maintenant, maintenir, maison, maître,
					mal, malade, maladie, malheur, maman, manger, manier, manquer, marche, marché,
					marcher, mari, mariage, marier, marquer, masque, masse, matière, matin, mauvais,
					médecin, meilleur, mêler, membre, même, mémoire, mener, mer, mère, mesure,
					mettre, midi, mieux, milieu, million, ministre, minute, miser, mixte, mode,
					moindre, mois, moitié, moment, monde, monsieur, montagne, monter, montrer, morceau,
					mort, mot, mourir, mouvement, moyen, mur, musique, musulman, naître, nation,
					national, nature, naturel, nécessaire, neuf, nez, noir, nom, nombre, nommer,
					nord, nourrir, nouveau, nu, nuage, nuit, obéir, objet, obliger, observer,
					obtenir, occasion, occidental, occuper, odeur, oeil, oeuvre, officier, offrir, oiseau,
					ombre, oncle, ordre, oreille, oser, oublier, ouvert, ouvrage, ouvrir, page,
					pain, paix, palais, papa, papier, paraître, pareil, parent, parler, parole,
					part, partager, parti, particulier, partie, partir, parvenir, passage, passer, passion,
					patois, pauvre, payer, pays, paysan, peau, peine, pencher, pénétrer, pensée,
					penser, perdre, père, permettre, personnage, personne, peser, petit, peuple, peur, phrase,
					pièce, pied, pierre, piste, pitié, place, placer, plaindre, plaine, plaire, plaisir,
					plan, plein, pleurer, plonger, pluie, poche, poésie, poète, poids, point,
					pointe, poitrine, police, politique, pont, port, porte, porter, poser, position, posséder, possible,
					poste, poursuivre, pousser, poussière, pouvoir, préférer, premier, prendre, préparer, présence, présenter, président,
					presser, prêt, prétendre, prêter, preuve, prévenir, prévoir, prier, prière, prince, principe, prison,
					prix, problème, prochain, produire, profond, projet, promener, promettre, prononcer, propos, proposer, propre,
					protéger, prouver, public, puissance, puissant, pur, qualité, quartier, question, quitter, raconter, raison,
					ramasser, ramener, rapide, rappeler, rapport, rapporter, rare, rayon, réalité, recevoir, recherche, recommencer,
					reconnaître, reculer, réduire, réfléchir, refuser, regard, regarder, rejoindre, relation, relever, religion, remarquer,
					remercier, remettre, remonter, remplacer, remplir, rencontrer, rendre, rentrer, répandre, répéter, répondre, réponse,
					reposer, reprendre, représenter, résister, résoudre, respect, respirer, ressembler, reste, rester, résultat, retenir,
					retirer, retour, retourner, retrouver, réunir, réussir, rêve, réveiller, révéler, revenir, rêver, revoir,
					révolution, riche, rire, robe, rocher, roi, rôle, rouge, rouler, route, rue, sable,
					sac, saint, saisir, salle, saluer, sang, santé, sauter, sauvage, sauver, savoir, scène,
					science, sec, second, seconde, secret, seigneur, sein, semaine, semblable, sembler, sens, sentiment,
					sentir, séparer, sérieux, serrer, service, servir, seul, sexe, sida, siècle, signe, silence,
					simple, simplement, situation, social, société, soeur, soin, soir, soirée, soldat, soleil, solitude,
					sombre, sommeil, sommet, son, songer, sonner, sorte, sortir, sou, souffler, souffrance, souffrir,
					soulever, soumettre, source, sourire, soutenir, souvenir, souvent, spectacle, subir, succès, suffire, suite,
					suivant, suivre, sujet, supérieur, sûr, surprendre, symbole, système, table, tache, taille, taire,
					tambour, tard, teint, témoin, temps, tendre, tenir, tenter, terme, terminer, terrain, terre,
					terrible, tête, théâtre, tirer, titre, toile, toit, tôle, tomber, ton, toucher, tour,
					tourner, tout, trace, tradition, train, traîner, trait, traiter, tranquille, travail, travailler, travers,
					traverser, trembler, trésor, triste, tromper, trou, troubler, trouver, tuer, type, un anglais, un être,
					un pas, unique, université, usage, user, vache, vague, valeur, vaste, veille, vendre, venir,
					vent, ventre, véritable, vérité, verre, verser, vert, vêtement, vêtir, victime, vide, vie,
					vieillard, vieux, vif, village, ville, vin, violence, violent, visage, visite, vite, vivant,
					vivre, voie, voile, voir, voiture, voix, voler, volonté, voter, vouloir, voyage, vrai, vue. </p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<!-- / main body -->
				<div class="clear"></div>
		</main>
	</div>
	<div class="bg-dictionary wrapper row3">
		<section class="hoc container clear counter-section">
			<div class="counter-card">
				<span><i class="fas fa-users"></i></span>
				<div class="number">3500</div>
				<div class="desc"><?php echo $lang->dict->card[0]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-history"></i></span>
				<div class="number">25 лет</div>
				<div class="desc"><?php echo $lang->dict->card[1]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-venus-mars"></i></span>
				<div class="number">45%/55%</div>
				<div class="desc"><?php echo $lang->dict->card[2]->{$_SESSION["lang"]}; ?><br />&nbsp;</div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-pencil-alt"></i></span>
				<div class="number">65432</div>
				<div class="desc"><?php echo $lang->dict->card[3]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-book"></i></span>
				<div class="number">1500</div>
				<div class="desc"><?php echo $lang->dict->card[4]->{$_SESSION["lang"]}; ?></div>
			</div>
		</section>
	</div>
	<!-- ################################################################################################ -->
	<?php include "includes/footer.php"; ?>
</body>

</html>
