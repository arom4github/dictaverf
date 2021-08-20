<?php
/**
*\file anketa_search.php
*\brief Management of returned data according to the method and dictionary specified (anketa search)
*\date Summer 2021
*/

include "db.php";

http_response_code(200);
header('Content-Type: application/json');

$test = 12;
/* Use the good fonction for each dictionary and each method then send data */
switch ($_POST["dict"]) {
	case 'fas':   $test = 12; break;
	case 'fas2': $test = 35; break;
	case 'fas1_red': $test = 38; break;
	case 'fas2_red': $test = 37; break;
	default:
		print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.',"error"=>array("Dictionary not found.",$_POST["dict"])));
		exit(0);
}

/* get data from database and send them */
$data = array();
switch ($_POST["method"]) {
	case 'range':
		$res = db_get_num_ank($test);
		array_push($data,array("value"=>$res));
		break;
	case 'que':
		$res = db_get_ank($test, $_POST["offset"]);
		array_push($data,array(
			"sex"           => $res[0]['sex'],
			"age"           => $res[0]['age'],
			"from"          => $res[0]['city'],
			"language"      => $res[0]['lang_n'],
			"specialization"=> $res[0]['spec'],
			"formation"     => $res[0]['edu'],
		));
		for ($i=1; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus" => $res[$i]['dw'],
				"reaction" => $res[$i]['rw'],
				"frequency"=> $res[$i][0],
			));
		}
		break;
	default:
		print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.',"error"=>array("Method not found.".$_POST["method"])));
		exit(0);
}
print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));

?>
