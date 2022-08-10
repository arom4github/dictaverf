<?php
/**
*\file direct_search.php
*\brief Management of returned data according to the method and dictionary specified (direct search)
*\date Summer 2021
*/

include "class_filter.php";
include "db.php";

$filter = new Filter;
/* Check errors during the creation of the Filter */
if(count($filter->getErrors())>0){
	/* Error in creation of the Filter */
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.', "error" => $filter->getErrors()));
	exit;
}else{
	http_response_code(200);
    header('Content-Type: application/json');
}

/* Use the good fonction for each dictionary and send data */
switch ($filter->getDict()) {
	case 'fas':
		/* get data from database and send them */
		$res = db_right_dict(12, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanfn':
		/* get data from database and send them */
		$res = db_fjoint_dict(-1, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"joint"=>$res[$i][2],
				"france"=>$res[$i][3],
				"belgique"=>$res[$i][4],
				"suisse"=>$res[$i][5],
				"canada"=>$res[$i][6],
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2':
		/* get data from database and send them */
		$res = db_right_dict(35, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas1_red':
		/* get data from database and send them */
		$res = db_right_dict(38, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2_red':
		/* get data from database and send them */
		$res = db_right_dict(37, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'gfasa':
		/* get data from database and send them */
		$res = db_right_dict(13, $_POST["range"]);
		$data = array();
		for ($i=0; $i < count($res); $i++) { 
			array_push($data,array(
				"id"=>$i+1,
				"stimulus"=>$res[$i][0],
				"reactions"=>$res[$i][2]
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	default:
		/* Make a default case */
		print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.',"error"=>array("Dictionary not found.")));
		break;
}
?>
