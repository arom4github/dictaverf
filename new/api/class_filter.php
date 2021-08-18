<?php
/**
*\file class_filter.php
*\brief Class to centralize filter options
*\date Summer 2021
*/
class Filter {
	/* Filter options */
	private $age; /*!< Array with minimum and maximum age numbeer */
	/* age[0] => age minimum
	   age[1] => age maximum */
	private $region;/*!< Region of the person */
	private $city;/*!< City of the person */
	private $specialization;/*!< Specialization's field of the person */
	private $sex;/*!< Sex of the person */
	private $lang; /*!< Language of the person */
	/* array with differents educations */
	private $education;/*!< Studies of the person */
	private $dict;/*!< Dictionary wanted */
	private $method;/*!< Method wanted */
	/* If one or more variables are not correct */
	private $error_msg;/*!< Array of error messages */

	/**
	*\fn function __construct()
	*\brief Filter constructor, include POST parameters verifications
	*/
	function __construct(){
		$this->error_msg=[];

		/* dictionary verification*/
		if(!$this->dict_check()){return;}

		/* all variables present */
		if(!$this->var_check()){return;}

		/* correct age */
		$this->age_check();

		/* city correct (prevent sql injection)*/
		$this->city_check();

		/* Need the database structure for check region, specialization, lang, education and sex*/
		/* region check */
		$this->region = $_POST["filter"]["region"];
		$this->lang = $_POST["filter"]["lang"];
		$this->specialization = $_POST["filter"]["specialization"];
		$this->sex = $_POST["filter"]["sex"];
		$this->education = $_POST["filter"]["education"];
	}

	/**
	*\fn function var_check()
	*\brief Check that all variables are present
	*\return True if variables are corrects
	*\return False if there is an error
	*/
	function var_check(){
		if(!isset($_POST["filter"]["agemin"])
		|| !isset($_POST["filter"]["agemax"])
		|| !isset($_POST["filter"]["region"])
		|| !isset($_POST["filter"]["city"])
		|| !isset($_POST["filter"]["specialization"])
		|| !isset($_POST["filter"]["education"])
		|| !isset($_POST["filter"]["sex"])
		|| !isset($_POST["filter"]["lang"])){
			array_push($this->error_msg,"One or more POST variables are missing.");
			return false;
		}
		return true;
	}

	/**
	*\fn function age_check()
	*\brief Check that the age range is correct
	*\return True if age range is correct
	*\return False if there is an error
	*/
	function age_check(){
		if(!is_numeric($_POST["filter"]["agemin"]) || !is_numeric($_POST["filter"]["agemax"])){
			array_push($this->error_msg,"Age is not a numeric value.");
			return false;
		}
		$min_age = intval($_POST["filter"]["agemin"]);
		$max_age = intval($_POST["filter"]["agemax"]);
		if($min_age < 1 || $min_age > 99 || $max_age < 1 || $max_age > 99 || $min_age>$max_age){
			array_push($this->error_msg,"Age must be between 1 and 99.");
			return false;
		}
		$this->age[0] = intval($_POST["filter"]["agemin"]);
		$this->age[1] = intval($_POST["filter"]["agemax"]);
		return true;
	}

	/**
	*\fn function city_check()
	*\brief Check that the city input is correct
	*\return True if city is correct
	*\return False if there is an error
	*/
	function city_check(){
		$alphabet = "abcdefghijklmnopqrstuvwxyz- ";
		for ($i=0; $i < strlen($_POST["filter"]["city"]); $i++) { 
			if(!strrpos($alphabet, strtolower($_POST["filter"]["city"][$i])) && strtolower($_POST["filter"]["city"][$i])!='a'){
				array_push($this->error_msg,"The city must contain only characters of the alphabet.");
				return false;
			}
		}
		$this->city = $_POST["filter"]["city"];
		return true;
	}

	/**
	*\fn function dict_check()
	*\brief Check that the dictionary exist and is correct, chech also the method and method parameters
	*\return True if the dictionary exist
	*\return False if there is an error
	*/
	function dict_check(){
		
		/* Dictionary check */
		if(!isset($_POST["dict"])){
			array_push($this->error_msg,"The request must contain a 'dict' variable.");
			return false;
		}elseif (!in_array($_POST["dict"],array("fas","fasn","sanf","sanfn","fas1_red","fas2_red"))) {
			array_push($this->error_msg,"The specified dictionary doesn't exist.");
			return false;
		}
		$this->dict=$_POST["dict"];

		/* Method check */
		if(!isset($_POST["method"])){
			array_push($this->error_msg,"The request must contain a 'method' variable.");
			return false;
		}elseif (!in_array($_POST["method"],array("letter","stim","react","frequency","questionnaires"))) {
			array_push($this->error_msg,"The specified method doesn't exist.");
			return false;
		}
		/* Méthode letter check */
		if($_POST["method"]=="letter"){
			if(!isset($_POST["range"])){
				array_push($this->error_msg,"You must specify a letter or word for this method.");
				return false;
			}else{
				if((strpos($_POST["range"], "\"") !== false) || 
				(strpos($_POST["range"], "'") !== false) || 
				(strpos($_POST["range"], ";") !== false)){
					array_push($this->error_msg,"You must specify a word that does not contains one of these characters (\" ' ;).");
					return false;
				}
			}
		}else if($_POST["method"]=="stim" || $_POST["method"]=="react"){
			if(!isset($_POST["range"])){
				array_push($this->error_msg,"You must specify a letter or word for this method.");
				return false;
			}else{
				$rangeTab = explode("-", $_POST["range"]);
				if(!is_numeric($rangeTab[0]) || !is_numeric($rangeTab[1])){
					array_push($this->error_msg,"Range not contains numeric numbers.");
					return false;
				}else if(!count($rangeTab)==2){
					array_push($this->error_msg,"Range not contains only 2 values.");
					return false;
				}else if(intval($rangeTab[0]) > intval($rangeTab[1])){
					array_push($this->error_msg,"The first number must be lower than the second number.".intval($rangeTab[0])."-".intval($rangeTab[1]));
					return false;
				}
			}
		}

		$this->method=$_POST["method"];
		return true;
	}

	/**
	*\fn function getObject()
	*\brief Convert the object to an array
	*\return The array with the necessary data
	*/
	function getObject(){
		return (array(
			"dict"=>$this->dict,
			"age" => $this->age,
			"region" => $this->region,
			"city"=>$this->city,
			"specialization"=>$this->specialization,
			"sex"=>$this->sex,
			"lang"=>$this->lang,
			"education"=>$this->education
		));
	}

	/**
	*\fn function getDict()
	*\brief To know the dictionary
	*\return Dictionary initialized in this object
	*/
	function getDict(){
		return $this->dict;
	}

	/**
	*\fn function getMethod()
	*\brief To know the method
	*\return Method initialized in this object
	*/
	function getMethod(){
		return $this->method;
	}

	/**
	*\fn function getErrors()
	*\brief To know the errors
	*\return Errors registered during verification phases
	*/
	function getErrors(){
		return $this->error_msg;
	}
}

?>