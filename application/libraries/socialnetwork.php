<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socialnetwork {

	private $tableName;
	private $CI;

	public function __construct()
	{
		$this->tableName = "socialnetwork";
		$this->CI = &get_instance();			
	}

    public function selectAll($returnType = "array")
    {
		$query = $this->CI->db->get($this->tableName);

		if ($query->num_rows() > 0)
		{
			if(strcasecmp($returnType, "object") == 0)
			{
				return $query->result();
			}
			else if (strcasecmp($returnType, "array") == 0)
			{
				return $query->result_array();
			}
		}

		else
		{
			trigger_error("LIBRARY(Socialnetwork) FUNCTION(selectAll) EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }
}
?>