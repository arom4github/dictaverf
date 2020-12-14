<?php
$basedir="/";
$lang = "";

if(isset($_COOKIE["pref_lang"])){
	$lang = $_COOKIE["pref_lang"];
}

if(isset($_GET["ru"])) $lang="ru";
if(isset($_GET["fr"])) $lang="fr";

if(($lang != "ru") && ($lang != "fr")){
	$lang = "fr"; 
}
setcookie("pref_lang", $lang, time()+36000, "/");

$dict = "";
if(!isset($_GET['page'])){
    $page = "about3";
//    $dict = "right";
}else{
    $page = $_GET['page'];
}

$jdict = "";
if(isset($_COOKIE["dict"])) $dict = $_COOKIE["dict"];
if(isset($_GET["dict"])){
    if($_GET["dict"] == "right") $dict="right";
    if($_GET["dict"] == "back") $dict="back";
    if($_GET["dict"] == "list") $dict="list";
}
//if(isset($_GET["dict"])){
//    if($_GET["dict"] == "first") $jdict="first";
//}
if(($dict != "right") && ($dict != "back") && ($dict != "list")){
    $dict="right";
}
setcookie("dict", $dict, time()+36000, "/");

//if($jdict == "first"){
//   setcookie("test", 13, time()+36000, "/");
//}else{
//   if (!isset($_COOKIE["test"]) || ($_COOKIE["test"] == 13)) setcookie("test", 12, time()+36000, "/");
//}
//   if (!isset($_COOKIE["test"])){
      if($page == "about" )    setcookie("test", 12, time()+36000, "/");
      if($page == "about3" )    setcookie("test", 35, time()+36000, "/");
      if($page == "dict3" )    setcookie("test", 35, time()+36000, "/");
      if($page == "about4" )    setcookie("test", 37, time()+36000, "/");
      if($page == "dict4" )    setcookie("test", 37, time()+36000, "/");
      if($page == "about5" )    setcookie("test", 38, time()+36000, "/");
      if($page == "dict5" )    setcookie("test", 38, time()+36000, "/");
      if($page == "aboutj")    setcookie("test", -1, time()+36000, "/");
      if($page == "aboutj1")    setcookie("test", -2, time()+36000, "/");
      if($page == "authors" )    setcookie("test", 12, time()+36000, "/");
      if($page == "authorsj")    setcookie("test", -1, time()+36000, "/");
      if($page == "authorsj1")    setcookie("test", -2, time()+36000, "/");
      if($page == "help" )    setcookie("test", 12, time()+36000, "/");
      if($page == "helpj")    setcookie("test", -1, time()+36000, "/");
      if($page == "helpj1")    setcookie("test", -2, time()+36000, "/");
      if($page == "dict" )    setcookie("test", 12, time()+36000, "/");
      if($page == "joint")    setcookie("test", -1, time()+36000, "/");
      if($page == "joint1")    setcookie("test", -2, time()+36000, "/");

      if(($page == "dict") && ($dict == "list") && isset($_GET["tt"]) && ( $_GET["tt"]  == "12"))    setcookie("test", 12, time()+36000, "/");
      if(($page == "dict") && ($dict == "list") && isset($_GET["tt"]) && ( $_GET["tt"]  == "33"))    setcookie("test", 33, time()+36000, "/");
      if(($page == "dict") && ($dict == "list") && isset($_GET["tt"]) && ( $_GET["tt"]  == "35"))    setcookie("test", 35, time()+36000, "/");
      if(($page == "dict") && ($dict == "list") && isset($_GET["tt"]) && ( $_GET["tt"]  == "37"))    setcookie("test", 37, time()+36000, "/");
      if(($page == "dict") && ($dict == "list") && isset($_GET["tt"]) && ( $_GET["tt"]  == "38"))    setcookie("test", 38, time()+36000, "/");
//   }
require_once 'include/config.php';
require_once 'include/db.php';
require_once 'include/lang_'.$lang.'.php';
require_once 'include/s_criteria_class.php';

?>
