<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility {

	public $CI;// = &get_instance();

	public function __construct()
	{
		/*
		$this->CI = &get_instance();
		*/	
	}
	
	public function appendToData($tempData, $realData)
	{
		foreach ($tempData as $key => $value) {
			$realData[$key] = $value;
		}

		return $realData;
	}

	public function echoTriple()
	{
		echo "</br></br></br>";
	}

	public function echoN($n)
	{
		for ($i=0; $i < $n; $i++) { 
			echo "</br>";
		}
		
	}
}
?>