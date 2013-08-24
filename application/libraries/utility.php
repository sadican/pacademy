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
			$realData = array_merge($tempData, $realData);
		}

		else if ((strcasecmp(gettype($tempData), "object") == 0)
			&& (strcasecmp(gettype($realData), "array") == 0) )
		{
			foreach ($tempData as $key => $value)
			{
				$realData[$key] = $value;
			}
		}

		else
		{
			echo "LIBRARY(utility) FUNCTION(mergeData) EXPLANATION: if else statement failed!";
			return null;
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