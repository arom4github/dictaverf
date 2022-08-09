<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->gfasa->{$_SESSION["lang"]}; ?></a></li>
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
								<li><a href="./search/gfasa.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/gfasa.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/gfasa.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/gfasa.php?method=inv&num=1"><?php echo $lang->dict->search_method->reaction->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/gfasa.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/gfasa.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/gfasa.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->navbar->gfasa->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include  __DIR__."/lang/".$_SESSION["lang"]."/".$lang->gfasa->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->gfasa->stim->{$_SESSION["lang"]}; ?></p>
					<p> abandonner, absence, absolument, accepter, accès, accompagner, accomplir, accord, accorder, accueillir,
                                            acculturé, acculturer, accuser, acheter, achever, acquérir, acte, action, activité, actuel,
                                            admettre, administration, adopter, adresser, affaire, affirmer, africain, africanisé, africaniser, âge,
                                            agent, agir, agiter, aide, aider, aile, ailleurs, aimer, air, ajouter,
                                            allemand, aller, allumer, alphabétisé, alphabétiser, âme, améliorer, amener, américain, ami,
                                            amour, amuser, an, ancêtre, ancien, anglais, animal, animiste, année, annoncer,
                                            apercevoir, apparaitre, apparaître, appartement, appartenir, appel, appeler, application, appliquer, apporter,
                                            apprécier, apprendre, approcher, appuyer, arbre, argent, arme, armée, arracher, arrêter,
                                            arrière, arrivée, arriver, art, article, aspect, assemblée, asseoir, assimilé, assister,
                                            association, assurer, attacher, attaquer, atteindre, attendre, attente, attention, attirer, attitude,
                                            augmenter, aujourd'hui, autant, auteur, authenticité, autoriser, autorité, autre, autrefois, avance,
                                            avancer, avantage, avenir, aventure, avis, avocat, avoir, avouer, avril, baisser,
                                            banane, bande, banque, bas, base, bataille, battre, beau, beauté, besoin,
                                            bête, bien, bière, billet, blanc, bleu, boire, boisson, bon, bonheur,
                                            bord, boubou, bouche, bout, boy, branche, bras, bref, briller, briser,
                                            brousse, bruit, brûler, brun, budget, bureau, but, cabaret, cabinet, cacher,
                                            cadre, calme, camarade, camp, campagne, canadien, capable, capacité, capital, caractère,
                                            carte, cas, case, cause, causer, central, centre, certain, cesse, cesser,
                                            chaine, chaîne, chair, chaise, chaleur, chambre, champ, chance, changement, changer,
                                            chant, chanter, charge, charger, charlatan, chasser, chaud, chef, chemin, cher,
                                            chercher, cheval, cheveu, chicotte, chien, chiffre, choisir, choix, chose, chrétien,
                                            ciel, circonstance, cité, citer, citoyen, civil, civilisation, civilisé, clair, clan,
                                            classe, client, cœur, coin, colère, collègue, colline, colonisation, combat, combattre,
                                            comité, commander, commencer, commerce, commercial, commission, commun, communauté, commune, communication,
                                            compagnie, compagnon, complet, complexe, comporter, composer, comprendre, compte, compter, concentrer,
                                            concerner, concevoir, conclure, concurrence, condamner, condition, conduire, conférence, confiance, confier,
                                            confirmer, conflit, connaissance, connaitre, consacrer, conscience, conseil, conseiller, conséquence, conserver,
                                            considérer, consister, constater, constituer, construction, construire, contact, contenir, content, contenter,
                                            continuer, contraire, contrat, contribuer, contrôle, contrôler, convaincre, convenir, conversation, corps,
                                            côte, côté, cou, coucher, couler, couleur, coup, couper, couple, cour,
                                            courage, courant, courir, cours, court, cout, couter, coutume, coutumier, couvrir,
                                            craindre, crainte, création, crédit, créer, creuser, cri, crier, crime, crise,
                                            critique, croire, croissance, croix, cuisine, culture, curiosité, dame, danger, dangereux,
                                            danser, date, débat, debout, début, décembre, décider, décision, déclaration, déclarer,
                                            découvrir, décrire, défendre, défense, définir, défrisage, défriser, demande, demander, demeurer,
                                            demi, démocratie, dent, départ, dépasser, dépendre, déplacer, déposer, député, dernier,
                                            descendre, désert, désespoir, désigner, désir, désirer, destiner, détail, déterminer, détruire,
                                            deuil, deuxième, développement, développer, devenir, deviner, devoir, dieu, différence, différent,
                                            difficile, difficulté, digne, dire, direct, directeur, direction, diriger, discours, discussion,
                                            discuter, disparaitre, disposer, disposition, distinguer, distribuer, divers, docteur, document, doigt,
                                            dollar, domaine, dommage, donnée, donner, dormir, dos, dossier, dot, double,
                                            doubler, doucement, douleur, doute, douter, doux, drapeau, dresser, droit, dur,
                                            durer, eau, échange, échapper, échec, éclairer, éclat, éclater, école, économie,
                                            économique, écouter, écrire, éducation, effacer, effectuer, effet, effort, égal, également,
                                            égard, élections, élément, élève, élever, éloigner, embrasser, émission, emmener, émotion,
                                            empêcher, empire, emploi, employer, emporter, emprunter, endormir, endroit, énergie, enfant,
                                            enfermer, enfoncer, engagement, engager, enlever, ennemi, énorme, enquête, ensemble, entendre,
                                            entier, entourer, entrainer, entrée, entreprendre, entreprise, entrer, entretenir, envelopper, envers,
                                            envie, environ, environnement, envisager, envoyer, épaule, époque, éprouver, équipe, erreur,
                                            escalier, espace, espèce, espérer, espoir, esprit, essayer, essentiel, estimer, établir,
                                            établissement, étage, étape, état, été, éteindre, étendre, éternel, ethnie, étoile,
                                            étonner, étrange, étranger, être, étroit, étude, étudiant, étudier, européen, évènement,
                                            éviter, évolué, évoquer, exact, examiner, exception, exemple, exercer, exiger, existence,
                                            exister, expatrié, expérience, expliquer, exposer, expression, exprimer, extérieur, face, facile,
                                            façon, faible, faim, faire, fait, falloir, famille, faute, fauteuil, faux,
                                            faveur, fédéral, femme, fenêtre, fer, ferme, fermer, fête, fétiche, feu,
                                            feuille, février, fier, figure, figurer, fil, fille, film, fils, fin,
                                            financier, finir, fixer, flamme, fleur, flot, foi, fois, folie, fonction,
                                            fonctionner, fond, fonder, fonds, force, forcer, forêt, formation, forme, former,
                                            fort, fortune, fou, foule, fournir, frais, franc, français, frapper, frère,
                                            froid, front, frontière, fruit, fuir, fumée, fumer, funérailles, futur, gagner,
                                            garçon, garde, garder, gauche, général, genou, genre, gens, geste, gestion,
                                            glace, glisser, global, gloire, goût, goutte, gouvernement, gouverneur, grâce, grand,
                                            grandir, grave, gris, gris-gris, gros, groupe, guérisseur, guerre, habiter, habitude,
                                            haine, haricot, hasard, haut, hauteur, herbe, hésiter, heure, heureux, histoire,
                                            historique, hiver, homme, honneur, honorable, honte, horizon, hôtel, humain, idée,
                                            ignorer, ile, image, imaginer, immédiatement, immense, immobile, impliquer, importance, important,
                                            importer, imposer, impossible, impression, inconnu, indépendant, indigène, indiquer, individu, industrie,
                                            industriel, influence, information, inscrire, insister, inspirer, installer, instant, institution, intellectuel,
                                            intelligence, intention, interdire, intéresser, intérêt, intérieur, international, interroger, interrompre, intervenir,
                                            intervention, inutile, inventer, investissement, inviter, jambe, janvier, jardin, jaune, jeter,
                                            jeu, jeudi, jeune, jeunesse, joie, joli, joue, jouer, jour, journal,
                                            journée, juge, jugement, juger, juin, juste, justice, justifier, la droite, la fin,
                                            laisser, la mort, lancer, langue, large, larme, la rose, le bien, le bois, lecture,
                                            le devoir, le droit, léger, le mal, lendemain, lentement, le passé, le présent, le rire, le sol,
                                            l'est, lettre, lettré, lever, lèvre, libéral, libérer, liberté, libre, lien,
                                            lier, lieu, ligne, limite, limiter, lire, lisser, liste, lit, livre,
                                            livrer, local, logique, loi, loin, long, longtemps, l'or, lourd, lueur,
                                            lumière, lundi, lune, lutte, lutter, machette, machine, madame, magnifique, mai,
                                            main, maintenant, maintenir, maison, maitre, majorité, mal, malade, maladie, malgré,
                                            malheur, maman, manger, mangue, manier, manière, manifester, manioc, manque, manquer,
                                            marabout, marche, marché, marcher, mardi, mari, mariage, marier, marquer, mars,
                                            masque, masse, matériel, matière, matin, mauvais, maximum, médecin, meilleur, mêler,
                                            membre, même, mémoire, menacer, mener, mer, mercredi, mère, mériter, message,
                                            mesure, mesurer, méthode, métis, mettre, midi, mieux, milieu, militaire, milliard,
                                            millier, million, ministère, ministre, minute, mise, miser, mission, missionnaire, mixte,
                                            mode, modèle, modifier, moindre, mois, moitié, moment, monde, mondial, monsieur,
                                            montagne, monter, montrer, morceau, mort, mot, moteur, motion, mourir, mouvement,
                                            moyen, mur, musique, musulman, naitre, nation, national, nature, naturel, nécessaire,
                                            nécessité, négociation, neuf, nez, niveau, noir, nom, nombre, nombreux, nommer,
                                            nord, normal, note, noter, nourrir, nouveau, novembre, nu, nuage, nucléaire,
                                            nuit, nul, numéro, obéir, objectif, objet, obliger, observer, obtenir, occasion,
                                            occidental, occidentalisé, occidentaliser, occuper, octobre, odeur, œil, œuvre, officiel, officier,
                                            offrir, oiseau, ombre, oncle, opération, opinion, opposer, opposition, or, ordre,
                                            oreille, organisation, organiser, origine, oser, oublier, ouvert, ouvrage, ouvrir, page,
                                            pagne, pain, paix, palabre, palais, paludisme, papa, papaye, papier, paraitre,
                                            pareil, parent, parlement, parler, parole, part, partager, partenaire, parti, participer,
                                            particulier, partie, partir, parvenir, passage, passé, passer, passion, patois, pauvre,
                                            payer, pays, paysan, peau, peine, pencher, pénétrer, pensée, penser, perdre,
                                            père, période, permettre, personnage, personne, personnel, perte, peser, petit, peuple,
                                            peur, phrase, physique, pièce, pied, pierre, piste, pitié, place, placer,
                                            plaindre, plaine, plaire, plaisir, plan, plein, pleurer, plonger, pluie, poche,
                                            poésie, poète, poids, point, pointe, poitrine, police, politique, pont, population,
                                            port, porte, portée, porter, poser, positif, position, posséder, possibilité, possible,
                                            poste, poursuivre, pousser, poussière, pouvoir, pratique, précédent, précis, préciser, préférer,
                                            premier, prendre, préparer, présence, présent, présenter, président, presque, presse, presser,
                                            pression, prêt, prétendre, prêter, preuve, prévenir, prévoir, prier, prière, prince,
                                            principal, principe, prise, prison, priver, prix, problème, procéder, procédure, processus,
                                            prochain, proche, production, produire, produit, professeur, professionnel, profit, profiter, profond,
                                            programme, progrès, projet, promener, promesse, promettre, prononcer, propos, proposer, proposition,
                                            propre, protection, protéger, prouver, province, provoquer, public, publier, puisque, puissance,
                                            puissant, pur, qualité, quartier, question, quitter, raconter, raison, ramasser, ramener,
                                            rapide, rappeler, rapport, rapporter, rare, rayon, réaction, réagir, réaliser, réalité,
                                            récent, recevoir, recherche, recommandation, recommencer, reconnaitre, reculer, réduire, réel, réfléchir,
                                            réforme, refuser, regard, regarder, régime, région, régional, règle, règlement, régler,
                                            regretter, rejeter, rejoindre, relatif, relation, relever, religion, remarquer, remercier, remettre,
                                            remonter, remplacer, remplir, rencontre, rencontrer, rendre, rentrer, renvoyer, répandre, répéter,
                                            répondre, réponse, reposer, reprendre, représenter, reprise, république, réseau, réserve, réserver,
                                            résister, résoudre, respect, respecter, respirer, responsabilité, responsable, ressembler, ressource, reste,
                                            rester, résultat, retenir, retirer, retour, retourner, retraite, retrouver, réunion, réunir,
                                            réussir, rêve, réveiller, révéler, revenir, revenu, rêver, revoir, révolution, riche,
                                            rien, rire, risque, risquer, robe, rocher, roi, rôle, rouge, rouler,
                                            route, rue, sable, sac, saint, saisir, salaire, salle, saluer, sang,
                                            santé, satisfaire, sauter, sauvage, sauver, savoir, scène, science, scientifique, sec,
                                            second, seconde, secret, secrétaire, secteur, sécurité, seigneur, sein, semaine, semblable,
                                            sembler, sénateur, sens, sensible, sentiment, sentir, séparer, septembre, série, sérieux,
                                            serrer, service, servir, seul, sexe, sida, siècle, signal, signe, signer,
                                            signifier, silence, simple, simplement, situation, situer, social, société, sœur, soin,
                                            soir, soirée, soldat, soleil, solitude, solution, sombre, somme, sommeil, sommet,
                                            son, songer, sonner, sorcier, sorte, sortie, sortir, sou, souffler, souffrance,
                                            souffrir, souhaiter, soulever, souligner, soumettre, source, sourire, soutenir, souvenir, souvent,
                                            spécial, spectacle, structure, subir, succès, suffire, suite, suivant, suivre, sujet,
                                            supérieur, supposer, sûr, surprendre, susciter, symbole, système, table, tache, tâche,
                                            taille, taire, tambour, tam-tam, tandis, tard, taux, technique, teint, télévision,
                                            témoin, temps, tendance, tendre, tendre (vb), tenir, tenter, terme, terminer, terrain,
                                            terre, terrible, territoire, tête, texte, théâtre, tirer, titre, toile, toit,
                                            tôle, tomber, ton, tôt, total, toucher, tour, tourner, tout, trace,
                                            tradition, traditionnel, traduire, train, trainer, trait, traitement, traiter, tranquille, transformer,
                                            transport, travail, travailler, travers, traverser, trembler, trésor, tribu, triste, troisième,
                                            tromper, trou, troubler, trouver, tuer, type, un Anglais, un étranger, un être, une vague,
                                            un général, union, unique, unité, université, un jeune, un pas, un saint, un secret, un souvenir,
                                            un vieux, un voisin, usage, user, utile, utiliser, vache, vague, valeur, valoir,
                                            vaste, veille, vendre, vendredi, venir, vent, vente, ventre, véritable, vérité,
                                            verre, verser, version, vert, vêtement, vêtir, victime, vide, vie, vieillard,
                                            vieille, vieux, vif, village, ville, vin, violence, violent, visage, viser,
                                            visite, vite, vitesse, vivant, vivre, voie, voile, voir, voisin, voiture,
                                            voix, voler, volonté, vote, voter, vouloir, voyage, vrai, vue, yeux,
                                            zone, сœur, сonnaitre, сouter
</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/gfasa.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/gfasa.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/gfasa.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/gfasa.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/gfasa.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/gfasa.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/gfasa.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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
