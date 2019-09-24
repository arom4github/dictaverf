<script type="text/javascript" language="javascript">
    function do_onLoad(){}
</script>
<!--
<div class="authors_content">
  <table width="100%" border=0>
    <tr>
      <td width="40%" style="text-align:center;">
        <img class="ui circular image" src="imgs/photos/Debrenn.png" border="1"  alt="photo"/>
      </td>
      <td valign="middle">
        <span class="FIO">Дебренн Мишель</span><br>
  			<span class="who">Руковолитель</span><br>
  			<span class="degree">д.ф.н., профессор кафедры французского языка факультета иностранных языков НГУ</span><br>
        <img src="<?php echo $basedir; ?>imgs/ico/mail.png" alt="email"/><span class="email"><a href="mailto:micheledebrenne@gmail.com">micheledebrenne@gmail.com</a></span><br>
      </td>
    </tr>
    <tr>
      <td width="40%">
        <img class="ui circular image" src="imgs/photos/ufimtseva.png" border="1" alt="photo"/>
      </td>
      <td valign="middle">
        <span class="FIO">Уфимцева Наталья Владимировна</span><br>
        <span class="who">&nbsp;</span><br>
        <span class="degree">д.ф.н., профессор Института Языкознания РАН</span><br>
        <img src="<?php echo $basedir; ?>imgs/ico/mail.png" alt="email" style="display:none;"/><span class="email"><a class="mailto" href="#">&nbsp;</a><span><br>
      </td>
    </tr>
    <tr>
      <td width="40%">
        <img class="ui circular image" src="imgs/photos/Romanenko.png" border="1" alt="photo"/>
      </td>
      <td valign="middle">
        <span class="FIO">Романенко Алексей Анатольевич</span><br>
        <span class="who">Автор системы. Техническое сопровождение</span><br>
        <span class="degree">к.т.н., зав. отделом компьютерной техники ФИТ НГУ</span><br>
        <img src="<?php echo $basedir; ?>imgs/ico/mail.png" alt="email"/><span class="email"><a href="mailto:arom@ccfit.nsu.ru">arom@ccfit.nsu.ru</a></span><br>
      </td>
    </tr>
  </table>
</div>
-->

<div class="py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="mx-auto col-md-12">
        <h1 class="mb-3">Aвторы</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="http://dictaverf.nsu.ru/imgs/photos/Debrenn.png" width="150" alt="Card image cap">
        <h4>Дебренн Мишель</h4>
        <p>Руковолитель</p>
        <p>д.ф.н., профессор кафедры французского языка факультета иностранных языков НГУ</p>
        <a href="mailto:micheledebrenne@gmail.com">micheledebrenne@gmail.com</a>
      </div>
      <div class="col-lg-4 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="http://dictaverf.nsu.ru/imgs/photos/ufimtseva.png" width="150
15
150
150
150" alt="Card image cap">
        <h4>Уфимцева Наталья Владимировна</h4>
        <p>д.ф.н., профессор Института Языкознания РАН</p>
      </div>
      <div class="col-lg-4 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="http://dictaverf.nsu.ru/imgs/photos/Romanenko.png" width="150">
        <h4>Романенко Алексей Анатольевич</h4>
        <p>Автор системы. Техническое сопровождение</p>
        <p>к.т.н., зав. отделом компьютерной техники ФИТ НГУ</p>
        <a href="mailto:arom@ccfit.nsu.ru">arom@ccfit.nsu.ru</a>
      </div>
    </div>
  </div>
</div>
<div class="py-5 text-center bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Статистика по плательщикам</h1>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
        <h1>Всего</h1>
        <p class="mb-3 lead">Общее число участников веб-сайта</p>
      </div>
      <div class="col-lg-6">
        <div class="counter">
            <div class="stats-line-black"></div>
                        <h2 class="timer count-title count-number"><?php include("pht.php"); ?></h2>
            <div class="stats-line-black"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
        <h1>Возраст</h1>
        <p class="mb-3 lead">Средний возраст участников веб-сайта</p>
      </div>
      <div class="col-lg-6">
        <div class="counter">
            <div class="stats-line-black"></div>
                        <h2 class="timer count-title count-number"><?php include("pht1.php"); ?></h2>
            <div class="stats-line-black"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
        <h1>Выделение</h1>
        <p class="mb-3 lead">% Мужчина / % женщина</p>
      </div>
      <div class="col-lg-6">
        <div class="counter">
            <div class="stats-line-black"></div>
                        <h2 class="timer count-title count-number"><?php include("pht2.php"); ?></h2>
            <div class="stats-line-black"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Статистика словарей</h1>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
        <h1>Количество слов, введенных авторами</h1>
        <p class="mb-3 lead"></p>
      </div>
      <div class="col-lg-6">
        <div class="counter">
            <div class="stats-line-black"></div>
                        <h2 class="timer count-title count-number"><?php include("pht3.php"); ?></h2>
            <div class="stats-line-black"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 bg-primary">
  <div class="container">
    <div class="row">
      <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
        <h1>Количество слов в словаре</h1>
        <p class="mb-3 lead">Не засчитывает слова, введенные несколько раз.</p>
      </div>
      <div class="col-lg-6">
        <div class="counter">
            <div class="stats-line-black"></div>
                        <h2 class="timer count-title count-number"><?php include("pht4.php"); ?></h2>
            <div class="stats-line-black"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="js/smooth-scroll.js"></script>

<?php $url="http://dictaverf.nsu.ru/authors1"; ?>
