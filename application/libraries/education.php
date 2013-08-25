<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education {

	private $tableName;
	private $CI;

	public function __construct()
	{
		$this->tableName = "education";
		$this->CI = &get_instance();			
	}

    public function selectAll($returnType = 'array')
    {
    	$this->CI->db->order_by("edu_order","desc");
		$query = $this->CI->db->get($this->tableName);

		//echo $this->CI->db->last_query();

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
			trigger_error("LIBRARY(Education) FUNCTION(selectAll) EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }
}
?>