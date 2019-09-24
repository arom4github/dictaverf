<?php include("include/init.php");?>
<?php include("include/header.php"); ?>
<!-- <div class="top_line">
	<a href="/" style="float:left;"> <img class="logo" border=0 src="<?php echo $basedir; ?>imgs/ico/home.png" alt="home"/></a>
	<a href="ru" style="float:right;"><img class="logo" border=0 src="<?php echo $basedir; ?>imgs/ico/russia.png" alt="ru"/></a>
	<a href="fr" style="float:right;"><img class="logo" border=0 src="<?php echo $basedir; ?>imgs/ico/france.png" alt="fr"/></a>
</div> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/stat.css"/>
<!--    <script type="text/javascript" src="js/stat.js"></script>  removed because created an error in the console-->


<!-- Dict menu -->
<!--
<?php if ($page!="intro") { ?>
<div class="menu_dict">
	<div class="ui menu">
	  <div class="ui simple dropdown item">
	    <?php echo $locale["dict"]; ?>
	    <i class="dropdown icon"></i>
	    <div class="menu">
	      <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
	      <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
	      <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
	      <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
	    </div>
	  </div>
	</div>
</div>
<?php } ?>
-->
<!--<div class="menu_bg">-->
	<div id="navigator">
<!--	<ul id="nav-menu"> -->


<!-- .........................................	DAF  fr .......................................... -->

<?php
    	if((($page=="experiment")||($page=="about")||($page=="authors") || ($page =="help")) && ($lang == "fr")) {
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">DAF</a> <a class="dropdown-item" href="aboutj1">DINAF</a> <a class="dropdown-item" href="aboutj">DINAFN</a> <a class="dropdown-item" href="about3">DAF-2019<br></a></div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mx-2"> <a class="nav-link" href="about">Le Projet</a> </li>
				<li class="nav-item mx-2"> <a class="nav-link" href="authors">Contributeurs</a> </li>
				<li class="nav-item"><a class="nav-link" href="dict">Dictionnaire</a></li>
				<li class="nav-item"><a class="nav-link" href="help">Aide</a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
      </ul>
		</div>
	</div>
</nav>

<!-- .........................................	DAF  ru .......................................... -->

<?php }
elseif((($page=="experiment")||($page=="about")||($page=="authors") || ($page =="help")) && ($lang == "ru")) {
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mx-2"> <a class="nav-link" href="about">О проекте</a> </li>
				<li class="nav-item mx-2"> <a class="nav-link" href="authors">Авторы</a> </li>
				<li class="nav-item"><a class="nav-link" href="dict">Словари</a></li>
				<li class="nav-item"><a class="nav-link" href="help">Помощь</a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
      </ul>
		</div>
	</div>
</nav>


<!-- old
		<li <?php if($page=="about"){echo "id=\"nav-menu-act\"";}?>><a href="about"><?php echo $locale['about']; ?></a></li>
		<li <?php if($page=="authors"){echo "id=\"nav-menu-act\"";}?>><a href="authors"><?php echo $locale['authors']; ?></a></li>
		<li <?php if($page=="dict"){echo "id=\"nav-menu-act\"";}?>><a href="dict"><?php echo $locale['dict']; ?></a></li>
		<li <?php if($page=="help"){echo "id=\"nav-menu-act\"";}?>><a href="help"><?php echo $locale['help']; ?></a></li>
-->


<!-- .........................................	DINAF fr .......................................... -->

<?php } elseif((($page=="aboutj1")||($page=="authorsj1") || ($page=="helpj1")) && ($lang == "fr")) { ?>


	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">DAF</a> <a class="dropdown-item" href="aboutj1">DINAF</a> <a class="dropdown-item" href="aboutj">DINAFN</a> <a class="dropdown-item" href="about3">DAF-2019<br></a></div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item mx-2"> <a class="nav-link" href="aboutj1">Le Projet</a> </li>
					<li class="nav-item mx-2"> <a class="nav-link" href="authorsj1">Contributeurs</a> </li>
					<li class="nav-item"><a class="nav-link" href="joint1">Dictionnaire</a></li>
					<li class="nav-item"><a class="nav-link" href="helpj1">Aide</a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
				</ul>
			</div>
		</div>
	</nav>

<!-- .........................................	DINAF ru .......................................... -->

<?php } elseif((($page=="aboutj1")||($page=="authorsj1") || ($page=="helpj1")) && ($lang == "ru")) { ?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj1">О проекте</a> </li>
				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj1">Авторы</a> </li>
				<li class="nav-item"><a class="nav-link" href="joint1">Словари</a></li>
				<li class="nav-item"><a class="nav-link" href="helpj1">Помощь</a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
      </ul>
		</div>
	</div>
</nav>





<!-- old
		<li <?php if($page=="aboutj1"){echo "id=\"nav-menu-act\"";}?>><a href="aboutj1"><?php echo $locale['about']; ?></a></li>
		<li <?php if($page=="authorsj1"){echo "id=\"nav-menu-act\"";}?>><a href="authorsj1"><?php echo $locale['authors']; ?></a></li>
		<li <?php if($page=="joint1"){echo "id=\"nav-menu-act\"";}?>><a href="joint1"><?php echo $locale['dict']; ?></a></li>
		<li <?php if($page=="helpj1"){echo "id=\"nav-menu-act\"";}?>><a href="helpj1"><?php echo $locale['help']; ?></a></li>
-->

<!-- .........................................	DINAFN fr  .......................................... -->

<!--		<li <!?php if($page=="experiment"){echo "id=\"nav-menu-act\"";}?>><a href="experiment"><!?php echo $locale['experiments']; ?></a></li> -->
<?php } elseif((($page=="aboutj")||($page=="authorsj") || ($page=="helpj")) && ($lang == "fr")) { ?>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">DAF</a> <a class="dropdown-item" href="aboutj1">DINAF</a> <a class="dropdown-item" href="aboutj">DINAFN</a> <a class="dropdown-item" href="about3">DAF-2019<br></a></div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item mx-2"> <a class="nav-link" href="aboutj">Le Projet</a> </li>
					<li class="nav-item mx-2"> <a class="nav-link" href="authorsj">Contributeurs</a> </li>
					<li class="nav-item"><a class="nav-link" href="joint">Dictionnaire</a></li>
					<li class="nav-item"><a class="nav-link" href="helpj">Aide</a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
				</ul>
			</div>
		</div>
	</nav>

<!-- .........................................	DINAFN ru  .......................................... -->

<?php } elseif((($page=="aboutj")||($page=="authorsj") || ($page=="helpj")) && ($lang == "ru")) { ?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj">О проекте</a> </li>
				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj">Авторы</a> </li>
				<li class="nav-item"><a class="nav-link" href="joint">Словари</a></li>
				<li class="nav-item"><a class="nav-link" href="helpj">Помощь</a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
      </ul>
		</div>
	</div>
</nav>


<!-- old
		<li <?php if($page=="aboutj"){echo "id=\"nav-menu-act\"";}?>><a href="aboutj"><?php echo $locale['about']; ?></a></li>
		<li <?php if($page=="authorsj"){echo "id=\"nav-menu-act\"";}?>><a href="authorsj"><?php echo $locale['authors']; ?></a></li>
		<li <?php if($page=="joint"){echo "id=\"nav-menu-act\"";}?>><a href="joint"><?php echo $locale['dict']; ?></a></li>
		<li <?php if($page=="helpj"){echo "id=\"nav-menu-act\"";}?>><a href="helpj"><?php echo $locale['help']; ?></a></li>
-->


<!-- .........................................	DAF2019 fr.......................................... -->

<?php } elseif((($page=="about3")||($page=="authors3") || ($page=="help3")) && ($lang == "fr")) { ?>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">DAF</a> <a class="dropdown-item" href="aboutj1">DINAF</a> <a class="dropdown-item" href="aboutj">DINAFN</a> <a class="dropdown-item" href="about3">DAF-2019<br></a></div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item mx-2"> <a class="nav-link" href="about3">Le Projet</a> </li>
					<li class="nav-item mx-2"> <a class="nav-link" href="authors3">Contributeurs</a> </li>
					<li class="nav-item"><a class="nav-link" href="dict3">Dictionnaire</a></li>
					<li class="nav-item"><a class="nav-link" href="help3">Aide</a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
				</ul>
			</div>
		</div>
	</nav>


<!-- .........................................	DAF2019 ru.......................................... -->

<?php } elseif((($page=="about3")||($page=="authors3") || ($page=="help3")) && ($lang == "ru")) { ?>


  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
  			<ul class="navbar-nav">
  				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
  					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
  				</li>
  			</ul>
  			<ul class="navbar-nav">
  				<li class="nav-item mx-2"> <a class="nav-link" href="about3">О проекте</a> </li>
  				<li class="nav-item mx-2"> <a class="nav-link" href="authors3">Авторы</a> </li>
  				<li class="nav-item"><a class="nav-link" href="dict3">Словари</a></li>
  				<li class="nav-item"><a class="nav-link" href="help3">Помощь</a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
        </ul>
  		</div>
  	</div>
  </nav>

<!-- old
		<li <?php if($page=="about3"){echo "id=\"nav-menu-act\"";}?>><a href="about3"><?php echo $locale['about']; ?></a></li>
		<li <?php if($page=="authors3"){echo "id=\"nav-menu-act\"";}?>><a href="authors3"><?php echo $locale['authors']; ?></a></li>
		<li <?php if($page=="dict3"){echo "id=\"nav-menu-act\"";}?>><a href="dict3"><?php echo $locale['dict']; ?></a></li>
		<li <?php if($page=="help3"){echo "id=\"nav-menu-act\"";}?>><a href="help3"><?php echo $locale['help']; ?></a></li>
-->

<!-- .........................................	Dict DAF fr .......................................... -->

<?php } elseif(($page=="dict") && ($lang == "fr")) { ?>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <!-- Mobile Version -->
  	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
              <div class="ui simple dropdown item">
              <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
              <div class="menu" style="right: 0; left: auto;">
                  <a class="item" href="/about">Le Projet</a>
                  <a class="item" href="/authors">Contributeurs</a>
                  <a class="item" href="/dict">Dictionnaire</a>
                  <a class="item" href="/help">Aide</a>
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
                    <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
                    <div class="menu">
                      <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                      <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                      <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                      <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                    </div>
                  </div>
            </li>
          </ul>
  				<li class="nav-item mx-2"> <a class="nav-link" href="about">Le Projet</a> </li>
  				<li class="nav-item mx-2"> <a class="nav-link" href="authors">Contributeurs</a> </li>
  				<li class="nav-item"><a class="nav-link" href="dict">Dictionnaire</a></li>
  				<li class="nav-item"><a class="nav-link" href="help">Aide</a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
        </ul>
  		</div>

  	</div>
  </nav>

<!-- .........................................	Dict DAF ru .......................................... -->

<?php } elseif(($page=="dict") && ($lang == "ru")) { ?>


  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <!-- Mobile Version -->
    <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
              <div class="ui simple dropdown item">
              <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
              <div class="menu" style="right: 0; left: auto;">
                  <a class="item" href="/about">О проекте</a>
                  <a class="item" href="/authors">Авторы</a>
                  <a class="item" href="/dict">Словари</a>
                  <a class="item" href="/help">Помощь</a>
                  <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
                  <a class="nav-link">выбрать словарь&nbsp;</a>
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
                    <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
                    <div class="menu">
                      <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                      <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                      <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                      <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                    </div>
                  </div>
            </li>
          </ul>
          <li class="nav-item mx-2"> <a class="nav-link" href="about">О проекте</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="authors">Авторы</a> </li>
          <li class="nav-item"><a class="nav-link" href="dict">Словари</a></li>
          <li class="nav-item"><a class="nav-link" href="help">Помощь</a></li>
          <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- .........................................	Dict DINAF fr .......................................... -->

  <?php } elseif((($page=="joint1") || ($page=="bjoint1")) && ($lang == "fr")) { ?>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <!-- Mobile Version -->
    	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <div class="ui simple dropdown item">
                <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                <div class="menu" style="right: 0; left: auto;">
                    <a class="item" href="/aboutj1">Le Projet</a>
                    <a class="item" href="/authorsj1">Contributeurs</a>
                    <a class="item" href="/joint1">Dictionnaire</a>
                    <a class="item" href="/helpj1">Aide</a>
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
                      <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
                      <div class="menu">
                        <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                        <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                        <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                        <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                      </div>
                    </div>
              </li>
            </ul>
    				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj1">Le Projet</a> </li>
    				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj1">Contributeurs</a> </li>
    				<li class="nav-item"><a class="nav-link" href="joint1">Dictionnaire</a></li>
    				<li class="nav-item"><a class="nav-link" href="helpj1">Aide</a></li>
            <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
          </ul>
    		</div>

    	</div>
    </nav>

  <!-- .........................................	Dict DINAF ru .......................................... -->

<?php } elseif((($page=="joint1") || ($page=="bjoint1")) && ($lang == "ru"))  { ?>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <!-- Mobile Version -->
      <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <div class="ui simple dropdown item">
                <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                <div class="menu" style="right: 0; left: auto;">
                    <a class="item" href="/aboutj1">О проекте</a>
                    <a class="item" href="/authorsj1">Авторы</a>
                    <a class="item" href="/joint1">Словари</a>
                    <a class="item" href="/helpj1">Помощь</a>
                    <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
                    <a class="nav-link">выбрать словарь&nbsp;</a>
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
                      <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
                      <div class="menu">
                        <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                        <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                        <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                        <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                      </div>
                    </div>
              </li>
            </ul>
            <li class="nav-item mx-2"> <a class="nav-link" href="aboutj1">О проекте</a> </li>
            <li class="nav-item mx-2"> <a class="nav-link" href="authorsj1">Авторы</a> </li>
            <li class="nav-item"><a class="nav-link" href="joint1">Словари</a></li>
            <li class="nav-item"><a class="nav-link" href="helpj1">Помощь</a></li>
            <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
          </ul>
        </div>

      </div>
    </nav>


    <!-- .........................................	Dict DINAFN fr .......................................... -->

    <?php } elseif((($page=="joint") || ($page=="bjoint")) && ($lang == "fr"))  { ?>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <!-- Mobile Version -->
      	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                  <div class="ui simple dropdown item">
                  <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                  <div class="menu" style="right: 0; left: auto;">
                      <a class="item" href="/aboutj">Le Projet</a>
                      <a class="item" href="/authorsj">Contributeurs</a>
                      <a class="item" href="/joint">Dictionnaire</a>
                      <a class="item" href="/helpj">Aide</a>
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
                        <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
                        <div class="menu">
                          <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                          <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                          <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                          <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                        </div>
                      </div>
                </li>
              </ul>
      				<li class="nav-item mx-2"> <a class="nav-link" href="aboutj">Le Projet</a> </li>
      				<li class="nav-item mx-2"> <a class="nav-link" href="authorsj">Contributeurs</a> </li>
      				<li class="nav-item"><a class="nav-link" href="joint">Dictionnaire</a></li>
      				<li class="nav-item"><a class="nav-link" href="helpj">Aide</a></li>
              <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
            </ul>
      		</div>

      	</div>
      </nav>

    <!-- .........................................	Dict DINAFN ru .......................................... -->

  <?php } elseif((($page=="joint") || ($page=="bjoint")) && ($lang == "ru"))  { ?>


      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <!-- Mobile Version -->
        <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                  <div class="ui simple dropdown item">
                  <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                  <div class="menu" style="right: 0; left: auto;">
                      <a class="item" href="/aboutj">О проекте</a>
                      <a class="item" href="/authorsj">Авторы</a>
                      <a class="item" href="/joint">Словари</a>
                      <a class="item" href="/helpj">Помощь</a>
                      <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
                      <a class="nav-link">выбрать словарь&nbsp;</a>
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
                        <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
                        <div class="menu">
                          <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                          <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                          <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                          <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                        </div>
                      </div>
                </li>
              </ul>
              <li class="nav-item mx-2"> <a class="nav-link" href="aboutj">О проекте</a> </li>
              <li class="nav-item mx-2"> <a class="nav-link" href="authorsj">Авторы</a> </li>
              <li class="nav-item"><a class="nav-link" href="joint">Словари</a></li>
              <li class="nav-item"><a class="nav-link" href="helpj">Помощь</a></li>
              <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
            </ul>
          </div>

        </div>
      </nav>


      <!-- .........................................	Dict DAF-2019 fr .......................................... -->

      <?php } elseif(($page=="dict3") && ($lang == "fr")) { ?>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <!-- Mobile Version -->
        	<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                    <div class="ui simple dropdown item">
                    <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                    <div class="menu" style="right: 0; left: auto;">
                        <a class="item" href="/about3">Le Projet</a>
                        <a class="item" href="/authors3">Contributeurs</a>
                        <a class="item" href="/dict3">Dictionnaire</a>
                        <a class="item" href="/help3">Aide</a>
                        <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
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
                          <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
                          <div class="menu">
                            <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                            <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                            <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                            <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                          </div>
                        </div>
                  </li>
                </ul>
        				<li class="nav-item mx-2"> <a class="nav-link" href="about3">Le Projet</a> </li>
        				<li class="nav-item mx-2"> <a class="nav-link" href="authors3">Contributeurs</a> </li>
        				<li class="nav-item"><a class="nav-link" href="dict3">Dictionnaire</a></li>
        				<li class="nav-item"><a class="nav-link" href="help3">Aide</a></li>
                <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
              </ul>
        		</div>

        	</div>
        </nav>

      <!-- .........................................	Dict DAF-2019 ru .......................................... -->

      <?php } elseif(($page=="dict3") && ($lang == "ru")) { ?>


        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <!-- Mobile Version -->
          <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;главная</i></a>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                    <div class="ui simple dropdown item">
                    <button class="navbar-toggler" > <span class="navbar-toggler-icon"></span> </button>
                    <div class="menu" style="right: 0; left: auto;">
                        <a class="item" href="/about3">О проекте</a>
                        <a class="item" href="/authors3">Авторы</a>
                        <a class="item" href="/dict3">Словари</a>
                        <a class="item" href="/help3">Помощь</a>
                        <a class="item" href="/fr"><span class="flag-icon flag-icon-fr"></span></a>
                        <a class="nav-link">выбрать словарь&nbsp;</a>
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
                          <a class="nav-link dropdown-toggle" href="about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
                          <div class="menu">
                            <a class="item" href="/about"><?php echo $locale["DAF"]; ?></a>
                            <a class="item" href="/aboutj1"><?php echo $locale["DINAF"]; ?></a>
                            <a class="item" href="/aboutj"><?php echo $locale["DINAFN"]; ?></a>
                            <a class="item" href="/about3"><?php echo $locale["DINAFN1"]; ?></a>
                          </div>
                        </div>
                  </li>
                </ul>
                <li class="nav-item mx-2"> <a class="nav-link" href="about3">О проекте</a> </li>
                <li class="nav-item mx-2"> <a class="nav-link" href="authors3">Авторы</a> </li>
                <li class="nav-item"><a class="nav-link" href="dict3">Словари</a></li>
                <li class="nav-item"><a class="nav-link" href="help3">Помощь</a></li>
                <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
              </ul>
            </div>

          </div>
        </nav>


<!--
<-?php } elseif($page=="/ru") { ?>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp; </i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="intro" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">выбрать словарь&nbsp;</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item mx-2"> <a class="nav-link" href="authors">Авторы</a> </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/fr" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-fr"> </span> язык</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="/ru"><span class="flag-icon flag-icon-ru"> </span> русский</a>
							<a class="dropdown-item" href="/fr"><span class="flag-icon flag-icon-fr"> </span> Français</a>
						</div>
					</li>
			</div>
		</div>
	</nav>

<-?php } else { ?>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp;Accueil</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="intro" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Changer de Dictionnaire&nbsp;</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">DAF</a> <a class="dropdown-item" href="aboutj1">DINAF</a> <a class="dropdown-item" href="aboutj">DINAFN</a> <a class="dropdown-item" href="about3">DAF-2019<br></a></div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item mx-2"> <a class="nav-link" href="authors">Contributeurs</a> </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/fr" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-ru"> </span> Langue</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="/ru"><span class="flag-icon flag-icon-ru"> </span> русский</a>
							<a class="dropdown-item" href="/fr"><span class="flag-icon flag-icon-fr"> </span> Français</a>
						</div>
					</li>
			</div>
		</div>
	</nav>
-->






<?php } ?>
	</ul>
	</div>


<!-- .........................................	Navbar ru .......................................... -->
<!-- <div class="content"> -->
<?php
if($lang == "ru"){
?>
<div class="bg-primary pt-1" style="">
  <div class="container mt-5 pt-5">
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
            <div class="row">
              <div class="col-md-12">
                <h6 class=""><br><br><br></h6>
              </div>
            </div><a href="https://www.nsu.ru/n/"><img class="img-fluid d-block" src="imgs/NSU_logo_Russian_Green.png" width="150%" height="100%" style=""></a>
            <div class="row">
              <div class="col-md-12">
                <h6 class="" contenteditable="false"><br><br></h6>
              </div>
            </div>
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
            <div class="row">
              <div class="col-md-12">
                <h6 class=""><br><br><br></h6>
              </div>
            </div><a href="https://english.nsu.ru/"><img class="img-fluid d-block" src="imgs/NSU_logo_English_Green.png" style=""></a>
            <div class="row">
              <div class="col-md-12">
                <h6 class="" contenteditable="false"><br><br></h6>
              </div>
            </div>
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
