<?php 

include("inc/config.php");
require_once("inc/db.php");
include("inc/login.php");
include("inc/anketa.php");
include("inc/collector.php");
require_once("inc/log.php");

session_start();

if(isset($_POST['i_lang']) && in_array($_POST['i_lang'], $valide_lang)){
	$_SESSION['i_lang'] = $_POST['i_lang'];
}else{
	if(!isset($_SESSION['i_lang']) ||  !in_array($_SESSION['i_lang'], $valide_lang)){
		$_SESSION['i_lang'] = $valide_lang[0];
	}
}



if(!isset($_SESSION['test_id']) || ($_SESSION['test_id']<13 && $_SESSION['test_id']>19)){
	echo "<html><body onLoad=\"window.location='/mkdict_25/redir.php?t=new123FR'\"></body></html>";
	return;
}

if($_SESSION['test_id'] == 35) $_SESSION['i_lang'] = 'fr'; // special case

include("inc/lang_".$_SESSION['i_lang'].".php");

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table width="100%" height="100%" border="0" style="border-spacing:0px;">
<tr height="30%" style="background-color: #12bbad">
	<td width="50%"><h1 style="color:#FFFFFF; padding-left:30%">Dictionnaires des associations verbales du Français</h1></td>
	<td width="50%"><img src="../imgs/NSU_logo_English_Green.png" style="width:50%"></td>
</tr>
<tr height="70%">
	<td valign="center" colspan=2>
		<center>

<!-- Experiment is closed -->
		<img src="https://navigato.ru/content/news/image17413.jpg" border=0 width=30%><br>
		Le test est désormais terminé, nous vous remercions de votre participation et vous <br> 
		invitons à consulter les mises à jour sur le site 
		<a href="https://sites.google.com/site/kevokcemot/home">https://sites.google.com/site/kevokcemot/home</a> <br>
		ou la page FaceBook du projet <a href="https://www.facebook.com/dictaverf">https://www.facebook.com/dictaverf</a>
		</center>
	</td>
</tr>
</table>
</body>
</html>
<?php exit; ?>
<!-- Experiment is closed -->
<?php
if(!isset($_SESSION['stage'])){
	$_SESSION['stage']=0; // login
}
$err = "";

write_log("stage={$_SESSION['stage']}");

if($_SESSION['stage'] == 0){
	if($_POST['key']){
		$err = check_key($_POST['key']);
		if($err == ''){
			$_SESSION['stage'] = 1; // anketa
			$_SESSION['key'] = $_POST['key'];
			$_SESSION['test_lang'] = $Last_key_lang;
//			$_SESSION['test_id'] = $Test_id;
			write_log("auth OK");
		}else{
			login_form($err);
			write_log("auth failed: ".$err);
		}
	}else{
		login_form('');
		write_log("Print login form");
	}
}

if($_SESSION['stage'] == 1){
	$age = "";
	$sex = "";
	$edu = "";
	$lang = "";
	$spec = "";
	$city = "";
//	var_dump($_POST);
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		if($_POST['age'] == ''){
			$age=""; $err .= $locale['age_empty']." ";
		}else{
			if($_POST['age'] <= 90 || $_POST['age'] >= 3){	
				$age = $_POST['age'];
			}
			else{
				$age="";
				$err .= $locale['age_failed'];
			}
		}
		if($_POST['sex'] == 'M')	$sex = true;
		else						$sex = false;
		if($_POST['spec'] != '')	$spec = $_POST['spec']; 
		else						$err .= "<br>".$locale['spec_failed'];
		if($_POST['city'] != '')	$city = $_POST['city']; 
		else						$err .= "<br>".$locale['city_failed'];
		
		if($_POST['lang'] == 'oo'){
			if($_POST['other'] == '') $err .= "<br>".$locale['lang_failed'];
			else					  $lang = $_POST['other'];
		}else
			$lang = $_POST['lang']; 
		$edu = $_POST['edu'];
		
		if($err == ''){
			$_SESSION['stage'] = 2; //collection
			$_SESSION['age'] = intval($age);
			$_SESSION['sex'] = $sex;
			$_SESSION['edu'] = intval($edu);
			$_SESSION['spec'] = $locale[$spec];
			$_SESSION['city'] = $city;
			$_SESSION['lang'] = $lang;
			$_SESSION['reg'] = intval($_POST['reg']);
			write_log("Anketa filled out OK");
		}else{
			write_log("Anketa filled out with errors: ".$err);
			anketa_form($err);
		}
	}else{
		write_log("Print anketa");
		anketa_form('');
	}
}

if($_SESSION['stage'] == 2){
        if(isset($_SESSION['times']) && $_SESSION['times'] > 0)
		$_SESSION['times']++;
	else
		$_SESSION['times'] = 1;
	if(isset($_POST['words'])){
		preg_match_all("|([0-9]+):([^;]+);|", $_POST['words'], $out, PREG_PATTERN_ORDER);
		write_log("Saved words. failed={$_POST['failed']} count=".count($out[0]));
		if($_POST['failed'] == 0){
			$err = db_save_words($_POST['count']);
			// check for error
			write_log("Saved words ".(($err == 0)? "OK":"failed ".$err));
		}
		if($_SESSION['times'] == 3) // number of times + 1  
			$_SESSION['stage'] = 3; //out
		else{
			$_SESSION['stage'] = 2; //participate up to 4 times
			collect_form();
			write_log("Print collection form");
		}
	}else{
		collect_form();
		write_log("Print collection form");
	}
}

if($_SESSION['stage'] == 3){
	thank_form();
	write_log("Print thanks form");
	session_unset();
	session_destroy();
}

?>
		</center>
	</td>
</tr>
</table>
</body>
</html>

