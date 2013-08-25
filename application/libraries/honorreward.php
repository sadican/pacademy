<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Honorreward {

	private $tableName;
	private $CI;

	public function __construct()
	{
		$this->tableName = "honorreward";
		$this->CI = &get_instance();			
	}

    public function selectAll($returnType = "array")
    {
		$query = $this->CI->db->get($this->tableName);

		if ($query->num_rows() > 0)
		{
			if(strcasecmp($returnType, 'array') == 0)
			{
				return $query->result_array();
			}
			else if(strcasecmp($returnType, 'object') == 0)
			{
				return $query->result();
			}
		}

		else
		{
			trigger_error("LIBRARY(HonorReward) FUNCTION(selectAll) EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }
}
?>