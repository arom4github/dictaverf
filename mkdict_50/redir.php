<?php
session_start();
$t = "";
if(isset($_GET['t'])){
    $t = $_GET['t'];
    if($t == 'new543FR')
		$_SESSION["test_id"] = 36;
    else {
		echo "The link seems to be broken";
		$t = "";
	}
}
if($t != ""){
?>
<html>	
<body onLoad="document.forms[0].submit();">
<form method="post" action="index.php"></form>
</body>
</html>
<?php 
}
?>
