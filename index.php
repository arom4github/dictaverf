<?php include("include/init.php");?>
<?php include("include/header.php"); ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/stat.css"/>
<!--    <script type="text/javascript" src="js/stat.js"></script>  removed because created an error in the console-->


<!--<div class="menu_bg">-->
	<div id="navigator">
<!--	<ul id="nav-menu"> -->

<?php
        $menu = array(
		"DAF" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/about", $locale['about']), //"Le Projet"),
				"auth" => array("/authors", $locale['authors']), //"Contributeurs"),
				"dict" => array("/dict", $locale['dict']), //"Dictionnaire"),
				"help" => array("/help", $locale['help']), //"Aide"),
				"dicts"=> array("/about", $locale['chg_dict'])), //"Changer de Dictionnaire")),
		"DINAF" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/aboutj1", $locale['about']),
				"auth" => array("/authorsj1", $locale['authors']),
				"dict" => array("/joint1", $locale['dict']),
				"help" => array("/helpj1", $locale['help']),
				"dicts"=> array("/about", $locale['chg_dict'])),
		"DINAFN" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/aboutj", $locale['about']),
				"auth" => array("/authorsj", $locale['authors']),
				"dict" => array("/joint", $locale['dict']),
				"help" => array("/helpj", $locale['help']),
				"dicts"=> array("/about", $locale['chg_dict'])),
		"DAF-2019" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/about3", $locale['about']),
				"auth" => array("/authors3", $locale['authors']),
				"dict" => array("/dict3", $locale['dict']),
				"help" => array("/help3", $locale['help']),
				"dicts"=> array("/about", $locale['chg_dict'])),
		"FAS1-RDSD" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/about5", $locale['about']),
				"auth" => array("/authors5", $locale['authors']),
				"dict" => array("/dict5", $locale['dict']),
				"help" => array("/help5", $locale['help']),
				"dicts"=> array("/about", $locale['chg_dict'])),
		"FAS2-RDSD" => array(
				"home" => array("/", $locale['home']),
				"proj" => array("/about4", $locale['about']),
				"auth" => array("/authors4", $locale['authors']),
				"dict" => array("/dict4", $locale['dict']),
				"help" => array("/help4", $locale['help']),
				"dicts"=> array("/about", $locale['chg_dict'])),
	);
	$menu_dd = array($locale["DAF"]=>"/about", $locale["DINAF"]=>"/aboutj1", $locale["DINAFN"]=>"/aboutj", 
			 $locale["DINAFN1"]=>"/about3",$locale["FAS1-RDSD"]=>"/about5",$locale["FAS2-RDSD"]=>"/about4");
	$page2menu = array("experiment" => "DAF", "about"=>"DAF", "authors"=>"DAF", "help"=>"DAF", "dict"=>"DAF",
			   "aboutj1"=>"DINAF", "authorsj1"=>"DINAF", "helpj1"=>"DINAF","joint1"=>"DINAF", "bjoint1"=>"DINAF",
			   "aboutj"=>"DINAFN", "authorsj"=>"DINAFN", "helpj"=>"DINAFN", "joint"=>"DINAFN", "bjoint"=>"DINAFN",
			   "about3"=>"DAF-2019", "authors3"=>"DAF-2019", "help3"=>"DAF-2019","dict3"=>"DAF-2019",
			   "about4"=>"FAS2-RDSD", "authors4"=>"FAS2-RDSD", "help4"=>"FAS2-RDSD","dict4"=>"FAS2-RDSD",
			   "about5"=>"FAS1-RDSD", "authors5"=>"FAS1-RDSD", "help5"=>"FAS1-RDSD","dict5"=>"FAS1-RDSD");
	function print_menu($_menu_, $lang){
		global $menu, $menu_dd;
		echo <<<EOL
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="{$menu[$_menu_]['home'][0]}"><i class="fa fa-fw fa-home">{$menu[$_menu_]['home'][1]}</i></a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <div class="ui simple dropdown item">
                <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                <div class="menu" style="right: 0; left: auto;">
EOL;
		foreach($menu[$_menu_] as $key=>$val){
			if($key != "dicts" && $key != 'home') echo "<a class=\"item\" href=\"{$val[0]}\">{$val[1]}</a>\n";
		}
                echo "<a class=\"item\" href=\"/{$lang}\"><span class=\"flag-icon flag-icon-{$lang}\"></span></a>";
		echo "<a class=\"item\">{$menu[$_menu_]['dicts'][1]}:</a>";
		foreach($menu_dd as $key=>$val) {
			preg_match("/\((.*)\)/",$key, $keys);
			echo "<a class=\"item\" href=\"{$val}\">{$keys[1]}</a>";
		}
 		echo <<<EOL
                  </div>
                </div>
          </li>
        </ul>
	<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<div class="ui simple dropdown item">
				<a class="nav-link dropdown-toggle" href="{$menu[$_menu_]['dicts'][0]}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{$menu[$_menu_]['dicts'][1]}</a>
				<div class="menu">
EOL;
		foreach($menu_dd as $key=>$val) echo "<a class=\"dropdown-item\" href=\"{$val}\">{$key}</a>";
		echo <<<EOL
				</div>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav">
EOL;
		foreach($menu[$_menu_] as $key=>$val){
			if($key != "dicts" && $key != 'home') echo "<li class=\"nav-item mx-2\"><a class=\"nav-link\" href=\"{$val[0]}\">{$val[1]}</a> </li>";
		}
		echo <<<EOL
        		<li class="nav-item mx-2"> <a class="nav-link" href="/{$lang}"><span class="flag-icon flag-icon-{$lang}"></span></a> </li>
      		</ul>
	</div>
	</div>
</nav>
EOL;
	}
    	if((isset($page2menu[$page])) ) {
		print_menu($page2menu[$page], $lang=='ru'?'fr':'ru');
	}
	elseif(($page=="dict")) { // && ($lang == "fr")) { 

   } elseif((($page=="joint1") || ($page=="bjoint1")) ) { ?>
    <?php } elseif((($page=="joint") || ($page=="bjoint")))  { ?>
      <?php } elseif(($page=="dict3")) { ?>

<?php } ?>
	</ul>
	</div>


<!-- .........................................	Navbar ru .......................................... -->
<!-- <div class="content"> -->
<?php
if($lang == "ru"){
?>
<div class="bg-primary pt-1" style="">
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
        <div class="row">
          <div class="col-md-12" style="">
            <h1 class="">Ассоциативные словари французского языка</h1>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <a href="https://www.nsu.ru/n/"><img class="img-fluid d-block" src="imgs/NSU_logo_Russian_Green.png" width="150%" height="100%" style=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}else{
?>
<div class="bg-primary pt-1" style="">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
        <div class="row">
          <div class="col-md-12" style="">
            <h1 class="">Dictionnaires des associations verbales du Français</h1>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <a href="https://english.nsu.ru/"><img class="img-fluid d-block" src="imgs/NSU_logo_English_Green.png" style=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<?php
	if(       ($page=="about")
		||($page=="about3")
		||($page=="about4")
		||($page=="about5")
		||($page=="aboutj")
		||($page=="aboutj1")
		||($page=="help")
		||($page=="help3")
		||($page=="help4")
		||($page=="help5")
		||($page=="helpj")
		||($page=="helpj1")
		||($page=="authors")
		||($page=="authors3")
		||($page=="authors4")
		||($page=="authorsj")
		||($page=="authorsj1")
		||($page=="dict")
		||($page=="dict3")
		||($page=="dict4")
		||($page=="dict5")
		||($page=="intro")
		||($page=="joint")
		||($page=="joint1")
		||($page=="bjoint")
		||($page=="bjoint1")
		||($page=="experiment")){
			include("pages_".$lang."/".$page.".php");
		}
	  else
	  {
	  		include("pages_".$lang."/unknown.php");
	  }
		?>
<!-- </div> -->



<?php include("include/footer.php"); ?>
