<?php
/**
*\file config.php
*\brief Language and configuration of the project
*\date Summer 2021
*/

/* Edit this for production */
$BASE_PATH = "/";

/* Start session */
session_start();

/* Language definition */
if(!isset($_SESSION["lang"])){
	$_SESSION["lang"] = "ru";
}
if(isset($_GET["lang"]) && in_array($_GET["lang"],array("fr","ru"))){
	$_SESSION["lang"] = $_GET["lang"];
}

$lang = json_decode(file_get_contents(__DIR__."/../lang/data.json"));

?>
