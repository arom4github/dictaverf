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


        <td><a href="dictright35" class="btn btn-outline-primary" padding="10px" ><?php echo $locale['right']; ?></a></td>
        <td><a href="dictback35"  class="btn btn-outline-primary" padding="10px"><?php echo $locale['back']; ?></a></td>
        <td><a href="dictlist35"  class="btn btn-outline-primary" padding="10px"><?php echo $locale['anketas']; ?></a></td>
<!--        <td><a href="#" class="dict" onClick="show_modal('db');"><?php echo "Select DB" ?></a></td> -->



		<img src="imgs/ico/document-print.png" alt="print" align="right" width="20px" border="0"
                 onclick="my_print('<?php echo "{$dict}_{$_COOKIE["test"]}"; ?>');">

		</table>
		<?php
			$rows = db_get_tests();
        		for($i=0; $i<count($rows); $i++){
                		if($rows[$i][3] == $_COOKIE['test'])
					//echo "{$rows[$i][0]} \"{$rows[$i][2]}\" ({$locale[$rows[$i][1]]})";
					echo "\"{$rows[$i][2]}\"";
        		}

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

    <form action="" onsubmit="search_word(); return false;">
      <div class="abc" style="text-align:center;">
            <?php
            //Si dictionnaire direct ...

            if($dict == "right"){
                $abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                //Building the span with onClick attribute for each letter
                // FORMULAIRE PAR LETTRE
                echo "<div style='height:50px;float:left;width:50%;vertical-align:middle;'>";
                for($i=0; $i<26; $i++){
                      echo "<span  style=\"line-height:50px;vertical-align:middle;\" class=\"abc_link\" onclick=\"chDict('".$abc[$i]."');erase_stimulus();\">".$abc[$i]."</span>";
                }
                echo "</div>";
            ?>

                <!-- FORMULAIRE DE STIMULUS -->

                <div class="ui input" style='height:50px;display:inline-block;float:right;width:50%;vertical-align:middle;padding-left:auto;padding-top:4px;'>
                  <div style="display:inline-block;margin-right:10px;"><?php echo $locale['stimul']; ?> : </div><input style="height:38px;margin-right:10px;" id="stimul_input" type="text" name="stimul" value="" placeholder="Search stimulus ..."/>
                  <input class="ui black button" type="button" value="<?php echo $locale['searching']; ?>" onclick="search_word();"><br>
                </div>

              </br>
              </br>
              </br>
              </br>
            <font size="6" color="#12bbad">Прямой словарь</font>
            <?php
            //Si dictionnaire inverse ...
    	         }
    	        if($dict == "back"){
    	      ?>

    			<div id='abc_order' class='abc_in'>

            <?php
      		  $abc = "?1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $length_abc = strlen($abc);
                for($i=0; $i<$length_abc; $i++){
                      echo "<span  class=\"abc_link\" onclick=\"chDict('".$abc[$i]."');erase_stimulus();\">".$abc[$i]."</span>";
                }
      		  ?>
      		</div>

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
    					<span  class="abc_link" onclick="chDict_st(99, 50);">99-50</span>&nbsp;
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



          <?php
          //Si questionnaires individuels ... (ne me concerne pas)
    	     }
          if($dict == "list"){
          ?>
			  <span class="abc_link" onClick="getAnketa(-100);">&lt;&lt;&lt;</span>&nbsp;
			  <span class="abc_link" onClick="getAnketa(-10);">&lt;&lt;</span>&nbsp;
			  <span class="abc_link" onClick="getAnketa(-1);"><?php echo $locale['previous'] ?>.</span>&nbsp;
			  <span id="anketa">1</span> <?php echo $locale['to'] ?> <span id="anketas">1</span>&nbsp;
			  <span class="abc_link" onClick="getAnketa(+1);"><?php echo $locale['next'] ?>.</span>&nbsp;
			  <span class="abc_link" onClick="getAnketa(+10);">&gt;&gt;</span>&nbsp;
			  <span class="abc_link" onClick="getAnketa(+100);">&gt;&gt;&gt;</span>
        <span>          <br />
                  <font size="6" color="#12bbad">Анкеты</font> </span>
		  <?php
          }
          ?>

      </div> <!-- div abc -->



    </form>

    <br />
    <div class="searc_result" style="margin-top:12%;">
        <fieldset class="fs">
            <legend class="search_result"><?php echo $locale['s_result']; ?></legend>
            <div id="results">

            </div>
        </fieldset>
    </div>


</div>
</div>








<div id='mask'></div>

<!-- Popup WordCloud RightDict -->
<div id="popup_wordcloud_rightdict" class="popup_wordcloud">
  <table>
    <tr>
      <div>
        <?php echo $locale['dict_cloud_stim'];  ?> : <b style='font-size:18px;'><span id="stimulus_wordcloud"></span></b>
      </div>
      <td class="left_popup">
        <div id="wordcloudRightDict" class="wordcloud">
        </div>
      </td>
      <td class="right_popup">
        <div class="ui list">
          <div class="item">
            <?php echo $locale['dict_cloud_tot_stim'];  ?> : <span id="tot_responses"></span>
          </div><br>
          <div class="item">
            <?php echo $locale['dict_cloud_dif_stim'];  ?> : <span id="dif_responses"></span>
          </div><br>
          <div class="item">
            <?php echo $locale['dict_cloud_ref_stim'];  ?> : <span id="ref_responses"></span>
          </div><br>
          <div class="item">
            <?php echo $locale['dict_cloud_uni_stim'];  ?> : <span id="uni_responses"></span>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>

<!-- Popup WordCloud BackDict -->
<div id="popup_wordcloud_backdict" class="popup_wordcloud">
  <table>
    <tr>
      <div>
        <?php echo $locale['dict_cloud_resp'] ?> : <b style='font-size:18px;'><span id="reponse_wordcloud"></span></b>
      </div>
      <td class="left_popup">
        <div id="wordcloudBackDict" class="wordcloud">
        </div>
      </td>
      <td class="right_popup">
        <div class="ui list">
          <div class="item">
            <?php echo $locale['dict_cloud_occ_resp'] ?> : <span id="abs_occurences"></span>
          </div><br>
          <div class="item">
            <?php echo $locale['dict_cloud_nbstim_resp'] ?> : <span id="sti_provoked"></span>
          </div><br>
        <div>
      </td>
    </tr>
  </table>
</div>


<div id='mask'></div>
<div id="bdict_selector" class="bdict_selector">
	Выбор порядок представления информации:
	<ul>
		<li><a href="#" name="abc" class="order">В алфавитном порядку реакций</a>
		<li><a href="#" name="stim" class="order">По количеству стимулов</a>
		<li><a href="#" name="resp" class="order">По количеству реакций</a>
		<li><a href="#" name="word" class="order">По отдельному слову</a>
	</ul>
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



<?php $url="http://dictaverf.nsu.ru/dict{$dict}"; ?>
