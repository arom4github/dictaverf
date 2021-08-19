<?php
/**
*\file direct_search.php
*\brief Management of returned data according to the method and dictionary specified (direct search)
*\date Summer 2021
*/

include "class_filter.php";
include "db.php";

$filter = new Filter;
/* Check errors during the creation of the Filter */
if(count($filter->getErrors())>0){
	/* Error in creation of the Filter */
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.', "error" => $filter->getErrors()));
	exit;
}else{
	http_response_code(200);
    header('Content-Type: application/json');
}

/* Use the good fonction for each dictionary and send data */
switch ($filter->getDict()) {
	case 'fas':
		/* get data from database and send them */
		$res = db_right_dict(12, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanfn':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"aimer",
				"joint"=>"amour 256; adorer 171; détester 110; haïr 99; cœur 80; donner, vie 47; bonheur, vivre 42; apprécier 36; son prochain 32; chérir 28; famille, toujours 25; partager 24; à la folie 19; passion, sentiment 16; autre, enfants 14; désirer, femme 13; amoureux, à perdre la raison, beaucoup, quelqu'un 12; tendresse 11; mourir, souffrir 10; embrasser 9; joie, love, plaisir 8; aimer, amant, couple, d'amour, passionnément 7; être, être aimé, folie, fort, jouir 6; affection, autres, enfant, sans compter 5; bien, câliner, choyer, difficile, essentiel, inconditionnellement, mariage, respecter, rouge, savourer, tout, vouloir 4; à en mourir, agréable, amitié, chaleur, danger, désir, épouse, faire, haine, heureux, homme, important, jouer, lire, manger, mari, offrir, rire, sourire, toi, tout le monde 3; amer, amis, à mourir, animaux, aussi, à vie, beau, bisou, chocolat, choisir, conjoint, croire, dire, don, douceur, encore, éperdument, essence, fille, fils, fleur, follement, harmonie, hum !, liberté, longtemps, lover, maman, marier, monde, nature, oui, papillon dans le ventre, parler, partage, pas, perdre, peur, plaire, pleurer, plus que tout, pour toujours, prendre, quitter, recevoir, réciprocité, regarder, relation, rester, rêve, rose, sa famille, sans limite, Sébastien, ses enfants, sexe, ton prochain, tristesse 2; 14 février, admirer, affectionner, aider, ailes, aimer à la folie, aimer à mourir, aimer est le plus beau verbe, à la vie à la mort, à l'infini, altruisme, âme, âme sœur, ami, à mort, amoureuse, amour toujours, amour universel, appréciation, approuver, à quoi ça sert, attachement, au-delà du réalisme, autrui, avoir plaisir, bague, base, battements cœur, belles choses, bêtise, bien-être, blessure, boire, boire et chanter, bon, cadeau, ça fait du bien---, câlin, câlins, calme, c'est ce qu'il y a de plus beau, chanter, chaud, chercher, ciel, cœur battant, cœur rose, comme au premier jour, comme un fou, compliqué, comprendre, confortable, contact, contrainte, copain, Corinthiens 13, corps, croquer, crucial, Daniel Balavoine, d'avantage, David, déception, déchirure, déraison, désaimer, de tout cœur, deux, dévorer, don de soi, donner p, dormir, douter, d'un impossible amour, dur, durée, échec, écrire, Égée, elle, en amour, ensemble, entier, envers et contre tout, éprouver, espoir, et aimer aimer (Saint-Augustin), éternel, éternue, et être aimée, et le dire, et l'être en retour, être amoureux, être attiré par quelque chose o, être bien, être sûr d'être aimé, et se le dire, exister, facile ou difficile, faire l'amour, feu, fidélité, finalité de la vie, fin de la raison, fleurs, flou, fluidité, formidable, fourre-tout, franchir, Frederick, frères, gâter, généreux, générosité, grâce, gratuit, idéale, idylle, il faut être deux, illusion, impossible, inconditionnel, incontrôlable, indispensable, infiniment, intensément, intensité, je l'aime à mourir, Jérôme, jeunes, jubiler, Lapinou, la vie, le plus important, le problème du français est que, les autres et soi-même, les uns les autres, libre, lier, l'important c'est d'aimer, loin, lorgner, lui, ma copine, mal, Marguerite, mensonge, mère, mon amour, mon chien, mon compagnon, mon homme, naturel, objectif, oser, ou ne pas aimer, pain, palpiter, participer, Philippe, plus que soi, poète, posséder, pour vivre, préserver, prochain, proche, profondément, projet, protéger, raffoler, raison, raison de vivre, regard, ressentir(1824, 369 [20.23%], 0, 231)",
				"france"=> "amour 67; adorer 50; détester 40; cœur 25; vivre 22; haïr 21; donner 18; bonheur 14; vie 13; apprécier, chérir 12; partager 11; à la folie, toujours 8; à perdre la raison, passion, sentiment 7; désirer, son prochain 6; tendresse 5; aimer, famille, folie, passionnément, plaisir, souffrir 4; autre, autres, couple, embrasser, enfant, enfants, femme, mourir, sans compter 3; amant, câliner, choisir, choyer, dire, être aimé, papillon dans le ventre, perdre, pleurer, quelqu'un, quitter, regarder, savourer, toi 2; à en mourir, affection, affectionner, aimer à la folie, à la vie à la mort, âme, amer, amis, amitié, amoureux, à quoi ça sert, attachement, à vie, avoir plaisir, beaucoup, belles choses, boire, boire et chanter, bon, chanter, chercher, cœur rose, comme au premier jour, comprendre, contact, croire, croquer, d'amour, danger, Daniel Balavoine, David, désaimer, désir, deux, dévorer, difficile, don, douter, d'un impossible amour, encore, entier, éperdument, épouse, éprouver, espoir, essence, essentiel, et aimer aimer (Saint-Augustin), éternel, éternue, et le dire, être attiré par quelque chose o, être sûr d'être aimé, exister, faire l'amour, fidélité, fille, finalité de la vie, fleur, fluidité, formidable, fort, fourre-tout, franchir, gratuit, haine, heureux, idylle, il faut être deux, incontrôlable, indispensable, infiniment, je l'aime à mourir, joie, jouer, le problème du français est que, liberté, libre, l'important c'est d'aimer, lire, loin, love, ma copine, mal, Marguerite, mariage, marier, mensonge, monde, naturel, offrir, oui, ou ne pas aimer, palpiter, Philippe, plus que soi, plus que tout, poète, pour toujours, préserver, raffoler, raison, recevoir, réciprocité, relation, respecter, rester, rêve, rire, rouge, sacré, Sandrine, sans retour, savoir, Sébastien, sentiment fort, sentir, sérénité, se retrouver, s'oublier, souhait, souhaiter, tendre, tout, tout donner, tristesse, tuer, vive, volonté, Yoann 1 (568, 179 [31.51%], 0, 130)",
				"belgique"=>"amour 81; adorer 51; détester 29; haïr 27; cœur 26; donner 20; apprécier 14; vie 12; bonheur 9; toujours 8; famille 7; sentiment 6; à la folie, chérir, passion, vivre 5; love, son prochain 4; autre, bien, enfants, être, joie, jouir, mourir, partager, quelqu'un, rouge, souffrir 3; à en mourir, amant, à perdre la raison, beau, beaucoup, choyer, couple, désirer, douceur, embrasser, être aimé, femme, fort, heureux, hum !, mari, peur, plaisir, sans compter, sourire, tendresse 2; admirer, ailes, aimer est le plus beau verbe, à l'infini, amis, à mort, amoureux, approuver, au-delà du réalisme, à vie, bague, bisou, chaleur, cœur battant, confortable, copain, croire, crucial, déception, désir, difficile, don, don de soi, dur, éperdument, essentiel, et être aimée, et l'être en retour, faire, fin de la raison, folie, follement, idéale, illusion, impossible, jeunes, Lapinou, le plus important, lier, longtemps, lover, lui, maman, manger, mariage, mon amour, mon compagnon, mon homme, nature, objectif, offrir, oui, passionnément, plaire, posséder, projet, raison de vivre, regard, relation, respecter, ressentir, savourer, Sébastien, sentiment merveilleux, sexe, simple, son frère, toujour plus, toujours plus, tout le monde, tristesse, uni, vénérer, vivre avec une autre personne, voler, vouloir 1 (469, 126 [26.87%], 0, 76)",
				"suisse"=>"amour 43; adorer 34; haïr 28; détester 26; cœur 9; son prochain 8; bonheur, vie, vivre 7; apprécier 6; désirer 5; amoureux, autre, chérir 4; donner, famille, partager, passion, sentiment, toujours 3; à la folie, aussi, beaucoup, câliner, enfant, enfants, essentiel, être, être aimé, femme, harmonie, inconditionnellement, lire, souffrir 2; 14 février, affection, aider, aimer, aimer à mourir, amant, amer, à mourir, amour toujours, à perdre la raison, autres, autrui, base, battements cœur, bêtise, bien, bien-être, ça fait du bien---, c'est ce qu'il y a de plus beau, chaleur, chocolat, ciel, conjoint, Corinthiens 13, corps, couple, danger, déraison, durée, elle, embrasser, encore, envers et contre tout, épouse, être amoureux, et se le dire, facile ou difficile, feu, fille, fleur, fleurs, fort, gâter, généreux, important, Jérôme, joie, jouer, jubiler, les autres et soi-même, liberté, lorgner, love, lover, manger, mariage, mourir, nature, offrir, pain, partage, participer, passionnément, plaire, plaisir, plus que tout, pour toujours, pour vivre, proche, profondément, protéger, quelqu'un, respecter, rester, rire, sa famille, saisir, sans conditions, sans discrimination, se donner, ses enfants, sexualité, soi, tendresse, toi, très fort, trouver, vibrer, vitale, voiture, vouloir 1 (329, 125 [37.99%], 0, 91)",
				"canada"=>"amour 65; adorer 36; haïr 23; cœur 20; détester, vie 15; son prochain 14; bonheur 12; famille 11; vivre 8; beaucoup, chérir, partager 7; amoureux, d'amour, donner, enfants, femme, quelqu'un, toujours 6; à la folie, apprécier, autre 4; affection, agréable, embrasser, homme, joie, jouir, mourir, tendresse, tout 3; aimer, amant, amitié, animaux, à perdre la raison, difficile, faire, fils, fort, haine, important, inconditionnellement, love, parler, pas, prendre, rose, sans limite, ton prochain, tout le monde, vouloir 2; altruisme, âme sœur, ami, amoureuse, à mourir, amour universel, appréciation, autres, bisou, blessure, cadeau, câlin, câlins, calme, chaleur, chaud, chocolat, comme un fou, compliqué, conjoint, contrainte, couple, danger, d'avantage, déchirure, désir, de tout cœur, donner p, dormir, échec, écrire, Égée, en amour, ensemble, épouse, essence, être, être bien, flou, folie, follement, Frederick, frères, générosité, grâce, inconditionnel, intensément, intensité, jouer, la vie, les uns les autres, longtemps, maman, manger, mari, mariage, marier, mère, mon chien, monde, oser, partage, passion, passionnément, plaisir, prochain, recevoir, réciprocité, respecter, rêve, rire, sa famille, sa femme, s'aimer, s'aimer les uns les autres, sa mère, sans attente, sans limites, sans partage, sans raison, sauver, sa vie, savourer, s'effriter, sensation, ses enfants, sexe, soi-meme, son amoureux/amoureuse, souffrir, sourire, toi, toucher, vertus, youpi 1 (458, 148 [32.31%], 0, 95)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2':
		/* get data from database and send them */
		$res = db_right_dict(35, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas1_red':
		/* get data from database and send them */
		$res = db_right_dict(38, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2_red':
		/* get data from database and send them */
		$res = db_right_dict(37, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	default:
		/* Make a default case */
		print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.',"error"=>array("Dictionary not found.")));
		break;
}
?>
