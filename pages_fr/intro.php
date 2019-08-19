<script type="text/javascript" language="javascript">
    function do_onLoad(){}
</script>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php
if($lang == "ru"){
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-fw fa-home">&nbsp; главная</i></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="intro" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">изменить словарьe&nbsp;</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="/about">ФАС</a> <a class="dropdown-item" href="aboutj1">САНФ</a> <a class="dropdown-item" href="aboutj">САНФH</a> <a class="dropdown-item" href="about3">ФАСН-2019<br></a></div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item mx-2"> <a class="nav-link" href="authors">вкладчики</a> </li>
        <li class="nav-item mx-2"> <a class="nav-link" href="/fr"><span class="flag-icon flag-icon-fr"> </span></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="bg-primary pt-1" style="">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12"><img class="img-fluid d-block" src="http://dictaverf.nsu.ru/imgs/photos/nsu.jpg"></div>
    </div>
  </div>
</div>
<div class="py-3" style="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-4">
        <h4><a href="about">Французский Ассоциативный Словарь (ФАС)</a></h4>
        <p>Материалом для этого словаря послужили ответы, полученные в ходе анкетирования
        2008-2010г., прошедшие только первичную  орфографическую обработку. Данный
        словарь дает богатый материал для изучения синтагматических связей между
        стимулом и реакцией</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="aboutj1">Словарь ассоциативных норм франкофонии (САНФ)</a></h4>
        <p style="">Материалом для этого словаря послужили ответы, полученные в ходе анкетирования
        2013-2015г ., прошедшие только первичную  орфографическую обработку. Данный
        словарь дает богатый материал для изучения синтагматических связей между
        стимулом и реакцией</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="aboutj">Словарь ассоциативных норм франкофонии (нормализованый)(САНФН)</a></h4>
        <p>Материалом для этого словаря послужили ответы, полученные в ходе анкетирования
        2013-2015., прошедшие унификацию: в одну статью собраны ответы, выраженные
        разными словоформами (мужской-женский род прилагательного, спрягаемые формы
        глагола), также убраны артикли и предлоги. Данный словарь не показывает
        синтагматическую сочетаемость стимула с реакцией, но дает более объективную
        картину их семантической сочетаемости. Это особенно важно для составления
        обратного словаря</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="about3">Словарь французских ассоциаций 2019 (ФАСН-2019)</a></h4>
        <p>Материалом для этого словаря послужили ответы, полученные в ходе анкетирования
        в 2018, прошедшие унификацию: в одну статью собраны ответы, выраженные
        разными словоформами (мужской-женский род прилагательного, спрягаемые формы
        глагола), также убраны артикли и предлоги. Данный словарь не показывает
        синтагматическую сочетаемость стимула с реакцией, но дает более объективную
        картину их семантической сочетаемости. Это особенно важно для составления
        обратного словаря. Особенность - в анкете давалось по 25 стимулов.</p>
      </div>
    </div>
  </div>
</div>

<?php
}else{
?>

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
        <li class="nav-item mx-2"> <a class="nav-link" href="/ru"><span class="flag-icon flag-icon-ru"></span></a> </li>
      </ul>
    </div>
  </div>
</nav>


<div class="bg-primary pt-1" style="">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12"><img class="img-fluid d-block" src="http://dictaverf.nsu.ru/imgs/photos/nsu.jpg"></div>
    </div>
  </div>
</div>
<div class="py-3" style="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-4">
        <h4><a href="about">Dictionnaire associatif du français (DAF)</a></h4>
        <p class="text-justify">Ce dictionnaire est basé sur les réponses aux questionnaires remplis en 2008-2010. Seule l'orthographe et la ponctuation ont été rectifiées. Ce dictionnaire permet d'étudier les liens syntagmatiques entre le stimulus et la réaction.</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="aboutj1">Dictionnaire des normes associatives de la Francophonie (DINAF)</a></h4>
        <p class="text-justify">Ce dictionnaire est basé sur les réponses aux questionnaires remplis en 2013-2015. Seule l'orthographe et la ponctuation ont été rectifiées. Ce dictionnaire permet d'étudier les liens syntagmatiques entre le stimulus et la réaction.</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="aboutj">Dictionnaire des normes associatives de la Francophonie (normalisé) (DINAFN)</a></h4>
        <p class="text-justify">Ce dictionnaire est basé sur les réponses aux questionnaires remplis en 2013-2015. Outre la correction de l'orthographe et de la ponctuation, on a unifié les réponses: les réponses exprimées sous différentes formes (masculin - féminin de l'adjectif, formes verbales) sont réunies sous le même mot-vedette, les articles et les prépositions sont supprimées. Ce dictionnaire ne montre pas les liens syntagmatiques entre le stimulus et la réaction, mais il permet de mieux mettre ne évidence les liens sémantiques entre eux, cela est particulièrement important dans l'élaboration du dictionnaire inverse</p>
      </div>
      <div class="col-md-6 p-4">
        <h4><a href="about3">Dictionnaire des associations du français 2019 (DAF-2019)</a></h4>
        <p class="text-justify">Ce dictionnaire est basé sur les réponses aux questionnaires remplis en 2018. Outre la correction de l'orthographe et de la ponctuation, on a unifié les réponses: les réponses exprimées sous différentes formes (masculin - féminin de l'adjectif, formes verbales) sont réunies sous le même mot-vedette, les articles et les prépositions sont supprimées. Ce dictionnaire ne montre pas les liens syntagmatiques entre le stimulus et la réaction, mais il permet de mieux mettre ne évidence les liens sémantiques entre eux, cela est particulièrement important dans l'élaboration du dictionnaire inverse. </p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>


<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<?php $url="http://dictaverf.nsu.ru/authors"; ?>
