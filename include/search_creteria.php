<?php 

$test = 12;
if(isset($_COOKIE["test"]))
	$test = $_COOKIE["test"];

$dict = $_COOKIE["dict"];
if(isset($_GET["dict"])) $dict = $_GET["dict"];
if($dict !="right" && $dict !="back" && $dict != "list") $dict="none";

$s_cr = new s_criteria_class();
if(isset($_COOKIE["{$dict}_{$test}_s_criteria"])){
    $s_cr->parse($_COOKIE["{$dict}_{$test}_s_criteria"]);
}

//var_dump($_COOKIE);
?>
<form class="ui form" action="" id="search_criteria">
    <table width=100% border=0 class="criteria">
		<?php 
		/*
			getCriteria retrieves the json of the Table tests which contains the criterias
			json_decode converts it into an Array usable in php
		*/
		$myJson = json_decode(getCriteria($test),true);
		$criterias = "";
		$i = 0;
		/*
			We loop through each criteria inside the json (sex, age...)
		*/
		foreach($myJson as $criteria => $array) 
		{
			//	We concatenate all criterias to pass it in the url
			
			// We get all pieces of information about the criteria (type, name in the desired language and values)
			$type = $myJson[$criteria]['type'];
			$values = $myJson[$criteria]['values'];
			$name = $myJson[$criteria]['name'][$lang];
			if (($type == "text") && (sizeof($values)>1)){
				$cpt=1;
			}
			else $criterias .= "$criteria|";
			if ($i % 2 == 0){
				//echo "<div class='fields'>";
				echo "<tr id='search_rows'>";
			}
		?>
			<!-- <label> <?php echo $name; ?> </label>
			<div class="four wide field"> -->
			<td valign=top align=right style="padding-right:0.5rem;" class=<?php echo "input_"."".$type.""; ?>
																	id=<?php echo "'".$criteria."'" ?>><?php echo "<b>".$name."</b>";?>:
			</td>
			<td valign=top>
			<?php 
				// We must distinguished a select tag of inputs before going in the loop of values
				if ($type == "select")
					echo "<select name=\"$criteria\" class=\"ui dropdown\">";
				/*
					We loop through the values
				*/
				foreach ($values as $value => $keys){
					
					//Display desired value of the variable in function of the language
					$text = $keys[$lang];
					
					//We distinguish each case of input type and act accordingly					
					if ($type == "select"){
						echo "<option value=\"$value\"";
						//We look into cookies to select the previous selected value else we select the default donotcare variable
						if (isset($s_cr->json["$criteria"])){
							if ($value == $s_cr->json["$criteria"])
								echo " selected";
						}
						else if ($value == "")
							echo " selected";
						echo "> $text </option>";
					}
					else{
						if ($type == "text"){
							if (sizeof($values) > 1){
								$name = $criteria.$cpt;
								$criterias .= "$name|";
								$cpt++;
							}
							else 
								$name = $criteria;
							echo "<div class=\"ui input\">";
							echo "<label class=\"text_input\">".$text."</label>"."<input type=$type name=\"$name\"";
							//Cookies check to display the previous value entered in the text input
							if (isset($s_cr->json["$name"])){
								echo " value =\"".$s_cr->json["$name"]."\"";
							}
							echo "/></div>";
						}
						else if ($type=="checkbox"){
							echo "<div class=\"ui checkbox\">";
							echo "<input type=$type name=\"$criteria\"/ value=\"$value\"";
							//Cookies check
							if (isset($s_cr->json["$criteria"])){
								//If type is checkbox we may have cookies with multiple selections so we must make it a particular case
								$checked = explode(",", $s_cr->json["$criteria"]);
								for ($i = 0; $i < sizeof($checked); $i++){
									if ($checked[$i] == $value)
										echo " checked";
								}
							}
							else if ($value == ""){
								echo " checked";
							}
							echo "> <label>$text </label> </div> </br>";
						} 
						else {
							echo "<div class=\"ui radio checkbox\">";
							echo "<input type=$type name=\"$criteria\"/ value=\"$value\"";
							//Cookies check
							if (isset($s_cr->json["$criteria"])){
								//If type is checkbox we may have cookies with multiple selections so we must make it a particular case
								if ($s_cr->json["$criteria"] == $value)
									echo " checked"; 
							}
							else if ($value == ""){
								echo " checked";
							}
							echo "> <label>$text </label> </div> </br>";
						}
					}
				}
				//We end the select tag
				if ($type == "select")
				echo "</select>";
			?> 
			</td>
			<!--</div> -->
		<?php 
			if ($i % 2 == 1){
				echo "</tr>";
			}
			++$i;		
		}
		?>
		<tr>
			<td valign="bottom" align="center" colspan=4>
				<input type=button class="ui black button" value="<?php echo $locale['renew']; ?>" onClick="getRenewal();">
			</td>
		</tr>
	
	</table>
    <input type="hidden" name="test" value="<?php echo $test; ?>">
    <input type="hidden" name="chr" value="<?php  echo $s_cr->chr; ?>">
	<input type="hidden" name="sort" value="<?php  echo $s_cr->sort; ?>">
	<input type="hidden" name="criterias" value="<?php  echo substr($criterias,0,strlen($criterias)-1); ?>">
</form>