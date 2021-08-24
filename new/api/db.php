<?php
/**
*\file db.php
*\brief Functions related to the database
*\date Summer 2021
*/

/**
*\fn function connect()
*\brief Connection to the database
*\return Connection with the database
*\return null if an error was encountered
*/
function connect(){
	include 'db_config.php';
	try{
		$conn = new PDO("pgsql:host={$db_host};dbname={$db_name};port={$db_port};options='--client_encoding={$db_enc}'", $db_user, $db_pass);
		return $conn;
	}catch(PDOException $e){
		print "PDO connection error";
		return null;
	}
}

/**
*\fn function db_right_dict($chr)
*\brief Get data about direct search on a dictionary (currently FAS)
*\param $chr Letter or part of word that results words must begin
*\param $test Test ID in the database
*\return Array with that for each word :
*\return 	Index 1 : The word
*\return 	Index 2 : The total number of responses obtained for this stimulus
*\return 	Index 3 : The string to display on the website
*/
function db_right_dict($test, $chr){
	$res = Array();
	$conn = connect();
	if($conn){
		$search = "";
		//$search = searchRequest($json);
				if(strlen($chr)>0) {
					$rest = substr(strtolower($chr), 1);
					if(strtolower($chr[0]) == 'e'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(e|é|è|ê){$rest}%' ";
					}else 
					if(strtolower($chr[0]) == 'a'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(a|à|â){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'o'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(o|ô){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'c'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(c|ç){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'i'){
						$search .= "AND  lower(dict.word)  SIMILAR  TO '((un|une|le|la|les) )*(i|î){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'u'){
						$search .= "AND  (lower(dict.word) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  AND ".
										"lower(dict.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == 'l'){
						$search .= "AND  (lower(dict.word) similar to '((un|une|le|la|les) )*l{$rest}%' AND ".
										"lower(dict.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == '?'){
						$search .= "AND  lower(dict.word)  NOT SIMILAR  TO ".
							"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
					}else { 

						$search .= "AND lower(dict.word) similar to '((un|une|le|la|les) )*".strtolower($chr)."%' ";
					}
 
				}
		$result = $conn -> prepare("SELECT resp.word AS rw, dict.word, count(resp.word) AS cnt 
										FROM resp INNER JOIN dict ON dict.id=resp.id_w  
										INNER JOIN users_jsonb ON users_jsonb.id=resp.id_u 
										WHERE dict.test={$test} {$search}
										GROUP BY dict.word, rw
										order by dict.word, cnt desc, rw;");
		$result -> execute();
		if(!$result){$conn = null; return Array();}
		$str = "";
		$word = "";
		$num = -1;
		$cnt = Array(0,0,0,0);
		foreach ($result as $arr){
			if($word == ""){
				$word = $arr[1];
				if($arr[0] != '-'){
					$str = $arr[0];
					$num = $arr[2];
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
					$cnt[2] = ($arr[2] == 1)?1:0;
					$cnt[3] = 0;
				}else{
					$str = "";
					$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
					$num = $arr[2];
				}
			}else{
				if($word == $arr[1]){
					if($arr[0] != '-'){
						if(($num != $arr[2]) && ($str !="")){
							$str .= " <b>{$num}</b>; ";
						}
						$str .= ", $arr[0]";
						$cnt[0] += $arr[2];
						$cnt[1] += 1;
						$cnt[2] += ($arr[2] == 1)?1:0;
						$num = $arr[2];
					}else{
						$cnt[0] += $arr[2];
						$cnt[3] += $arr[2];
					}
				}else{
					$str = preg_replace("/^, /", "", $str);
					$str = preg_replace("/; , /", "; ", $str);
					$str .= " <b>{$num}</b>";
					array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
					$num = -1;
					$word = $arr[1];
					$str = "";
					if($arr[0] != '-'){
						if(($num != $arr[2]) && ($str !="")){
							$str .= " <b>{$num}</b>; ";
						}
						$str .= ", $arr[0]";
						$cnt[0] = $arr[2];
						$cnt[1] = 1;
						$cnt[2] = ($arr[2] == 1)?1:0;
						$cnt[3] = 0;
						$num = $arr[2];
					}else{
						$str = "";
						$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
						$num = $arr[2];
					}
				}
			}
		}
		$str .= " {$num}";
		$str = preg_replace("/^, /", "", $str);
		$str = preg_replace("/; , /", "; ", $str);
		if($word != "") array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
		usort($res, "numberCompare");
		return $res;
	}else{
		return Array();
	}
	return Array();
}

/**
*\fn function db_back_dict($test,$methodParam,$filter)
*\brief Get data about invert search on a dictionary (currently FAS)
*\param $test Table ID for the database
*\param $methodParam Letter, part of word or range according to the method, that results words must begin
*\param $filter Filter options (actually used there for get method)
*\return Array with that for each word :
*\return 	Index 1 : The word
*\return 	Index 2 : The absolute number of occurrences of this reaction.
*\return 	Index 3 : The string to display on the website
*\return 	Index 4 : Word counter (unused here)
*\return 	Index 5 : The number of stimuli that triggered it.
*/
function db_back_dict($test, $methodParam,$filter){
	$res = Array();
	$conn = connect();
	if ($conn) {
		//$search = searchRequest($json);
		$search_char = "";
		if ($filter->getMethod()=="letter" && strlen($methodParam) > 0) {
			$rest = substr(strtolower($methodParam), 1);
			if (strtolower($methodParam[0]) == 'e') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(e|é|è|ê){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'a') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(a|à|â){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'o') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(o|œ|ô){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'c') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(c|ç){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'i') {
				$search_char .= "AND  lower(resp.word_inv)  SIMILAR  TO '((un|une|le|la|les) )*(i|î){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'u') {
				$search_char .= "AND  (lower(resp.word_inv) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  AND ".
				"lower(resp.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
			} else
			if (strtolower($methodParam[0]) == 'l') {
				$search_char .= "AND  (lower(resp.word_inv) similar to '((un|une|le|la|les) )*l{$rest}%' AND ".
				"lower(resp.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
			} else
			if (strtolower($methodParam[0]) == '?') {
				$search_char .= "AND  lower(resp.word_inv)  NOT SIMILAR  TO ".
				"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|œ|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
			} else {
				$search_char .= "AND lower(resp.word_inv) similar to '((un|une|le|la|les) )*".strtolower($methodParam).
				"%' ";
			}
		}
		$result = $conn -> prepare("SELECT dict.word, resp.word_inv AS rw, count(dict.word) AS cnt, resp.checked AS ch 
			FROM resp INNER JOIN dict ON dict.id = resp.id_w WHERE resp.id_u in (SELECT 
			users_jsonb.id FROM users_jsonb WHERE users_jsonb.id_t = {$test}) 
			AND resp.word_inv <> '-' {$search_char} GROUP BY rw, dict.word, ch ORDER BY rw, 
			cnt desc, dict.word;");
		$result -> execute();
		if (!$result) {
			$conn = null;
			return Array();
		}
		$str = ""; $word = ""; $chk = 0; $cnt = Array(0, 0); $num = -1;
		foreach($result as $arr){
			if ($word == "") {
				$num = $arr[2];
				$word = $arr[1];
				$chk = $arr[3];
				$str = "$arr[0]";
				$cnt[0] = $arr[2];
				$cnt[1] = 1;
			} else {
				if ($word == $arr[1]) {
					if (($num != $arr[2]) && ($str != "")) {
						$str .= " {$num}; ";
					}
					$str .= ", $arr[0]";
					$cnt[0] += $arr[2];
					$cnt[1] += 1;
					$num = $arr[2];
				} else {
					$str .= " {$num}; ";
					$str = preg_replace("/; , /", "; ", $str);
					/* Stimulus method keep only $cnt[1] in range*/
					if(($filter->getMethod()=="stim" && $cnt[1]>=$methodParam[0] && $cnt[1]<=$methodParam[1])
						|| $filter->getMethod()=="react" && $cnt[0]>=$methodParam[0] && $cnt[0]<=$methodParam[1]
						|| $filter->getMethod()=="letter"){
						array_push($res, Array($word, $cnt[0], "{$str}<br>({$cnt[0]}, {$cnt[1]})", $chk, $cnt[1]));
					}
					$word = $arr[1];
					$chk = $arr[3];
					$str = $arr[0];
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
					$num = $arr[2];
				}
			}
		}
		$str .= " {$num}; "; $str = preg_replace("/; , /", "; ", $str);
		if ($word != "") {
			if(($filter->getMethod()=="stim" && $cnt[1]>=$methodParam[0] && $cnt[1]<=$methodParam[1])
				|| $filter->getMethod()=="react" && $cnt[0]>=$methodParam[0] && $cnt[0]<=$methodParam[1]
				|| $filter->getMethod()=="letter"){
				array_push($res, Array($word, $cnt[0], "{$str}<br>({$cnt[0]}, {$cnt[1]})", $chk, $cnt[1]));
			}
		}
		if($filter->getMethod()=="stim"){
			usort($res, "stimCompare");
		}else{
			usort($res, "numberCompare");
		}
		return $res;
	}
	else {
		return Array();
	}
	return Array();
}

function getColor($resp, $stim, $list){
	try{
		$c = "jdcs";
		$n = $list{$stim}{$resp};
		$c .= ($n & 1)?'f':'_';
		$c .= ($n & 2)?'b':'_';
		$c .= ($n & 4)?'s':'_';
		$c .= ($n & 8)?'c':'_';
		return $c;
	}catch(Exception $e){
		return "jdcs____";
	}
}

function db_fjoint_dict($tst, $methodParam){
	global $db_host, $db_user, $db_pass, $db_enc, $db_name, $db_port;
	
	$conn = connect($db_host, $db_port, $db_name, $db_user, $db_pass, $db_enc);
	if($conn){
		//$search = searchRequest($json);
                $search_chr = "";
	        if(strlen($methodParam)>1) {
                     $search_char = "AND lower(dict.word)='".strtolower($methodParam)."' ";
                }else{
                     $search_char = "AND lower(dict.word) like '".strtolower($methodParam[0])."%' ";
                }
/*	if (strlen($methodParam) > 0) {
			$rest = substr(strtolower($methodParam), 1);
			if (strtolower($methodParam[0]) == 'e') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(e|é|è|ê){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'a') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(a|à|â){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'o') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(o|œ|ô){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'c') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(c|ç){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'i') {
				$search_char .= "AND  lower(resp.word_inv)  SIMILAR  TO '((un|une|le|la|les) )*(i|î){$rest}%' ";
			} else
			if (strtolower($methodParam[0]) == 'u') {
				$search_char .= "AND  (lower(resp.word_inv) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  AND ".
				"lower(resp.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
			} else
			if (strtolower($methodParam[0]) == 'l') {
				$search_char .= "AND  (lower(resp.word_inv) similar to '((un|une|le|la|les) )*l{$rest}%' AND ".
				"lower(resp.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
			} else
			if (strtolower($methodParam[0]) == '?') {
				$search_char .= "AND  lower(resp.word_inv)  NOT SIMILAR  TO ".
				"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|œ|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
			} else {
				$search_char .= "AND lower(resp.word_inv) similar to '((un|une|le|la|les) )*".strtolower($methodParam).
				"%' ";
			}
		}
*/

		// commented  base dict
		//if($base == 1) $search.= "AND dict.base='T' ";
		
                $res_comm = $conn->prepare ("select dict.word from dict where dict.test in (24,25,26,27) $search_char group by dict.word order by dict.word;");
		$res_comm->execute();

                if(!$res_comm){disconnect($conn); return Array();}
		$res = Array();
		$res_comm_arr = $res_comm->fetchAll(PDO::FETCH_NUM);
		for($i=0; $i< count($res_comm_arr); $i++){
                        array_push($res, Array($res_comm_arr[$i][0], "-", "&nbsp;", "&nbsp;", "&nbsp;", "&nbsp;","&nbsp;"));
                }
		$response = array();
		$tl = Array();
		if($tst == -1)  array_push($tl,-1,24,25,26,27);
		if($tst == -2)  array_push($tl,-1,29,30,31,32);

		$search = "";
		foreach($tl as $test){
        	        $t_search = "dict.test={$test}";
			$search_adv = "users_jsonb.id_t in (".join(',',$tl).")";
                	if ($test == -1)
				$t_search = "dict.test in (".join(',',$tl).")";

			$result = $conn->prepare("select resp.word as rw, dict.word, count(resp.word) as cnt 
							from resp inner join dict on dict.id=resp.id_w   
							where {$t_search} {$search_char} and resp.id_u in (Select users_jsonb.id from users_jsonb where {$search_adv} {$search})
							and resp.word != '-'
							group by dict.word, rw 
							order by dict.word, cnt desc, rw;");
			$result->execute();	

			if(!$result){ $conn=null; return Array(); }
	    		if($result->rowCount()<=0){ continue; }							
			$result_arr = $result->fetchAll(PDO::FETCH_NUM);
			if($test == -1){	
				$tmp_row = $result_arr[0];		
				$tmp_stim = $tmp_row[1];
				$tmp_stim_array = array();	
				for($i=0; $i < $result->rowCount(); $i++){				
					$tmp_row = $result_arr[$i];
					if($tmp_row[1] == $tmp_stim ) {
						$tmp_stim_array{$tmp_row[0]}= 0; //array(24=>false,25=>false,26=>false,27=>false);
					} else {
						$response{$tmp_stim}=$tmp_stim_array;
						$tmp_stim = $tmp_row[1];
						$tmp_stim_array = array ($tmp_row[0]=> 0); //array(24=>false,25=>false,26=>false,27=>false));
					}
				} 
				$response{$tmp_stim}=$tmp_stim_array; //for the last stimulus. 
			} else {
		                $v = array($tl[4] => 1, $tl[3] => 2, $tl[2] => 4, $tl[1] => 8);
				// We do for each country a comparison of the word answered to sort			
					for($i=0; $i < $result->rowCount(); $i++){
						$tmp_row = $result_arr[$i];
						$response{$tmp_row[1]}{$tmp_row[0]} |= $v{$test};
					}
					
			}
		}
		foreach($tl as $test){
        	        $t_search = "dict.test={$test}";
			$search_adv = "users_jsonb.id_t in (".join(',',$tl).")";
                	if ($test == -1)
				$t_search = "dict.test in (".join(',',$tl).")";

			$result = $conn->prepare("select resp.word as rw, dict.word, count(resp.word) as cnt 
							from resp inner join dict on dict.id=resp.id_w   
							where {$t_search} {$search_char} and resp.id_u in (Select users_jsonb.id from users_jsonb where {$search_adv} {$search})
							and resp.word != '-'
							group by dict.word, rw 
							order by dict.word, cnt desc, rw;");
			$result->execute();	

			if(!$result){ $conn=null; return Array(); }
	    		if($result->rowCount()<=0){ continue; }							
			$result_arr = $result->fetchAll(PDO::FETCH_NUM);
			$str = "";
			$word = "";
			$num = -1;
			$cnt = Array(0,0,0,0,0,0,0); // tableau qui permet de compter
			for($i=0; $i < $result->rowCount(); $i++){
				$arr = $result_arr[$i];
				if($word == ""){ // beginning
					$word =  $arr[1];
					if($arr[0] != '-'){ // possible not to have answer so equals - so I increment
						$str = "<div class='".getColor($arr[0],$word,$response)."'>".$arr[0]."</div>"; // dictword
						$num = $arr[2]; // count
						$cnt[0] = $arr[2];
						$cnt[1] = 1;
						$cnt[2] = ($arr[2] == 1)?1:0;
						$cnt[3] = 0;
					}else{
						$str = "";
						$cnt[0] = $arr[2];
						$cnt[1] = 0;
						$cnt[2] = 0;
						$cnt[3] = $arr[2];
						$num = $arr[2];
					}
				}else{
					if($word == $arr[1]){
						if($arr[0] != '-'){
							if(($num != $arr[2]) && ($str !="")){ // verification si même nombre dans ce cas on ne le remet pas
								$str .= " <b>{$num}</b>; ";
							}
							$str .= ", <div class='".getColor($arr[0],$word,$response)."'>".$arr[0]."</div>";
							$cnt[0] += $arr[2]; // total number of responses
							$cnt[1] += 1; // different response
							$cnt[2] += ($arr[2] == 1)?1:0; // number of response which have only 1 stimulus / 1 response
							$num = $arr[2];
						}else{
							$cnt[0] += 0; //$arr[2];
							$cnt[3] += $arr[2];
							$num = $arr[2];
						}
					}else{
						$str = preg_replace("/^, /", "", $str);
						$str = preg_replace("/; , /", "; ", $str);
						$str .= " <b>{$num}</b>";
						//array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
					        for($j=0; $j< $res_comm->rowCount(); $j++){
				                    $arr1 = $res_comm_arr[$j];
		                                    if($arr1[0] == $word){
							if($test == $tl[0]) $res[$j][2] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
							if($test == $tl[1]) $res[$j][3] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
							if($test == $tl[2]) $res[$j][4] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
							if($test == $tl[3]) $res[$j][5] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
							if($test == $tl[4]) $res[$j][6] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
						        break;
		                                    }
		                                    //array_push($res, Array($arr[0], "", "", "", ""));
		                                }
		                                $num = -1;
						$word = $arr[1];
						$str = "";
						if($arr[0] != '-'){
							if(($num != $arr[2]) && ($str !="")){
								$str .= " \\{$num}\\; ";
							}
							$str .= ", <div class='".getColor($arr[0],$word,$response)."'>".$arr[0]."</div>";
							$cnt[0] = $arr[2];
							$cnt[1] = 1;
							$cnt[2] = ($arr[2] == 1)?1:0;
							$cnt[3] = 0;
							$num = $arr[2];
						}else{
							$str = "";
							$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
							$num = $arr[2];
						}
					}
				}
			} // foreach
			$str = preg_replace("/^, /", "", $str);
			$str = preg_replace("/; , /", "; ", $str);
			$str .= " <b>{$num}</b>";
			if($word != "") {
		        for($j=0; $j < $res_comm->rowCount(); $j++){
			    $arr = $res_comm_arr[$j];
	                    if($arr[0] == $word){
			        if($test == $tl[0]) $res[$j][2] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
			        if($test == $tl[1]) $res[$j][3] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
		        	if($test == $tl[2]) $res[$j][4] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
			        if($test == $tl[3]) $res[$j][5] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
			        if($test == $tl[4]) $res[$j][6] = "{$str}<br>({$cnt[0]}, {$cnt[1]} [".pr(100*$cnt[1]/$cnt[0])."%], {$cnt[3]}, {$cnt[2]})";
			        break;
	                    }
        	        }
			} // if $word != ""
			//usort($res, "rcmp");
		} // foreach test
         
		return $res;
	}else{
		return Array();
	}
	return Array();
}



/**
*\fn function numberCompare($a, $b)
*\brief Compare 2 numbers (based on index 1 of result array).
*\param $a first line of array to compare
*\param $b second line of array to compare
*\return 0 if $a and $b are equal.
*\return 1 if $b[1] is bigger
*\return -1 if $a[1] is bigger
*/
function numberCompare($a, $b){
	if($a[1] == $b[1]) return 0;
	return ($a[1] < $b[1])? 1: -1;
}

/**
*\fn stimCompare($a,$b)
*\brief Compare 2 numbers (based on index 4 of result array).
*\param $a first line of array to compare
*\param $b second line of array to compare
*\return 0 if $a and $b are equal.
*\return 1 if $b[4] is bigger
*\return -1 if $a[4] is bigger
*/
function stimCompare($a,$b){
	if($a[4] == $b[4]) return 0;
	return ($a[4] < $b[4])? 1: -1;
}

function pr($v){ return sprintf("%.2f", $v);}

/**
*\fn function db_get_ank($test,$offset)
*\brief Get an anket from the database
*\param $test Test ID in the database
*\param $offset get anket number $offset
*\return The first element of the array contains information about the persone
*\return Array with that for each word :
*\return 	Index 1 : The stimulus
*\return 	Index 2 : The response
*\return 	Index 3 : The frequency statistics
*/
function db_get_ank($test, $offset){
	$res = Array();
	$conn = connect();
	if($conn){
		$result = $conn->prepare ("select id, data->'caracteristics' ->> 'sex' as sex,
							data->'caracteristics' ->> 'age' as age,
							data->'place' ->> 'city' as city,
							data->'caracteristics' ->> 'lang' as lang_n,
							data->'caracteristics' ->> 'spec' as spec,
							data -> 'caracteristics' ->> 'edu' as edu
						from users_jsonb
                                                where users_jsonb.id_t={$test} 
                                                order by users_jsonb.id limit 1 offset {$offset};");
		$result->execute();
                $userid = "";
		if(!$result){$conn = null; return Array();}

		$arr = Array();
		if( $result->rowCount() == 1){
			$arr = $result->fetch(PDO::FETCH_ASSOC);
                        array_push($res, $arr);
                        $userid = $arr['id'];
		}else{
                    return Array();
                }
		
                $res1 = $conn->prepare("select dict.word as dw, count(dict.word) as cnt from dict 
                                                  left join resp on dict.id=resp.id_w 
                                                  where resp.word !='-' and dict.test={$test} group by dict.word;");
		$res1->execute();
		$answ = Array();
		for($i=0; $i< $res1->rowCount(); $i++){
	 		$arr = $res1->fetch(PDO::FETCH_ASSOC);
                        $answ = array_merge($answ, Array($arr['dw']=>$arr['cnt']));
		}
		$result = $conn->prepare("select dict.word as dw, resp.word as rw , count(resp.word) as cnt 
						from resp inner join dict on resp.id_w=dict.id 
							where dict.test={$test} and dict.id||'_'||resp.word in 
								(select dict.id||'_'||resp.word from resp 
									inner join dict on resp.id_w=dict.id 
										where resp.id_u={$userid}) 
							group by dw, rw order by cnt desc;");

		$result -> execute();
		if (!$result) {
			$conn = null;
			return Array();
		}

                for($i=0; $i< $result->rowCount(); $i++){
			$arr = $result->fetch(PDO::FETCH_ASSOC);
			array_push($arr, $arr['cnt']. " (".pr(100*$arr['cnt']/$answ[$arr['dw']])."%)");
			array_push($res, $arr);
                }
		return $res;
	}
	else {
		return Array();
	}
	return Array();
}

/**
*\fn function db_get_num_ank($test)
*\brief Get number anket in the database
*\param $test Test ID in the database
*\return Number of ankets in the database
*/
function db_get_num_ank($test){
	$conn = connect();
	if($conn){
		$result = $conn -> prepare("SELECT count(*) as cnt FROM users_jsonb WHERE users_jsonb.id_t = {$test};" );
		$result -> execute();
		if (!$result) {
			$conn = null;
			return 0;
		}
		$val = $result->fetch(PDO::FETCH_ASSOC);
		return $val['cnt'];
	}
	else {
		return 0;
	}
}

?>
