<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of s_criteria_class
 *
 * @author arom
 */
class s_criteria_class {
    var $base;
    var $chr;
	var $sort;
	var $sr;
	var $srf;
	var $srt;
	var $json;
	
    function  __construct() {
        $this->s_criteria_class();
    }
    function  s_criteria_class() {
		$this -> json = Array(); 
        $this->base = "";
        $this->chr = "";
		$this->sort = "0";
		$this->sr = "0";
		$this->srf = "1";
		$this->srt = "1";
    }
    function parse($str){
        $d =explode("/", $str);
        $this->base = $d[0];
        $this->chr = $d[1];
        $this->sort = $d[2];
		$this->json = (array)json_decode($d[3]);
    }
    function cookie(){
        $str = $this->base."/".
               $this->chr."/".
			   $this->sort."/".
			   json_encode($this->json);
        return $str;
    }
}
?>