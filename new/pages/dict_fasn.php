<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fasn->{$_SESSION["lang"]}; ?></a></li>
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
								<li><a href="./search/fasn.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fasn.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
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
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fasn->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fasn->stim->{$_SESSION["lang"]}; ?></p>
					<p>abandonner, absence, absolument, accepter, accès, accompagner, accord, accorder, accueillir,
						accuser, acheter, acquérir, acte, action, activité, actuel, admettre, administration, adopter,
						adresser, affaire, affirmer, âge, agent, agir, aide, aider, aimer, air, ajouter, allemand,
						aller, améliorer, amener, américain, ami, amour, ancien, anglais, animal, année, annoncer,
						apparaitre, appartenir, appel, appeler, application, appliquer, apporter, apprécier, apprendre,
						appuyer, argent, arme, armée, arrêter, arrivée, arriver, article, aspect, assemblée, assister,
						association, assurer, attaquer, atteindre, attendre, attente, attention, attirer, attitude,
						augmenter, autant, auteur, autoriser, autorité, avance, avancer, avantage, avenir, avis, avocat,
						avoir, avril, baisser, bande, banque, bas, base, battre, beau, besoin, bien, blanc, bon, bord,
						bout, bref, budget, bureau, but, cacher, cadre, camp, campagne, canadien, capable, capacité,
						capital, caractère, carte, cas, cause, causer, central, centre, certain, cesser, chaine,
						chambre, champ, chance, changement, changer, charge, charger, chef, chemin, cher, chercher,
						chiffre, choisir, choix, chose, circonstance, citer, citoyen, civil, clair, classe, client,
						cœur, collègue, combat, combattre, comité, commander, commencer, commerce, commercial,
						commission, commun, communauté, commune, communication, compagnie, complet, complexe, comporter,
						composer, comprendre, compte, compter, concentrer, concerner, concevoir, conclure, concurrence,
						condamner, condition, conduire, conférence, confiance, confier, confirmer, conflit,
						connaissance, connaitre, consacrer, conscience, conseil, conseiller, conséquence, conserver,
						considérer, consister, constater, constituer, construction, construire, contact, contenir,
						contenter, continuer, contraire, contrat, contribuer, contrôle, contrôler, convaincre, convenir,
						corps, côté, coup, couper, couple, courant, cours, court, cout, couter, couvrir, craindre,
						création, crédit, créer, crime, crise, critique, croire, croissance, culture, danger, dangereux,
						date, débat, début, décembre, décider, décision, déclaration, déclarer, découvrir, décrire,
						défendre, défense, définir, demande, demander, demeurer, demi, départ, dépasser, dépendre,
						déplacer, déposer, député, dernier, désigner, destiner, détail, déterminer, détruire, deuxième,
						développement, développer, devenir, devoir, différence, difficile, difficulté, dire, direct,
						directeur, direction, diriger, discours, discussion, discuter, disparaitre, disposer,
						disposition, distribuer, divers, document, dollar, domaine, dommage, donnée, donner, dossier,
						double, doubler, doute, droit, dur, durer, eau, échange, échapper, échec, école, économie,
						économique, écouter, écrire, éducation, effectuer, effet, effort, égal, égard, élection,
						élément, élève, élever, émission, empêcher, emploi, employer, emporter, emprunter, endroit,
						énergie, enfant, engagement, engager, énorme, enquête, ensemble, entendre, entier, entrainer,
						entrée, entreprendre, entreprise, entrer, entretenir, envers, environ, environnement, envisager,
						envoyer, époque, équipe, erreur, espace, espèce, espérer, espoir, esprit, essayer, essentiel,
						estimer, établir, établissement, étape, état, été, étendre, étranger, être, étude, étudiant,
						étudier, européen, évènement, éviter, évoquer, exact, examiner, exception, exemple, exercer,
						exiger, existence, exister, expérience, expliquer, exposer, expression, exprimer, extérieur,
						face, facile, façon, faible, faire, fait, falloir, famille, faute, faux, faveur, fédéral, femme,
						ferme, fermer, feu, février, figurer, fille, film, fils, fin, financier, finir, fixer, fois,
						fonction, fonctionner, fond, fonder, fonds, force, forcer, formation, forme, former, fort,
						fournir, frais, franc, français, frapper, frère, frontière, fruit, futur, gagner, garde, garder,
						gauche, général, genre, gens, gestion, global, gouvernement, grand, grave, gros, groupe, guerre,
						habiter, haut, heure, heureux, histoire, historique, homme, honneur, honorable, humain, idée,
						ignorer, image, imaginer, immédiatement, impliquer, importance, important, importer, imposer,
						impossible, impression, indépendant, indiquer, individu, industrie, industriel, influence,
						information, inscrire, insister, installer, instant, institution, intention, interdire,
						intéresser, intérêt, intérieur, international, interroger, intervenir, intervention,
						investissement, inviter, janvier, jeu, jeudi, jeune, jouer, jour, journal, journée, jugement,
						juger, juin, juste, justice, justifier, laisser, lancer, langue, large, lecture, lettre, lever,
						libéral, libérer, liberté, libre, lien, lier, lieu, ligne, limite, limiter, lire, liste, livre,
						livrer, local, logique, loi, long, lourd, lumière, lundi, lutte, lutter, mai, main, maintenir,
						maison, maitre, majorité, mal, malade, malgré, manière, manifester, manque, manquer, marché,
						marche, mardi, marquer, mars, matériel, matière, matin, mauvais, maximum, médecin, membre,
						mémoire, menacer, mener, mer, mercredi, mère, mériter, message, mesure, mesurer, méthode,
						mettre, milieu, militaire, milliard, millier, million, ministère, ministre, minute, mise,
						mission, mode, modèle, modifier, moindre, mois, moitié, moment, monde, mondial, monter, montrer,
						mort, mot, moteur, motion, mourir, mouvement, moyen, musique, naitre, nation, national, nature,
						naturel, nécessaire, nécessité, négociation, neuf, niveau, noir, nom, nombre, nombreux, nommer,
						nord, normal, note, noter, nouveau, novembre, nucléaire, nul, numéro, objectif, objet, obliger,
						observer, obtenir, occasion, occuper, octobre, œil, œuvre, officiel, offrir, opération, opinion,
						opposer, opposition, or, ordre, organisation, organiser, origine, oublier, ouvert, ouvrir, page,
						paix, papier, paraitre, parent, parlement, parler, parole, part, partager, partenaire, parti,
						participer, particulier, partie, partir, parvenir, passage, passé, passer, pauvre, payer, pays,
						peine, penser, perdre, père, période, permettre, personne, personnel, perte, petit, peuple,
						peur, physique, pièce, pied, place, placer, plaire, plaisir, plein, poids, point, police,
						politique, population, porte, portée, porter, poser, positif, position, posséder, possibilité,
						possible, poste, poursuivre, pousser, pouvoir, pratique, précédent, précis, préciser, préférer,
						premier, prendre, préparer, présence, présent, présenter, présenter, président, presque, presse,
						pression, prêt, prétendre, prêter, preuve, prévoir, principal, principe, prise, prison, priver,
						prix, problème, procéder, procédure, processus, prochain, proche, production, produire, produit,
						professeur, professionnel, profit, profiter, profond, programme, progrès, projet, promesse,
						promettre, prononcer, propos, proposer, proposition, propre, protection, protéger, prouver,
						province, provoquer, public, publier, puisque, puissance, qualité, quartier, question, quitter,
						raconter, raison, ramener, rapide, rappeler, rapport, rapporter, réaction, réagir, réaliser,
						réalité, récent, recevoir, recherche, recommandation, reconnaitre, réduire, réel, réfléchir,
						réforme, refuser, regarder, régime, région, régional, règle, règlement, régler, regretter,
						rejeter, rejoindre, relatif, relation, relever, remarquer, remettre, remonter, remplacer,
						remplir, rencontre, rencontrer, rendre, rentrer, renvoyer, répéter, répondre, réponse, reposer,
						reprendre, reprise, république, réseau, réserve, réserver, résoudre, respect, respecter,
						responsabilité, responsable, ressource, reste, rester, résultat, retenir, retirer, retour,
						retourner, retraite, retrouver, réunion, réunir, réussir, révéler, revenir, revenu, riche, rien,
						risque, risquer, rôle, rouge, route, rue, saisir, salaire, salle, sang, santé, satisfaire,
						savoir, scène, science, scientifique, second, secret, secrétaire, secteur, sécurité, sein,
						semaine, sembler, sénateur, sens, sensible, sentiment, sentir, séparer, septembre, série,
						sérieux, service, servir, seul, siècle, signal, signe, signer, signifier, simple, simplement,
						situation, situer, social, société, soin, soir, soldat, solution, somme, sorte, sortie, sortir,
						souffrir, souhaiter, souligner, soumettre, source, soutenir, souvenir, spécial, structure,
						subir, succès, suffire, suite, suivant, suivre, sujet, supérieur, supposer, sûr, surprendre,
						susciter, système, table, tâche, tandis, taux, technique, télévision, témoin, temps, tendance,
						tendre, tenir, tenter, terme, terminer, terrain, terre, territoire, tête, texte, tirer, titre,
						tomber, ton, tôt, total, toucher, tour, tourner, traduire, train, traitement, traiter,
						transformer, transport, travail, travailler, travers, traverser, troisième, trouver, tuer, type,
						union, unique, unité, université, usage, utile, utiliser, valeur, valoir, vaste, vendre,
						vendredi, vente, véritable, vérité, version, vert, victime, vie, vieux, vif, ville, violence,
						violent, viser, visite, vitesse, vivant, vivre, voie, voir, voisin, voiture, voix, volonté,
						vote, vouloir, voyage, vrai, vue, zone</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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