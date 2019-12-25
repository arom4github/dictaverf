<?php

//$db_host = '193.124.208.124';
//$db_user = 'dict';
//$db_pass = '1q2w3e';
//$db_enc = 'UTF8';
//$db_name = 'dict';

$Last_key_lang = "";
$Test_id = "";

function connect($host, $port, $db, $user, $pass, $enc){
	$conn = pg_connect("host={$host} port={$port} dbname={$db} user={$user} password={$pass}");
	return $conn;
}

function disconnect($conn){
	@pg_close($conn);
}

function db_check_key($key){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	global $Last_key_lang;
	global $Test_id;
//	$Test_id = 13;
	$Last_key_lang = 'fr';
	return 0;
	
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "select lang, id from keys where used='false' and key='{$key}'");
		if(!$result) return 1;
		if(pg_numrows($result) != 1){
			disconnect($conn);
			return 2;
		}
		$res = pg_fetch_array($result, 0);
		$id = $res[1];
		$Last_key_lang = $res[0];
		$result = @pg_exec ($conn, "select max(id) from tests where lang='{$Last_key_lang}'");
		if(!$result) return 1;
		if(pg_numrows($result) != 1){
			disconnect($conn);
			return 3;
		}
		$res = pg_fetch_array($result, 0);
		$Test_id = $res[0];	
		if($Test_id == ""){
			disconnect($conn);
			return 3;
		}
		$result = @pg_exec ($conn, "update keys set used='true' where id={$id}");
		if(!$result) {disconnect($conn); return 1;}
		$cmdtuples = pg_cmdtuples ($result);
		pg_freeresult($result);
		if($cmdtuples == 1) {
			disconnect($conn); 
			return 0;
		}
		disconnect($conn);
		return 2;
	}else{
		return 1;
	}
	return 3;
}

function db_save_words($words){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	global $_SESSION;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	$new_user = "";
	$new_words = "";
	// We get the particular structure of the json data for this test id
	//$result = pg_exec ($conn, "select data from users_jsonb where id_t={$_SESSION['test_id']} LIMIT 1");
	//$st = pg_result_status($result);
	//if ($st != 0 || $st != 2){ 
	//	$data_structure = pg_fetch_array($result, 0);
	//}
	//else 
	$data_structure = '{"caracteristics":{"lang":"fr","age":50,"sex":false,"spec":"ressources humaines et carrières sociales","edu":2},"place":{"city":"Chasseneuil-du-Poitou","reg":21}}';
		// We transform it into an array
		$data_arr = json_decode($data_structure, true);
		// We get all the criteria for this test id
		$myJson = json_decode(getCriteria($_SESSION['test_id']),true);
		$criteria = "";
		// We concatenate all the criteria for further use
		foreach($myJson as $criterion => $array){
			$criteria .= "$criterion|";
		}
		// Then put then into an array
		$criteria_arr = explode("|", $criteria);
		//var_dump($_SESSION);
		// We cycle through the data of the user to replace each criteria by the new gathered ones
		foreach($data_arr as $firstRow => $array){
		//	echo "checking {$firstRow} =>";
		//	var_dump($array);
		//	echo "<br>\n";
			for ($i=0; $i<sizeof($criteria_arr)-1;$i++){
		//		echo "test attr $i -> {{$criteria_arr[$i]}}{";
		//		echo $array["{$criteria_arr[$i]}"]."} {".$_SESSION["{$criteria_arr[$i]}"]."}<br>\n";
				if (isset($array["{$criteria_arr[$i]}"]) && isset($_SESSION["{$criteria_arr[$i]}"]))
					$array["{$criteria_arr[$i]}"] = $_SESSION["{$criteria_arr[$i]}"];
			}
			$data_arr[$firstRow] = $array;
		//	echo "<br>====<br>".
		//	var_dump($data_arr);
		}
		// We convert back the user data to json
		$data_user = json_encode($data_arr);
	
		
	$new_user = "INSERT into users_jsonb (id_t, data) ".
				"Values ('{$_SESSION['test_id']}', '{$data_user}');";
	write_log($new_user);
	preg_match_all("|([0-9]+):([^;]+);|", $_POST['words'], $out, PREG_PATTERN_ORDER);
	for($i=0; $i<count($out[0]); $i++){
			$w = str_replace("'", "''", trim($out[2][$i]));
			write_log("INSERT into resp (id_w, id_u, word) VALUES ({$out[1][$i]}, lid, '{$w}');");
	}
	
	
	if($conn){
		preg_match_all("|([0-9]+):([^;]+);|", $_POST['words'], $out, PREG_PATTERN_ORDER);
		$result = @pg_exec ($conn, "BEGIN WORK");
		if(!$result){disconnect($conn); return 5;}
		pg_freeresult($result);
		
		$str = "INSERT into users_jsonb (id_t, data) ".
				"Values ('{$_SESSION['test_id']}', '{$data_user}') RETURNING id;";
		//echo $str;
		$result = pg_exec ($conn, $str);
		if(!$result){ @pg_exec ($conn, "ROLLBACK"); disconnect($conn); return 4;}
		
		/*
		Check non perninent here because we deleted the key column
		
		$result = @pg_exec ($conn, "select max(id) from users where key='{$_SESSION['key']}'");
		if(pg_numrows($result) != 1){
			@pg_exec ($conn, "ROLLBACK");
			disconnect($conn);
			return 1;
		}
		
		*/
		$res = pg_fetch_row($result);
		$lid = $res[0];	
		
		//echo "<br>==== {$str} returns {$lid} ====";	
		for($i=0; $i<count($out[0]); $i++){
			$w = str_replace("'", "''", trim($out[2][$i]));
			$str = "INSERT into resp (id_w, id_u, word) ";
			$str .= "VALUES ({$out[1][$i]}, {$lid}, '{$w}')";
			$result = pg_exec ($conn, $str);
			if(!$result){ @pg_exec ($conn, "ROLLBACK"); disconnect($conn); return 2;}
			pg_freeresult($result);
		}
		$result = @pg_exec ($conn, "COMMIT");
		disconnect($conn);
		write_log('lid = '.$lid);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function db_get_words($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "Select id, word from dict where test='{$test}' order by random() limit 100");
		//$result = @pg_exec ($conn, "select id, word from 
		//				(select dict.id as id, dict.word as word, count(resp.word) as cnt from 
		//				    resp inner join dict on dict.id=resp.id_w 
		//					where dict.lang='{$lang}' 
		//					group by dict.word, dict.id order by cnt limit 500) 
		//				as foo order by random() limit 100");
		if(!$result){
		    write_log("GET_WORDS: no words available");
		    disconnect($conn); 
		    return Array();
		}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		write_log("GET_WORDS: ".pg_numrows($result)." selected");
		return $res;
	}else{
		write_log("GET_WORDS: db connection error");
		return Array();
	}
	return Array();
}

function db_get_words_25($test){ return db_get_words_N($test, 25); }
function db_get_words_50($test){ return db_get_words_N($test, 50); }
function db_get_words_N($test, $nw){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "Select id, word from dict where test='{$test}' order by random() limit {$nw}");
		//$result = @pg_exec ($conn, "select id, word from 
		//				(select dict.id as id, dict.word as word, count(resp.word) as cnt from 
		//				    resp inner join dict on dict.id=resp.id_w 
		//					where dict.lang='{$lang}' 
		//					group by dict.word, dict.id order by cnt limit 500) 
		//				as foo order by random() limit 100");
		if(!$result){
		    write_log("GET_WORDS: no words available");
		    disconnect($conn); 
		    return Array();
		}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		write_log("GET_WORDS: ".pg_numrows($result)." selected");
		return $res;
	}else{
		write_log("GET_WORDS: db connection error");
		return Array();
	}
	return Array();
}

function db_get_unused_keys(){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "Select key, lang from keys where used='F'");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();

}

function db_get_used_keys(){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "Select key, lang from keys where used='T'");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();

}
function db_edit_city($test, $from, $to){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "update users_jsonb set data = jsonb_set(data, '{place,city}', '{$to}') where data -> 'place' ->> 'city'='{$from}' and id_t={$test}");
		//echo( "update users set city=lower('{$to}') where lower(city)='{$from}' and id_t={$test}");
		//pg_freeresult($result);
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}
function db_edit_region($test, $for, $to){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "update users_jsonb set data = jsonb_set(data, '{place,region}', '{$to}') where data -> 'place' ->> 'city'='{$for}' and id_t={$test}");
		//write_log("");
		//echo( "update users set city=lower('{$to}') where lower(city)='{$from}' and id_t={$test}");
		//pg_freeresult($result);
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function db_edit_spec($test, $from, $to){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "update users_jsonb set data = jsonb_set(data, '{caracteristics,spec}', lower('{$to}')) where lower(data -> 'caracteristics' ->> 'spec')='{$from}' and id_t={$test}");
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}
function db_gen_keys($lang, $num){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		for($i=0; $i<$num; $i++){
			$result = @pg_exec ($conn, "insert into keys (lang, key) values('{$lang}',substring(md5(RANDOM()),1,7));");
			pg_freeresult($result);
		}
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function db_del_keys(){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		
		$result = @pg_exec ($conn, "delete from keys where used='t';");
		pg_freeresult($result);
		
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function db_get_tests(){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = pg_exec ($conn, "Select dstart, lang, description, tests.id, count(tests.id) ".
					    "from usersjonb left join tests on  users_jsonb.id_t = tests.id ".
					    "group by  tests.id, tests.description, tests.dstart, ".
					    "tests.active, tests.lang order by dstart");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();
}

function db_get_lang($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = pg_exec ($conn, "select lower(data -> 'caracteristics' ->> 'lang') as a, count(data -> 'caracteristics' ->> 'lang') as c from users_jsonb where id_t={$test} group by a order by c desc");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();
}

function db_get_specs($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = pg_exec ($conn, "select lower(data -> 'caracteristics' ->> 'spec') as a, count(data -> 'caracteristics' ->> 'spec') as c from users_jsonb where id_t={$test} group by a order by c desc, a");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();
}

function db_get_cities($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = pg_exec ($conn, "select data -> 'place' ->> 'city' as a, count(data -> 'place' ->> 'city') as c, data -> 'place' ->> 'region'  from users_jsonb where id_t={$test} group by a, region  order by c desc, a, region");
		if(!$result){disconnect($conn); return Array();}
		for($i=0; $i< pg_numrows($result); $i++){
			array_push($res, pg_fetch_array($result, $i));
		}
		return $res;
	}else{
		return Array();
	}
	return Array();
}

function db_test_create($lang, $descr){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
			$description = addslashes($descr);
			$result = @pg_exec ($conn, "insert into tests (lang, dstart, description) values ".
					"('{$lang}', now(), '{$description}');");
			pg_freeresult($result);
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function db_test_delete($id){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$result = @pg_exec ($conn, "delete from tests where id={$id}");
		pg_freeresult($result);
		disconnect($conn);
		return 0;
	}else{
		return 1;
	}
	return 3;
}

function rcmp($aa, $bb){
	if($aa[1] == $bb[1]) return 0;
	return ($aa[1] < $bb[1])? 1: -1;
}

function db_right_dict($test, $sex, $af, $at, $edu, $spec, $city, $base, $nl){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$search = "";
		if($sex == 'M') $search .= "AND users.sex='t' ";
		if($sex == 'F') $search .= "AND users.sex='f' ";
		if(strlen($nl)>0) $search .= "AND users.lang_n = '{$nl}' ";
		if(strlen($af)>0) $search .= "AND users.age > $af ";
		if(strlen($at)>0) $search .= "AND users.age < $at ";
		if(strlen($edu)>0) $search .= "AND users.edu in ($edu) ";
		if(strlen($spec)>0) $search .= "AND users.spec like '".AddSlashes($spec)."' ";
		if(strlen($city)>0) $search .= "AND lower(users.city) like '".AddSlashes($city)."' ";
		if($base == 1) $search.= "AND dict.base='T' ";
		
		$result = @pg_exec ($conn, "select lower(resp.word) as rw, dict.word, count(resp.word) as cnt 
										from resp inner join dict on dict.id=resp.id_w  
											inner join users on users.id=resp.id_u 
										where users.id_t={$test} {$search} 
										group by dict.word, rw 
										order by dict.word, cnt desc, rw;");
										
		if(!$result){disconnect($conn); return Array();}
		$str = "";
		$word = "";
		$cnt = Array(0,0,0,0);
		for($i=0; $i< pg_numrows($result); $i++){
			$arr = pg_fetch_array($result, $i);
			if($word == ""){
				$word = $arr[1];
				if($arr[0] != '-'){
					$str = "{$arr[0]}:{$arr[2]}";
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
					$cnt[2] = ($arr[2] == 1)?1:0;
					$cnt[3] = 0;
				}else{
					$str = "";
					$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
				}
			}else{
				if($word == $arr[1]){
					if($arr[0] != '-'){
						$str .= ", {$arr[0]}:{$arr[2]}";
						$cnt[0] += $arr[2];
						$cnt[1] += 1;
						$cnt[2] += ($arr[2] == 1)?1:0;
					}else{
						$cnt[0] += $arr[2];
						$cnt[3] += $arr[2];
					}
				}else{
					$str = preg_replace("/^, /", "", $str);
					array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
					$word = $arr[1];
					if($arr[0] != '-'){
						$str = "{$arr[0]}:{$arr[2]}";
						$cnt[0] = $arr[2];
						$cnt[1] = 1;
						$cnt[2] = ($arr[2] == 1)?1:0;
						$cnt[3] = 0;
					}else{
						$str = "";
						$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
					}
				}
			}
		}
		$str = preg_replace("/^, /", "", $str);
		if($word != "") array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
		usort($res, "rcmp");
		return $res;
	}else{
		return Array();
	}
	return Array();
}
function db_back_dict($test, $sex, $af, $at, $edu, $spec, $city, $base, $nl){
//function db_back_dict($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	$res = Array();
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		$search = "";
		if($sex == 'M') $search .= "AND users.sex='t' ";
		if($sex == 'F') $search .= "AND users.sex='f' ";
		if(strlen($nl)>0) $search .= "AND users.lang_n = '{$nl}' ";
		if(strlen($af)>0) $search .= "AND users.age > $af ";
		if(strlen($at)>0) $search .= "AND users.age < $at ";
		if(strlen($edu)>0) $search .= "AND users.edu in ($edu) ";
		if(strlen($spec)>0) $search .= "AND users.spec like '".AddSlashes($spec)."' ";
		if(strlen($city)>0) $search .= "AND lower(users.city) like '".AddSlashes($city)."' ";
		if($base == 1) $search.= "AND dict.base='T' ";
		//$search .= "AND resp.checked='f' ";

		//$result = pg_exec ($conn, "select dict.word, lower(resp.word) as rw, count(dict.word) as cnt 
		$result = pg_exec ($conn, "select dict.word, resp.word as rw,  count(dict.word) as cnt, resp.checked as ch 
							from resp inner join dict on dict.id=resp.id_w  
								inner join users on users.id=resp.id_u 
							where users.id_t={$test} and resp.word<>'-' {$search}
							group by rw, dict.word, ch order by rw, cnt desc;");
		
		if(!$result){disconnect($conn); return Array();}
		$str = "";
		$word = "";
		$chk = 0;
		$cnt = Array(0,0);
		for($i=0; $i< pg_numrows($result); $i++){
			$arr = pg_fetch_array($result, $i);
			if($word == ""){
				$word = $arr[1];
				$chk = $arr[3];
				$str = "{$arr[0]}:{$arr[2]}";
				$cnt[0] = $arr[2];
				$cnt[1] = 1;
			}else{
				if($word == $arr[1]){
					$str .= ", {$arr[0]}:{$arr[2]}";
					$cnt[0] += $arr[2];
					$cnt[1] += 1;
				}else{
					array_push($res, Array($word, $cnt[1],  "{$str}<br>({$cnt[0]}, {$cnt[1]})", $chk));
					$word = $arr[1];
					$chk = $arr[3];
					$str = "{$arr[0]}:{$arr[2]}";
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
				}
			}
		}
		if($word != "") array_push($res, Array($word, $cnt[1], "{$str}|({$cnt[0]}, {$cnt[1]})", $chk));
		usort($res, "rcmp");
		return $res;
	}else{
		return Array();
	}
	return Array();
}
/*
	Get the search criterias in tests(criteria) and return a json
*/
function getCriteria($test){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	if ($test == -1)
		$test = 25;
	if ($test == -2) 
		$test = 29;
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if ($conn){
		$result = pg_exec ($conn, "SELECT tests.criteria
									FROM public.tests
									WHERE id={$test}");
		if(!$result){disconnect($conn); return "";}
		$response = pg_fetch_array($result, 0);
		return $response[0];
		     
	}							
		return "";
          
}
	?>
