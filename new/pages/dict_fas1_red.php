<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fas1_red->{$_SESSION["lang"]}; ?></a></li>
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
								<li><a href="./search/fas1_red.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas1_red.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas1_red.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas1_red.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas1_red.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas1_red.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas1_red.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fas1_red->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fas1_red->stim->{$_SESSION["lang"]}; ?></p>
					<p>abandonner, absence, accepter, accompagner, accord, accorder, acheter, acte, action, adresser, affaire,
						affirmer, âge, agir, aide, aider, aimer, air, ajouter, aller, amener, ami, amour, ancien, animal, année,
						annoncer, apparaitre, appartenir, appel, appeler, apporter, apprendre, appuyer, argent, arme, armée,
						arrêter, arriver, article, aspect, assurer, atteindre, attendre, attention, attirer, attitude, auteur,
						avancer, avenir, avis, avoir, baisser, bas, battre, beau, besoin, bien, blanc, bon, bord, bout, bureau, but,
						cacher, campagne, capable, caractère, carte, cas, cause, causer, centre, certain, cesser, chaine, chambre,
						champ, changement, changer, charge, charger, chef, chemin, cher, chercher, choisir, chose, circonstance,
						clair, classe, cœur, combat, commencer, compagnie, complet, composer, comprendre, compte, compter,
						condition, conduire, confiance, confier, connaissance, connaitre, conscience, conseil, considérer,
						construire, contenir, continuer, contraire, convenir, corps, côté, coup, couper, courant, cours, court,
						couter, couvrir, craindre, créer, crise, croire, culture, danger, dangereux, début, décider, déclarer,
						découvrir, défendre, demande, demander, demeurer, demi, départ, déposer, dernier, détail, détruire, devenir,
						devoir, difficile, dire, direction, diriger, discours, disparaitre, disposer, donner, double, doute, droit,
						dur, durer, eau, échapper, écouter, écrire, éducation, effet, effort, égal, élection, élément, élever,
						empêcher, employer, emporter, endroit, énergie, enfant, engager, énorme, ensemble, entendre, entier,
						entrainer, entrée, entrer, envoyer, époque, espace, espèce, espérer, espoir, esprit, essayer, établir, état,
						été, étendre, étranger, être, étude, européen, évènement, éviter, exemple, exiger, existence, exister,
						expérience, expliquer, expression, exprimer, face, facile, façon, faible, faire, fait, falloir, famille,
						faute, faux, femme, fermer, feu, fille, fils, fin, finir, fixer, fois, fonction, fond, force, forcer, forme,
						former, fort, frais, franc, français, frapper, frère, fruit, gagner, garde, garder, gauche, général, genre,
						gens, gouvernement, grand, grave, gros, groupe, guerre, habiter, haut, heure, heureux, histoire, homme,
						honneur, humain, idée, ignorer, image, imaginer, importance, important, importer, imposer, impossible,
						impression, indiquer, installer, instant, intention, intéresser, intérêt, intérieur, jeu, jeune, jouer,
						jour, journal, journée, juger, juste, justice, langue, large, le présent, lettre, lever, liberté, libre,
						lieu, ligne, lire, livre, loi, long, or, lourd, lumière, lutte, lutter, main, maintenir, maison, maitre,
						mal, malade, manquer, marche, marché, matière, matin, mauvais, médecin, membre, mémoire, mener, mer, mère,
						mesure, mettre, milieu, million, ministre, minute, mission, mode, moindre, mois, moitié, moment, monde,
						monter, montrer, mort, mot, mourir, mouvement, moyen, musique, naitre, nation, national, nature, naturel,
						nécessaire, neuf, noir, nom, nombre, nommer, nord, nouveau, objet, obliger, observer, obtenir, occasion,
						œil, œuvre, offrir, ordre, oublier, ouvert, ouvrir, page, paix, papier, paraitre, parent, parler, parole,
						part, partager, parti, particulier, partie, partir, parvenir, passage, passé, passer, pauvre, payer, pays,
						peine, penser, perdre, père, permettre, personne, petit, peuple, peur, pièce, pied, place, placer, plaire,
						plaisir, plein, poids, point, police, politique, porte, porter, poser, position, posséder, possible, poste,
						poursuivre, pousser, pouvoir, préférer, premier, prendre, préparer, présence, présent, présenter, président,
						prêt, prétendre, prêter, preuve, prévoir, principe, prison, prix, problème, prochain, produire, profond,
						projet, promettre, prononcer, propos, proposer, propre, protéger, prouver, public, puissance, qualité,
						quartier, question, quitter, raconter, raison, ramener, rapide, rappeler, rapport, rapporter, réalité,
						recherche, reconnaitre, réduire, réfléchir, refuser, regarder, rejoindre, relation, relever, remarquer,
						remettre, remonter, remplacer, remplir, rencontrer, rendre, rentrer, répéter, répondre, réponse, reposer,
						reprendre, résoudre, respect, reste, rester, résultat, retenir, retirer, retour, retourner, retrouver,
						réunir, réussir, révéler, revenir, riche, rôle, rouge, route, rue, saisir, salle, sang, santé, savoir,
						scène, science, second, secret, sein, semaine, sembler, sens, sentiment, sentir, séparer, sérieux, service,
						servir, seul, siècle, signe, simple, simplement, situation, social, société, soin, soir, soldat, solution,
						somme, sorte, sortir, souffrir, soumettre, source, soutenir, souvenir, subir, succès, suffire, suite,
						suivant, suivre, sujet, supérieur, sûr, surprendre, système, table, tâche, témoin, temps, tendre, tenir,
						tenter, terme, terminer, terrain, terre, tête, tirer, titre, tomber, ton, toucher, tour, tourner, train,
						traiter, travail, travailler, travers, traverser, trouver, tuer, type, unique, université, usage, valeur,
						vaste, vendre, véritable, vérité, vert, victime, vie, vieux, vif, ville, violence, violent, visite, vivant,
						vivre, voie, voir, voisin, voiture, voix, volonté, vouloir, voyage, vrai, vue</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas1_red.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas1_red.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas1_red.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas1_red.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas1_red.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas1_red.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas1_red.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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