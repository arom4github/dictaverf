<?php include('include/dict.js.php'); ?>


<div class="py-5 text-center bg-light">
  <div class="container">
    <div id="dict_menu">
        <?php
            $right_class = "dict";
            $back_class = "dict";
            $list_class = "dict";

            if($dict == "right"){
                $right_class .= "_act";
            }
            if($dict == "back"){
                $back_class .= "_act";
            }
            if($dict == "list"){
                $list_class .= "_act";
            }
        ?>
		<table>

        <td><a href="rjoint" class="btn btn-outline-primary" padding="0px" ><?php echo $locale['right']; ?></a></td>
        <td><a href="bjoint" class="btn btn-outline-primary" padding="0px" ><?php echo $locale['back']; ?></a></td>
<!--        <td><a href="dictlist"  class="<?php echo $list_class; ?>"><?php echo $locale['anketas']; ?></a></td>
        <td><a href="#" class="dict" onClick="show_modal('db');"><?php echo "Select DB" ?></a></td> -->


		<img src="imgs/ico/document-print.png" alt="print" align="right" width="20px" border="0"
                 onclick="my_print('<?php echo "{$dict}_{$_COOKIE["test"]}"; ?>');">

		</table>
		<?php
//			$rows = db_get_tests();
//        		for($i=0; $i<count($rows); $i++){
//                		if($rows[$i][3] == $_COOKIE['test'])
//					echo "{$rows[$i][0]} \"{$rows[$i][2]}\" ({$locale[$rows[$i][1]]})";
//        		}

		?>
    </div>

    <div class="search_criteria" id="s_criteria">
    <form action="">
        <fieldset class="fs">
            <legend class="search_criteria"><?php echo $locale['s_criteria']; ?></legend>
            <?php include 'include/search_creteria.php';?>
        </fieldset>
    </form>
    </div>




<form action="" onsubmit="search_jword(); return false;">
  <div class="abc" style="text-align:center;">
        <?php
        if($dict == "right"){
            $abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            echo "<div style='height:50px;float:left;width:50%;vertical-align:middle;'>";
            for($i=0; $i<26; $i++){
                  echo "<span style=\"line-height:50px;vertical-align:middle;\" class=\"abc_link\" onclick=\"chDict_rjoint('".$abc[$i]."');\$('#stimul_input').val('');erase_stimulus();\">".$abc[$i]."</span>";
            }
            echo "</div>";

            //echo "<br>&nbsp;{$locale['stimul']}:";
        ?>


            <div class="ui input" style='height:50px;display:inline-block;float:right;width:50%;vertical-align:middle;padding-left:auto;padding-top:14px;'>
              <div style="display:inline-block;margin-right:10px;"><?php echo $locale['stimul']; ?> : </div><input style="height:38px;margin-right:10px;" id="stimul_input" type="text" name="stimul" value="" placeholder="Search stimulus ..."/>

              <input class="ui black button" type="button" value="<?php echo $locale['searching']; ?>" onclick="search_jword();"><br>
              <br />
            </div>


        <?php

	         }
           if($dict == "back"){
	      ?>

			<div id='abc_order' class='abc_in'>
        <?php
		    $abc = "?1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $length_abc = strlen($abc);
            for($i=0; $i<$length_abc; $i++){
                  echo "<span  class=\"abc_link\" onclick=\"chDict_bjoint('".$abc[$i]."');erase_stimulus();\">".$abc[$i]."</span>";
            }
		    ?>
			</div>

<!-- Not already implemented -->
      <div id='word_order' class='abc_in'>
        <div class="ui input" style='height:50px;display:inline-block;width:50%;vertical-align:middle;padding-left:auto;padding-top:4px;'>
			    <div style="display:inline-block;margin-right:10px;"><?php echo $locale['resp']; ?> : </div><input style="height:38px;margin-right:10px;" type="text" name="stimul" value="" placeholder="Search response ..."/>
          <input class="ui black button" type="button" value="<?php echo $locale['searching']; ?>" onclick="search_word();"><br>
        </div>
			</div>

			<div id='stim_order' class='abc_in'>
				Количество стимулов:
					<span  class="abc_link" onclick="chDict_st(350, 200);">350-200</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(199, 150);">199-150</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(149, 100);">149-100</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(90, 50);">99-50</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(49, 1);">49-1</span>&nbsp;
			</div>

			<div id='resp_order' class='abc_in'>
				Количество откликов:
					<span  class="abc_link" onclick="chDict_rs(3000, 2000);">3000-2000</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(1999, 1500);">1999-1500</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(1499, 1000);">1499-1000</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(999, 750);">999-750</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(749, 500);">749-500</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(499, 250);">499-250</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(249, 1);">249-1</span>&nbsp;
			</div>

      <font size="6" color="#12bbad">Обратный словарь</font>
<!--
            <div id='word_order' class='abc_in'>
				<?php echo "{$locale['resp']}:";?> <input type="text" name="stimul" value=""/>
            	<input type="button" value="search" onclick="search_word();">
			</div>
			<div id='stim_order' class='abc_in'>
				Количество стимулов:
					<span  class="abc_link" onclick="chDict_st(350, 200);">350-200</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(199, 150);">199-150</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(149, 100);">149-100</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(90, 50);">99-50</span>&nbsp;
					<span  class="abc_link" onclick="chDict_st(49, 1);">49-1</span>&nbsp;
			</div>
			<div id='resp_order' class='abc_in'>
				Количество откликов:
					<span  class="abc_link" onclick="chDict_rs(3000, 2000);">3000-2000</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(1999, 1500);">1999-1500</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(1499, 1000);">1499-1000</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(999, 750);">999-750</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(749, 500);">749-500</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(499, 250);">499-250</span>&nbsp;
					<span  class="abc_link" onclick="chDict_rs(249, 1);">249-1</span>&nbsp;
			</div>
-->
        <?php
	}
        if($dict == "list"){
        ?>
            <span class="abc_link" onClick="getAnketa(-100);">&lt;&lt;&lt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(-10);">&lt;&lt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(-1);">Пред.</span>&nbsp;
            <span id="anketa">1</span> из <span id="anketas">1</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+1);">След.</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+10);">&gt;&gt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+100);">&gt;&gt;&gt;</span>


<!--
            <span class="abc_link" onClick="getAnketa(-100);">&lt;&lt;&lt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(-10);">&lt;&lt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(-1);">Пред.</span>&nbsp;
            <span id="anketa">1</span> из <span id="anketas">1</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+1);">След.</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+10);">&gt;&gt;</span>&nbsp;
            <span class="abc_link" onClick="getAnketa(+100);">&gt;&gt;&gt;</span>
-->
        <?php
        }
        ?>
    </div>
</form>


    <div class="searc_result" style="margin-top:2%;">
        <fieldset class="fs">
            <legend class="search_result"><?php echo $locale['s_result']; ?></legend>
            <div id="results">

            </div>
        </fieldset>
    </div>



</div>
</div>



















<div id='mask'></div>

<!-- Popup Chart DirectDict -->
<div id="popup_chart_directdict" class="popup_chart">
  <table width="100%" height="100%">
    <tr>
      <td class="left_chart">
        <div id="chart_directdict">
          CHART
        </div>
      </td>
      <td class="right_chart">
        <div id="statistics">
          <div class="ui list">
            <div class="item">
              <?php echo $locale['dict_cloud_tot_stim'];  ?> : <br><span id="tot_responses_chart"></span>
            </div><br>
            <div class="item">
              <?php echo $locale['dict_cloud_dif_stim'];  ?> : <br><span id="dif_responses_chart"></span>
            </div><br>
            <div class="item">
              <?php echo $locale['dict_cloud_ref_stim'];  ?> : <br><span id="ref_responses_chart"></span>
            </div><br>
            <div class="item">
              <?php echo $locale['dict_cloud_uni_stim'];  ?> : <br><span id="uni_responses_chart"></span>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>


<div id="bdict_selector" class="bdict_selector">
<?php
    if($lang == "ru" ){ ?>
	Выберите, в каком порядке Вы хотите располагать реакции:
	<ul>
		<li><a href="#" name="abc" class="order">ВСЕ - все полученные в ходе эксперимента реакции, алфавитном порядке.</a>
		<li><a href="#" name="wordj" class="order">СТИМ - по количеству разных стимулов, вызвавшие реакции (от 315 до 1).</a>
		<li><a href="#" name="respj" class="order">ЧАСТ - по абсолютной частотности (от 2415 до 1).</a>
<!--
		<li><a href="#" name="wordj" class="order">По отдельному слову</a>
-->
	</ul>
<?php } else { ?>
	Choisissez ici dans quel ordre vous voulez présenter cette information:
	<ul>
		<li><a href="#" name="abc" class="order">TOTAL - toutes les réactions obtenues dans l'expérience, par ordre alphabétique.</a>
		<li><a href="#" name="wordj" class="order">STIM - Par le nombre de stimuli différents ayant provoqué ces réactions (par ordre décroissant, de 315 à 1).</a>
		<li><a href="#" name="respj" class="order">FREQ - En fréquence absolue (par ordre décroissant, de 2415 occurences à 1).</a>
<!--
		<li><a href="#" name="wordj" class="order">По отдельному слову</a>
-->
	</ul>
<?php } ?>

</div>
<div id="db_selector" class="db_selector">
	Выбор базы данных словарей
	<ul>
<?php
	$rows = db_get_tests();
        $test = 0;
        for($i=0; $i<count($rows); $i++){
                echo "<li><a href=\"#\" class=\"db_link\" name=\"{$rows[$i][3]}\">{$rows[$i][0]} \"{$rows[$i][2]}\" ({$locale[$rows[$i][1]]})</a>";
        }
?>
	</ul>
</div>
<?php $url="http://dictaverf.nsu.ru/";
      if($dict == "right")  { $url = "{$url}rjoint"; }
      elseif($dict == "back"){ $url = "{$url}bjoint"; }
      else { $url = "{$url}joint";}
?>
