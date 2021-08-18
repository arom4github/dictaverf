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
								<li><a href="./search/fas.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
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
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fas->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fas->stim->{$_SESSION["lang"]}; ?></p>
					<p>être, avoir, faire, dire, pouvoir, tout, aller, voir, bien, homme,
						mari, vouloir, grand, femme, venir, devoir, petit, jour, prendre, mer, trouver,
						donner, temps, même, falloir, parler, main, chose, mettre, vie, savoir, yeux,
						passer, autre, regarder, aimer, heure, croire, monde, enfant, fois, seul, bon,
						demander, jeune, moment, rester, répondre, entendre, tête, père, fille,
						premier, coeur, eau, an, beau, terre, dieu, monsieur, voix, penser, nouveau,
						arriver, maison, coup, connaître, devenir, air, mot, nuit, sentir, vieux,
						sembler, tenir, noir, comprendre, rendre, attendre, sortir, ami, porte, amour,
						dernier, pied, gens, nom, vivre, entrer, reprendre, porter, pays, ciel, frère,
						regard, chercher, âme, côté, blanc, fort, la mort, revenir, esprit, maintenant,
						ville, bas, rue, appeler, soir, chambre, mourir, un pas, partir, soleil, jeter,
						roi, état, pauvre, corps, suivre, bras, écrire, montrer, tomber, place, ouvrir,
						parti, cher, année, loin, visage, bruit, lettre, franc, haut, fond, force,
						effet, arrêter, perdre, commencer, paraître, marcher, milieu, un saint, idée,
						ailleurs, travail, lumière, long, mois, fils, lever, raison, gouvernement,
						permettre, asseoir, point, plein, personne, vrai, peuple, fait, parole, guerre,
						français, écouter, pensée, affaire, matin, pierre, monter, vent, doute, front,
						ombre, part, maître, aujourd'hui, besoin, question, apercevoir, recevoir,
						mieux, peine, tour, servir, finir, famille, souvent, rire, madame, sorte,
						figure, le droit, peur, bout, lieu, silence, gros, chef, le bois, histoire,
						crier, jouer, feu, tourner, doux, longtemps, heureux, froid, garder, partie,
						face, mouvement, la fin, rouge, reconnaître, quitter, route, manger, livre,
						arbre, courir, cas, mur, ordre, continuer, l'est, bonheur, oublier, descendre,
						intérêt, cacher, profond, argent, cause, poser, travers, instant, façon, oeil,
						tirer, forme, présenter, ajouter, agir, retrouver, chemin, cheveu, offrir,
						plaisir, suite, apprendre, tuer, sang, retourner, rencontrer, sentiment, fleur,
						service, envoyer, table, vite, paix, moyen, dormir, pousser, lit, humain,
						voiture, rappeler, un être, lire, général, nature, l'or, pouvoir, joie, tard,
						président, bouche, changer, essayer, compter, occuper, sens, cri, espèce,
						expliquer, cheval, loi, sombre, sûr, ancien, frapper, ministre, travailler,
						propre, obtenir, rentrer, mal, pleurer, répéter, société, politique, oreille,
						payer, politique, apporter, fenêtre, possible, fortune, compte, champ, manier,
						immense, exister, action, boire, public, garçon, pareil, bleu, exemple,
						sourire, couleur, coucher, papier, le mal, causer, pièce, montagne, le sol,
						oeuvre, cours, raconter, serrer, songer, désir, manquer, cour, nommer, bord,
						douleur, conduire, salle, saisir, premier, entier, projet, demeurer, simple,
						étude, remettre, journal, geste, disparaître, battre, toucher, situation,
						oiseau, nécessaire, siècle, apparaître, souffrir, million, prix, groupe,
						centre, malheur, honneur, fermer, accepter, garde, mauvais, tendre (vb),
						naître, sauver, problème, larme, avancer, chien, peau, reste, traverser,
						nombre, debout, mesure, social, un souvenir, article, vue, couvrir, âge,
						gagner, système, long, former, plaire, effort, embrasser, rêve, oser, passion,
						empêcher, rapport, refuser, important, décider, produire, soldat, lèvre, signe,
						vérité, charger, mariage, mêler, certain, espérer, plan, cesser, ressembler,
						dos, marche, souvenir, dame, chanter, conseil, sou, triste, coin, jardin, joli,
						doigt,objet, fer, lendemain, lentement, approcher, prier, train, papa,
						différent, valeur, jeu, échapper, glisser, un secret, haut, vieillard, briller,
						docteur, brûler, terrible, placer, ton, jambe, juger, suffire, endroit, minute,
						atteindre, nuage, présence, fou, épaule, léger, feuille, liberté, journée,
						libre, annoncer, avenir, sourire, résultat, élever, acheter, le passé, mener,
						préparer, hôtel, semaine, forêt, assurer, pur, qualité, prince, le bien,
						également, deviner, médecin, considérer, volonté, seigneur, vert, art, moindre,
						foule, appartenir, ligne, représenter, tromper, intérieur, vendre, beauté,
						riche, craindre, étrange, emporter, soin, naturel, hasard, condition, classe,
						voyage, expression, le présent, caractère, attention, gris, exprimer, rouler,
						faible, posséder, scène, difficile, réveiller, foi, aider, découvrir, odeur,
						choisir, musique, oncle, événement, prononcer, village, taire, envie, midi,
						herbe, un vieux, pluie, rêver, appuyer, étendre, un général, lutte, trembler,
						réponse, grâce, espace, habitude, défendre, existence, mémoire, créer, grave,
						maintenir, verre, campagne, juge, genou, impossible, fête, indiquer, prêt,
						promettre, relever, abandonner, ignorer, large, parent, colère, étoile, le
						devoir, conscience, accompagner, immobile, adresser, observer, juste,
						puissance, matière, sable, séparer, marier, prévoir, vivant, accord, hiver,
						retour, autrefois, genre, vif, amener, obliger, acte, image, horizon, éclairer,
						poursuivre, danger, livrer, rôle, escalier, goût, bête, recherche, membre,
						pain, phrase, contenir, le rire, fuir, couler, terme, moyen, police, rocher,
						proposer, tranquille, unique, éprouver, retenir, type, vin, supérieur,
						attacher, voler, sec, entraîner, justice, époque, la somme, passage, science,
						surprendre, côte, doucement, gauche, faute, école, ensemble, rayon, briser,
						sujet, imaginer, diriger, avis, parvenir, ouvert, pénétrer, poète, meilleur,
						paysan, remarquer, chair, éviter, succès, île, établir, réussir, pencher,
						habiter, entourer, déclarer, détail, arme, réalité, confiance, masse, crise,
						étonner, poste, dresser, durer, faux, fixer, énorme, principe, direction,
						taille, désirer, santé, ventre, marché, entrée, puissant, simplement, arracher,
						soutenir, couper, trou, examiner, inconnu, pont, lune, robe, douter, retirer,
						cesse, source, espoir, camarade, dent, connaissance, cou, but, promener, une
						vague, élément, fil, voie, nez, forcer, particulier, discours, maladie,
						chaleur, gloire, vide, revoir, aide, début, ennemi, second, aile, flamme,
						chaise, lourd, sein, véritable, toit, remplir, terminer, vaste, nu, poussière,
						nord, tenter, émotion, remonter, révolution, théâtre, armée, court,
						appartement, semblable, installer, haine, un jeune, position, seconde, frais,
						appel, soulever, allumer, imposer, respirer, arrière, baisser, la droite,
						poitrine, mort, jeunesse, bureau, sac, étranger, courage, souffler, jaune,
						page, un étranger, miser, rapide, digne, chaud, propos, attirer, prêter, clair,
						amuser, occasion, voile, éclater, importance, quartier, auteur, religion,
						palais, réunir, traiter, engager, flot, intelligence, un voisin, carte, secret,
						animal, été, traîner, cabinet, morceau, employer, capable, souffrance, marquer,
						prouver, importer, titre, désert, facile, spectacle, exiger, reposer, départ,
						fier, danser, demande, saluer, lueur, joue, saint, accorder, prière, achever,
						avouer, distinguer, emmener, fonction, aspect, sommeil, éclat, moitié, demi,
						calme, contraire, colline, agiter, hésiter, terrain, fin, rare, poids, sonner,
						changement, charge, composer, enlever, poche, rejoindre, son, intérieur,
						veille, ramener, fruit, complet, étudier, partager, croix, suivant, chasser,
						interrompre, éloigner, trésor, compagnie, étroit, cuisine, réduire, égal,
						empire, nation, éteindre, recommencer, sauter, plaindre, conversation, soirée,
						violent, impression, trait, préférer, révéler, magnifique, désespoir, témoin,
						visite, respect, solitude, subir, prochain, rapporter, un anglais, coûter,
						réfléchir, officier, remercier, déposer, fauteuil, fumer, affirmer, relation,
						fumée, convenir, branche, malade, circonstance, ouvrage, compagnon, vêtir,
						expérience, port, accomplir, résoudre, plonger, goutte, chant, détruire,
						combat, personnage, aventure, intéresser, disposer, absence, machine, chaîne,
						honte, fait, lisser, faim, plaine, verser, pointe, obéir, preuve, éternel,
						lutter, prétendre, bataille, construire, énergie, victime, sauvage, soumettre,
						usage, peser, double, tache, hauteur, troubler, tendre, curiosité, répandre,
						glace, résister, prison, étage, billet, droit, sérieux, protéger, la rose,
						enfermer, attitude, dur, mode, neuf, crainte, creuser, grandir, enfoncer,
						vêtement, envelopper, vague, prévenir, violence, inspirer, inutile, content,
						courant, folie, pitié, intention, ramasser, endormir, inventer, trace, toile,
						presser, confier, effacer, reculer, user, nourrir, dangereux, poésie, sommet,
						remplacer, acculturé, acculturer, africain, africanisé, africaniser,
						alphabétisé, alphabétiser, ancêtre, animiste, assimilé, authenticité, banane,
						bière, boisson, boubou, boy, brousse, brun, cabaret, case, charlatan, chicotte,
						chrétien, cité, civilisation, civilisé, clan, colonisation, coutume, coutumier,
						culture, défrisage, défriser, démocratie, deuil, dot, drapeau, école,
						éducation, élections, ethnie, européen, évolué, expatrié, fétiche, funérailles,
						gouverneur, gris-gris, guérisseur, haricot, indigène, intellectuel, justice,
						langue, lettré, machette, maman, mangue, manioc, marabout, masque, mère, métis,
						mission, missionnaire, mixte, musulman, national, occidental, occidentalisé,
						occidentaliser, pagne, palabre, paludisme, papaye, patois, piste, santé, sexe,
						sida, soeur, sorcier, symbole, tambour, tam-tam, teint, tôle, tradition,
						traditionnel, tribu, université, vache, vieille, voter.</p>
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