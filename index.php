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
	);
	$menu_dd = array($locale["DAF"]=>"/about", $locale["DINAF"]=>"/aboutj1", $locale["DINAFN"]=>"/aboutj", $locale["DINAFN1"]=>"/about3");
	$page2menu = array("experiment" => "DAF", "about"=>"DAF", "authors"=>"DAF", "help"=>"DAF",// "dict"=>"DAF",
			   "aboutj1"=>"DINAF", "authorsj1"=>"DINAF", "helpj1"=>"DINAF",
			   "aboutj"=>"DINAFN", "authorsj"=>"DINAFN", "helpj"=>"DINAFN", //"joint"=>"DINAFN", "bjoint"=>"DINAFN",
			   "about3"=>"DAF-2019", "authors3"=>"DAF-2019", "help3"=>"DAF-2019");
	function print_menu($_menu_, $lang){
		global $menu, $menu_dd;
		echo <<<EOL
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="{$menu[$_menu_]['home'][0]}"><i class="fa fa-fw fa-home">{$menu[$_menu_]['home'][1]}</i></a>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{$menu[$_menu_]['dicts'][0]}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{$menu[$_menu_]['dicts'][1]}</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
EOL;
		foreach($menu_dd as $key=>$val) echo "<a class=\"dropdown-item\" href=\"{$val}\">{$key}</a>";
		echo <<<EOL
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
?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home"><?php echo $locale["home"]; ?></i></a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
              <div class="ui simple dropdown item">
              <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
              <div class="menu" style="right: 0; left: auto;">
                  <a class="item" href="/about"><?php echo $locale["about"]; ?></a>
                  <a class="item" href="/authors"><?php echo $locale["authors"]; ?></a>
                  <a class="item" href="/dict"><?php echo $locale["dict"]; ?></a>
                  <a class="item" href="/help"><?php echo $locale["help"]; ?></a>
                  <a class="item" href="/ru"><span class="flag-icon flag-icon-ru"></span></a>
                  <a class="nav-link"><?php echo $locale["chg_dict"]; ?></a>
                  <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                  <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                  <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                  <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                </div>
              </div>
        </li>
      </ul>
  		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
  			<ul class="navbar-nav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                  <div class="ui simple dropdown item">
                    <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $locale["chg_dict"]; ?></a>
                    <div class="menu">
                      <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                      <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                      <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                      <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                    </div>
                  </div>
            </li>
          </ul>
  				<li class="nav-item mx-2"> <a class="nav-link" href="about"><?php echo $locale["about"]; ?></a> </li>
  				<li class="nav-item mx-2"> <a class="nav-link" href="authors"><?php echo $locale["authors"]; ?></a> </li>
  				<li class="nav-item"><a class="nav-link" href="dict"><?php echo $locale["dict"]; ?></a></li>
  				<li class="nav-item"><a class="nav-link" href="help"><?php echo $locale["help"]; ?></a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/<?php echo $lang=='ru'?'fr':'ru'; ?>"><span class="flag-icon flag-icon-<?php echo $lang=='ru'?'fr':'ru'; ?>"></span></a> </li>
        </ul>
  		</div>

  	</div>
  </nav>
  <!-- .........................................	Dict DINAF fr .......................................... -->

  <?php } elseif((($page=="joint1") || ($page=="bjoint1")) ) { ?>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <!-- Mobile Version -->
    	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;<?php echo $locale["home"]; ?></i></a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <div class="ui simple dropdown item">
                <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                <div class="menu" style="right: 0; left: auto;">
                    <a class="item" href="/aboutj1"><?php echo $locale["about"]; ?></a>
                    <a class="item" href="/authorsj1"><?php echo $locale["authors"]; ?></a>
                    <a class="item" href="/joint1"><?php echo $locale["dict"]; ?></a>
                    <a class="item" href="/helpj1"><?php echo $locale["help"]; ?></a>
                    <a class="item" href="/ru"><span class="flag-icon flag-icon-ru"></span></a>
                    <a class="nav-link">Changer de Dictionnaire&nbsp;</a>
                    <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                    <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                    <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                    <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                  </div>
                </div>
          </li>
        </ul>
        <!-- Desktop Version -->
    		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
    			<ul class="navbar-nav">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                    <div class="ui simple dropdown item">
                      <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $locale["chg_dict"]; ?></a>
                      <div class="menu">
                        <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                        <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                        <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                        <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                      </div>
                    </div>
              </li>
            </ul>
    				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj1"><?php echo $locale["about"]; ?></a> </li>
    				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj1"><?php echo $locale["authors"]; ?></a> </li>
    				<li class="nav-item"><a class="nav-link" href="joint1"><?php echo $locale["dict"]; ?></a></li>
    				<li class="nav-item"><a class="nav-link" href="helpj1"><?php echo $locale["help"]; ?></a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/<?php echo $lang=='ru'?'fr':'ru'; ?>"><span class="flag-icon flag-icon-<?php echo $lang=='ru'?'fr':'ru'; ?>"></span></a> </li>
          </ul>
    		</div>

    	</div>
    </nav>
    <!-- .........................................	Dict DINAFN fr .......................................... -->

    <?php } elseif((($page=="joint") || ($page=="bjoint")))  { ?>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;<?php echo $locale["home"]; ?></i></a>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                  <div class="ui simple dropdown item">
                  <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                  <div class="menu" style="right: 0; left: auto;">
                      <a class="item" href="/aboutj"><?php echo $locale["about"]; ?></a>
                      <a class="item" href="/authorsj"><?php echo $locale["authors"]; ?></a>
                      <a class="item" href="/joint"><?php echo $locale["dict"]; ?></a>
                      <a class="item" href="/helpj"><?php echo $locale["help"]; ?></a>
                      <a class="item" href="/ru"><span class="flag-icon flag-icon-ru"></span></a>
                      <a class="nav-link"><?php echo $locale["chg_dict"]; ?></a>
                      <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                      <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                      <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                      <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                    </div>
                  </div>
            </li>
          </ul>
      		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      			<ul class="navbar-nav">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                      <div class="ui simple dropdown item">
                      <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $locale["chg_dict"]; ?></a>
                        <div class="menu">
                          <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                          <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                          <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                          <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                        </div>
                      </div>
                </li>
              </ul>
      				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj"><?php echo $locale["about"]; ?></a> </li>
      				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj"><?php echo $locale["authors"]; ?></a> </li>
      				<li class="nav-item"><a class="nav-link" href="joint"><?php echo $locale["dict"]; ?></a></li>
      				<li class="nav-item"><a class="nav-link" href="helpj"><?php echo $locale["help"]; ?></a></li>
              <li class="nav-item mx-2"> <a class="nav-link" href="/<?php echo $lang=='ru'?'fr':'ru'; ?>"><span class="flag-icon flag-icon-<?php echo $lang=='ru'?'fr':'ru'; ?>"></span></a> </li>
            </ul>
      		</div>

      	</div>
      </nav>
      <!-- .........................................	Dict DAF-2019 fr .......................................... -->

      <?php } elseif(($page=="dict3")) { ?>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <!-- Mobile Version -->
        	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;<?php echo $locale["home"]; ?></i></a>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                    <div class="ui simple dropdown item">
                    <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                    <div class="menu" style="right: 0; left: auto;">
                        <a class="item" href="/about3"><?php echo $locale["about"]; ?></a>
                        <a class="item" href="/authors3"><?php echo $locale["authors"]; ?></a>
                        <a class="item" href="/dict3"><?php echo $locale["dict"]; ?></a>
                        <a class="item" href="/help3"><?php echo $locale["ihelp"]; ?></a>
                        <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
                        <a class="nav-link"><?php echo $locale["chg_dict"]; ?>&nbsp;</a>
                        <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                        <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                        <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                        <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                      </div>
                    </div>
              </li>
            </ul>
            <!-- Desktop Version -->
        		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        			<ul class="navbar-nav">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                        <div class="ui simple dropdown item">
                          <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $locale["chg_dict"]; ?>&nbsp;</a>
                          <div class="menu">
                            <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                            <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                            <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                            <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                          </div>
                        </div>
                  </li>
                </ul>
        				<li class="nav-item mx-2"> <a class="nav-link" href="about3"><?php echo $locale["about"]; ?></a> </li>
        				<li class="nav-item mx-2"> <a class="nav-link" href="authors3"><?php echo $locale["authors"]; ?></a> </li>
        				<li class="nav-item"><a class="nav-link" href="dict3"><?php echo $locale["dict"]; ?></a></li>
        				<li class="nav-item"><a class="nav-link" href="help3"><?php echo $locale["help"]; ?></a></li>
              <li class="nav-item mx-2"> <a class="nav-link" href="/<?php echo $lang=='ru'?'fr':'ru'; ?>"><span class="flag-icon flag-icon-<?php echo $lang=='ru'?'fr':'ru'; ?>"></span></a> </li>
              </ul>
        		</div>

        	</div>
        </nav>

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
		||($page=="aboutj")
		||($page=="aboutj1")
		||($page=="help")
		||($page=="help3")
		||($page=="helpj")
		||($page=="helpj1")
		||($page=="authors")
		||($page=="authors3")
		||($page=="authorsj")
		||($page=="authorsj1")
		||($page=="dict")
		||($page=="dict3")
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
