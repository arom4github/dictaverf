<?php

$lang = "";

if(isset($_COOKIE["pref_lang"])){
	$lang = $_COOKIE["pref_lang"];
}

if(($lang != "ru") && ($lang != "fr")){
	$lang = "ru";
}

require_once 'config.php';
require_once 'db.php';
require_once 's_criteria_class.php';
require_once 'lang_'.$lang.'.php';

if(isset($_GET['term1'])) {db_getStat($_GET['term1']); exit; }
if(isset($_GET['term2'])) {db_getStat1($_GET['term2']); exit; }
if(isset($_GET['term'])) {getStimulus($_GET['term']); exit; }

$dict = "";
if(isset($_COOKIE["dict"])) $dict = $_COOKIE["dict"];
if(isset($_GET["dict"])){
    if($_GET["dict"] == "right") $dict="right";
    if($_GET["dict"] == "back") $dict="back";
    if($_GET["dict"] == "list") $dict="list";
}
if(($dict != "right") && ($dict != "back") && ($dict != "list")){
    $dict="right";
}
setcookie("dict", $dict, time()+36000, "/");

//if(isset($_COOKIE["dict"])) $dict = $_COOKIE["dict"];
if(($dict != "right") && ($dict != "back") && ($dict != "list")){
    echo "Error: Check you work with correct dictionary\n";
    return;
}
$test = 12;
if(isset($_COOKIE["test"]))
	$test = $_COOKIE["test"];
if(isset($_GET["test"]))
	$test = $_GET["test"];

// parse parameters
$s_cr = new s_criteria_class();
if(isset($_COOKIE["{$dict}_{$test}_s_criteria"]))
        $s_cr->parse($_COOKIE["{$dict}_{$test}_s_criteria"]);

//TODO: check if parameters are valid
	$urlArray = explode("=", str_replace("&", "=",$_SERVER['QUERY_STRING']));
	$s_cr->json = Array();
	for($i = 2; $i < sizeof($urlArray); $i+=2){
		$var = str_replace(" ", "_", urldecode($urlArray[$i]));
		if (isset($_GET[$var]) && ($var != "sort") && ($var != "chr") && ($var != "base") &&
		($var != "st") && ($var != "rs") && ($var != "srf") && ($var != "srt")){
			$criteria = urldecode($urlArray[$i]);
			//var_dump($s_cr->json);
			$s_cr->json["$criteria"]=$_GET[$var];
			/*echo urldecode($urlArray[$i]);
			echo ":";
			echo $s_cr->json["$criteria"];
			echo "</br>";*/
		}
	}

if(isset($_GET["base"])) $s_cr->base = $_GET["base"];
if(isset($_GET["chr"])) $s_cr->chr = $_GET["chr"];
if(isset($_GET["sort"])) $s_cr->sort = $_GET["sort"];
if(isset($_GET["st"])) $s_cr->sr = 1;
if(isset($_GET["rs"])) $s_cr->sr = 2;
if(isset($_GET["srf"])) $s_cr->srf = $_GET["srf"];
if(isset($_GET["srt"])) $s_cr->srt = $_GET["srt"];
if($s_cr->chr == '') $s_cr->chr = 'a';

$jdict = "right";
if(isset($_GET["jdict"])) $jdict = $_GET["jdict"];


$anketa = 1;
if(isset($_GET["ank"])) $anketa = $_GET["ank"];
$anketa = intval($anketa);

//var_dump($_COOKIE);
setcookie("{$dict}_{$test}_s_criteria", $s_cr->cookie(), 0, "/");
//echo "{$dict}_{$test}_s_criteria = ".$s_cr->cookie();
//var_dump($_GET);

if(isset($_GET['graph']) && $_GET['graph'] == 1) {
	db_get_graph($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json); 
	exit; 
}
if(isset($_GET['graph']) && $_GET['graph'] == 2) {
	db_get_cloud($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json); 
	exit; 
}
if(isset($_GET['graph']) && $_GET['graph'] == 3) {
	db_get_cloud1($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json); 
	exit; 
}
//var_dump($_GET);
if(isset($_GET["jdict"])){ 
    if($jdict == "right" && strlen($s_cr->chr) <= 1)
         getFJointDict($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json);
    if($jdict == "right" && strlen($s_cr->chr) > 1){
         getFJointDict($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json);
         echo "<br><br>";
         getFJointDict1($test, $s_cr->base, $s_cr->chr, $s_cr->sort , $s_cr->json);
         echo "<br><br>";
         getFJointDict2($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json);
    }
    if($jdict == "back")
         if(isset($_GET["st"]) && $_GET["st"] == 1)
             echo "st not yet implemented";
         elseif(isset($_GET["rs"]) && $_GET["rs"] == 1)
             echo "rs not yet implemented";
	 else 
             getLJointDict($test, $s_cr->base, $s_cr->chr, $s_cr->sort,$s_cr->json);
} else {
if($dict == "right")
    getRightDict($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->json);
if($dict == "back")
    getBackDict($test, $s_cr->base, $s_cr->chr, $s_cr->sort, $s_cr->sr, $s_cr->srf, $s_cr->srt, $s_cr->json);
if($dict == "list")
    getAnketa($test, $s_cr->base, $anketa, $s_cr->json);
}
// query functions

function getStimulus($term){
   global  $locale;
   $rows = db_get_stimulus($term);
   echo json_encode($rows);
}

function getRightDict($test, $base, $chr, $sort_crt, $json){
global $locale;
$rows = db_right_dict($test, $base, $chr, $sort_crt, $json);
?>
<table width="100%" class="ui fixed stackable large green selectable celled table">
<!-- Ligne du haut : Stimulus et Réponse -->
<thead>
    <tr>
        <th width="4%" style="text-align:center;">#</th>
        <th width="15%" style="text-align:center;"><b><?php echo $locale['stimul'] ?></b><img src="imgs/ico/sort.png" alt="sort" border="0" class="sort" onClick="document.forms[0].sort.value=1; AdvSearch_r();"></th>
        <th width="81%" style="text-align:center;"><b><?php echo $locale['resp'] ?></b><img src="imgs/ico/sort.png" alt="sort" border="0" class="sort" onClick="document.forms[0].sort.value=0; AdvSearch_r();"></th>
    </tr>
</thead>
    <?php
        for($i=0; $i<count($rows); $i++){
                    echo "<tr onclick='showWordCloudRightDict(this);' class='pointer_cursor'>{".($i+1)."}{{$rows[$i][0]}}{{$rows[$i][2]}}</tr>\n";
        }
?>                                                                                                                                                                                                                 
</table>
<?php
}
function getFJointDict($test, $base, $chr, $sort_crt, $json){
global $locale;
$rows = db_fjoint_dict($test, $base, $chr, $json);
?>
<table width="100%" class="ui padded stackable fixed large green celled table legende">
    <h5 style="text-align:center;"><?php echo $locale['legend']; ?></h5>
    <tr>
        <td><font color=#863B52>Canada</font></td>
        <td><font color=#006952>Suisse</font></td>
        <td><font color=#CBC3F9>Suisse, Canada</font></td>
        <td><font color=#000000>Belgique</font></td>
        <td><font color=#EB5EF1>Belgique, Canada</font></td>
    </tr>
    <tr>
        <td><font color=#FF0F0F>Belgique, Suisse</font></td>
        <td><font color=#515D10>Belgique, Suisse, Canada</font></td>
        <td><font color=#00A8F2>France</font></td>
        <td><font color=#EC7F23>France, Canada</font></td>
        <td><font color=#939393>France, Suisse</font></td>
    </tr>
    <tr>
        <td><font color=#F7BACB>France, Suisse, Canada</font></td>
        <td><font color=#00CA29>France, Belgique</font></td>
        <td><font color=#CBD39C>France, Belgique, Canada</font></td>
        <td><font color=#9BDDCC>France, Belgique, Suisse</font></td>
        <td><font color=#51488A>all</font></td>
    </tr>
</table>

<div id="change_chart_parameters">
    <div class="ui slider checkbox">
        <input name="displayJoint" type="checkbox" onclick="changeBool(this);" checked>
        <label> <?php echo $locale['display_chart_desc']; ?> </label>
    </div>
</div>
<br>

<table width="100%" class="ui fixed stackable large green selectable celled table result">
    <thead>
    <tr>
            <th width="4%">#</th>
      <th><b><?php echo $locale['stimul']; ?></b></th>
      <th><b><font color=#51488A><?php echo "Joint"; ?></b></font> </th>
      <th><b><font color=#00A8F2><?php echo "France"; ?></b></font> </th>
      <th><b><font color=#000000><?php echo "Belgique"; ?></b></font> </th>
      <th><b><font color=#006952><?php echo "Suisse"; ?></b></font> </th>
      <th><b><font color=#863B52><?php echo "Canada"; ?></b></font> </th>
    </tr>
    </thead>

<?php
        for($i=0; $i<count($rows); $i++){
                   echo "<tr>{".($i+1)."}
                            <td valign=\"top\">{$rows[$i][0]}<br><br><input type='button' class='ui black button pointer_cursor clickable_chart' onclick='showChartDirectDict(this.parentNode.parentNode, true);' value='{$locale['chart']}'></input></td>
                            {{$rows[$i][2]}}{{$rows[$i][3]}}{{$rows[$i][4]}}{{$rows[$i][5]}}{{$rows[$i][6]}}</tr>\n";
            }
?>
</table>  
<?php
}

function getFJointDict1($test, $base, $chr, $sort_crt, $json){
global $locale;
?>
<table width="100%" border=1 class="result">	
    <tr>
		<td><b><?php echo $chr; ?></b></td>
		<td><b><font color=#00A8F2>France</font></b></td>
		<td><b><font color=#000000>Belgique</font><b></td>
		<td><b><font color=#006952>Suisse</font></b></td>
		<td><b><font color=#863B52>Canada</font></b></td>
    </tr>
<?php                                                                                                                                                  
        $rows = db_fjoint_dict1($test, $base, $chr, $json);        
        for($i=0; $i<count($rows); $i++){          		  
       	     //echo "<tr>{".($i+1)."}{{$rows[$i][0]}}{{$rows[$i][1]}}{{$rows[$i][2]}}{{$rows[$i][3]}}</tr>\n";  
			echo "<tr>{".($i+1)."}{";
			if (isset($rows[$i][0])) 
				echo "{$rows[$i][0]}";
			echo "}{";
			if (isset($rows[$i][1])) 
				echo "{$rows[$i][1]}";
			echo "}{";
			if (isset($rows[$i][2])) 
				echo "{$rows[$i][2]}";
			echo "}{";
			if (isset($rows[$i][3])) 
				echo "{$rows[$i][3]}";
			echo "}</tr>\n";
       	 }                                                               
?>                                                                                                                                                     
</table>    
<?php
}

function getFJointDict2($test, $base, $chr, $sort_crt, $json){
global $locale;
?>
<table width="100%" border=1 class="result">	
    <tr>
		<td><b><?php echo $chr; ?></b></td>
		<td><b>Group</b></td>
		<td><b>Response<b></td>
		<td><b># of different responses</b></td>
		<td><b>Total # </b></td>
    </tr>
<?php                                                                                                                                                  
        $rows = db_getStimStat($chr); 
        //$rows = db_fjoint_dict1($test, $sex, $af, $at, $edu, $spec, $base, $nl, $chr);        
        for($i=0; $i<count($rows); $i++){          		  
       	     echo "<tr>{".($i+1)."}{{$rows[$i][0]}}{{$rows[$i][1]}}{{$rows[$i][2]}}{{$rows[$i][3]}}</tr>\n";                       			
       	 }                                                               
?>                                                                                                                                                     
</table>    
<?php
}

function getLJointDict($test, $base, $chr, $sort_crt, $json){
global $locale;
$rows = db_ljoint_dict($test, $base, $chr, $json); 
?>
<table width="100%" class="ui padded stackable fixed large green celled table legende">
    <h5 style="text-align:center;"> <?php $locale['legend']; ?> </h5>
    <tr>
        <td><font color=#863B52>Canada</font></td>
        <td><font color=#006952>Suisse</font></td>
        <td><font color=#CBC3F9>Suisse, Canada</font></td>
        <td><font color=#000000>Belgique</font></td>
        <td><font color=#EB5EF1>Belgique, Canada</font></td>
    </tr>
    <tr>
        <td><font color=#FF0F0F>Belgique, Suisse</font></td>
        <td><font color=#515D10>Belgique, Suisse, Canada</font></td>
        <td><font color=#00A8F2>France</font></td>
        <td><font color=#EC7F23>France, Canada</font></td>
        <td><font color=#939393>France, Suisse</font></td>
    </tr>
    <tr>
        <td><font color=#F7BACB>France, Suisse, Canada</font></td>
        <td><font color=#00CA29>France, Belgique</font></td>
        <td><font color=#CBD39C>France, Belgique, Canada</font></td>
        <td><font color=#9BDDCC>France, Belgique, Suisse</font></td>
        <td><font color=#51488A>all</font></td>
    </tr>
</table>

<table width="100%" class="ui fixed stackable large green selectable celled table result">
    <thead>
    <tr>
      <th width="4%">#</th>
      <th><b><?php echo $locale['stimul']; ?></b></th>
      <th><b><font color=#51488A><?php echo "Joint"; ?></b></font> </th>
      <th><b><font color=#00A8F2><?php echo "France"; ?></b></font> </th>
      <th><b><font color=#000000><?php echo "Belgique"; ?></b></font> </th>
      <th><b><font color=#006952><?php echo "Suisse"; ?></b></font> </th>
      <th><b><font color=#863B52><?php echo "Canada"; ?></b></font> </th>
    </tr>
    </thead>
<?php
        for($i=0; $i<count($rows); $i++){
                   echo "<tr>{".($i+1)."}{{$rows[$i][0]}}{{$rows[$i][2]}}{{$rows[$i][3]}}{{$rows[$i][4]}}{{$rows[$i][5]}}{{$rows[$i][6]}}</tr>\n";
            }
?>
</table>
<?php
}

function getBackDict($test, $base, $chr, $sort_crt, $sr, $srf, $srt, $json){
global $locale;
$click = "AdvSearch_r();";
if($sr == "1")
	$click = "chDict_st($srf, $srt)";
if($sr == "2")
	$click = "chDict_rs($srf, $srt)";
$rows = db_back_dict($test, $base, $chr, $sort_crt, $sr, $srf, $srt, $json);
?>
<table width="100%" class="ui fixed stackable large green selectable celled table">
<!-- Ligne du haut : Stimulus et Réponse -->
<thead>
    <tr>
        <th width="4%" style="text-align:center;">#</th>
        <th width="15%" style="text-align:center;"><b><?php echo $locale['resp'] ?></b><img src="imgs/ico/sort.png" alt="sort" border="0" class="sort" onClick="document.forms[0].sort.value=1; <?php echo $click; ?>"></th>
        <th width="81%" style="text-align:center;"><b><?php echo $locale['stimul'] ?></b><img src="imgs/ico/sort.png" alt="sort" border="0" class="sort" onClick="document.forms[0].sort.value=0; <?php echo $click; ?>"></th>
    </tr>
</thead>

<?php
        for($i=0; $i<count($rows); $i++){
                echo "<tr onclick='showWordCloudBackDict(this);' class='pointer_cursor'>{".($i+1)."}{{$rows[$i][3]} {$rows[$i][0]}}{{$rows[$i][2]}}</tr>\n";
        }
?>
</table>
<?php
}

function getAnketa($test, $base, $ank, $json){
    global $locale;
    $rows = db_get_user_ank($test, $base, $ank-1, $json);
    //echo "db_get_user_ank($test, $sex, $af, $at, $edu, $spec, $city, $base, $nl, ".($ank-1).");";
    if(count($rows)<1){
        echo "<!-- 0 --> <!-- 0 --> No data available!";
        return;
    }
    if($rows[0][1] == 't'){
        echo "<img src=\"imgs/male.png\" width=\"50px\" height=\"50px\" align=\"left\" alt=\"Male\">";
    }else{
        echo "<img src=\"imgs/female.png\" width=\"50px\" height=\"50px\" align=\"left\" alt=\"Female\">";
    }

    echo " {$rows[0][4]} years old  from {$rows[0][6]} (".$locale["reg".($rows[0][7])].")<br>
          <b>{$locale['lang']}</b> ";
    if(isset($locale[$rows[0][3]])){
	echo $locale[$rows[0][3]]." (".$rows[0][3].")";
    }else{
	echo $rows[0][3];
    }
    echo "<br>
          <b>{$locale['spec']}</b>: {$rows[0][2]}<br>
          <b>{$locale['edu']}</b>: {$rows[0][5]}";
    echo "<!-- {$ank} -->";
    echo "<!-- {$rows[1][0]} -->";
    echo "<table width=\"50%\" border=1 class=\"result\">
        <tr><td width=\"50px\">&nbsp;</td><td><b>{$locale['stimul']}</b></td><td><b>{$locale['resp']}</b></td>
		<td><b>{$locale['freq']}</b></td></tr>\n";

    for($i=2; $i<count($rows); $i++){
//          echo "<tr><td>".($i-1)."</td><td>{$rows[$i][2]}</td><td>{$rows[$i][0]}</td></tr>";//<td>{$rows[$i][3]}</td></tr>";
          echo "<tr><td>".($i-1)."</td><td>{$rows[$i][0]}</td><td>{$rows[$i][1]}</td><td>{$rows[$i][2]} ({$rows[$i][3]}%)</td></tr>";//<td>{$rows[$i][3]}</td></tr>";
    }
    echo "</table>";
}

function db_get_graph($test, $base, $chr, $sort_crt, $json){
global $locale;
        $rows = db_fjoint_graph($test, $base, $chr, $json);
        $max_val = 0;
        $ds = Array();
        $desc = Array(-1=>'Joint', 24=>'France', 25=>'Belgique', 26=>'Suisse', 27=>'Canada', 29=>'France', 30=>'Belgique', 31=>'Suisse', 32=>'Canada');
        foreach($rows as $key => &$value){          		  
               $dta = Array();
	       $cnt = count($rows[$key]);
               for($j=0;$j<min($cnt, 20); $j++) array_push($dta, Array($j, intval($rows[$key][$j][0]))); //$str .= "{x:".$j.", y:".$rows[$key][$j][0]."},";
               $tmp = Array('label'=>$desc[$key], 'data'=>$dta);
               array_push($ds, $tmp);
       	 }                                                               
        echo json_encode($ds);
}

function db_get_cloud($test, $base, $chr, $sort_crt, $json){
global $locale;
        $rows = db_cloud($test, $base, $chr, $json);
        $ds = Array();
        foreach($rows as $key => $value){          		  
               array_push($ds, Array('text'=>$key, 'weight'=>$value));
       	 }                                                               
        echo json_encode($ds);
}

function db_get_cloud1($test, $base, $chr, $sort_crt, $json){
global $locale;
        $rows = db_cloud($test, $base, $chr, $json);
        $ds = Array();
        foreach($rows as $key => $value){          		  
               array_push($ds, Array($key,intval($value)));
       	 }                                                               
        echo json_encode($ds);
}

?>
