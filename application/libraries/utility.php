<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility {

	private $CI;

	public function __construct()
	{
		//$this->CI = &get_instance();
	}
	
	public function mergeData($tempData, $realData)
	{
		if((strcasecmp(gettype($tempData), "array") == 0) 
			&& (strcasecmp(gettype($realData), "array") == 0) )
		{
			//echo "temp:array & data:array </br></br>";
			$realData = array_merge($tempData, $realData);
		}

		else if ((strcasecmp(gettype($tempData), "object") == 0)
			&& (strcasecmp(gettype($realData), "array") == 0) )
		{
			//echo "temp:object & data:array </br></br>";
			foreach ($tempData as $key => $value)
			{
				$realData[$key] = $value;
			}
		}
		
		else
		{
			trigger_error("LIBRARY(utility) FUNCTION(mergeData) EXPLANATION: if else statement failed!", E_USER_ERROR);
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

	public function printArray($data)
	{
		foreach ($data as $key => $value) {
			if(strcasecmp(gettype($value), "object") == 0)
			{
				echo "KEY: ". $key ."</br>".
				"TYPE: ". gettype($value) ."</br>".
				"VALUE: ";
				//print_r($value);
				
				foreach ($value as $keyInnerData => $valueInnerData) {
					echo "</br></br>KEY: ". $keyInnerData ."</br>".
					"TYPE: ". gettype($valueInnerData) ."</br>".
					"VALUE: ";
					print_r($valueInnerData);
				}
				
				echo "</br></br>";
			}
			else if(strcasecmp(gettype($value), "array") == 0)
			{
				foreach ($value as $keyInnerData => $valueInnerData) {
					echo "</br></br>KEY: ". $keyInnerData ."</br>".
					"TYPE: ". gettype($valueInnerData) ."</br>".
					"VALUE: ";
					print_r($valueInnerData);
				}
			}

			else
			{
				echo "KEY: ". $key ."</br>".
				"TYPE: ". gettype($value) ."</br>".
				"VALUE: ". $value ."</br></br>";
			}			
		}
	}

	public function convertToAssociativeArray($tempData, $realData)
	{
		foreach ($tempData as $key => $value) {
			$realData[$key] = $value;
		}

		return $realData;
	}
}
?>