<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile {

	private $tableName;
	private $CI;

	public function __construct()
	{
		$this->tableName = "profile";
		$this->CI = &get_instance();			
	}

    public function getProfile()
    {
    	/* select * limit 1 */
		$query = $this->CI->db->get($this->tableName, 1);

		if ($query->num_rows() > 0)
		{
			return $query->result()[0];
		}

		else
		{
			trigger_error("LIBRARY(Profile) FUNCTION(getProfile) EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }

    public function selectAll()
    {
    	/* select * limit 1 */
		$query = $this->CI->db->get($this->tableName);

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		else
		{
			trigger_error("LIBRARY(Profile) FUNCTION(selectAll) EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }

    public function getOne($column)
    {
    	$this->CI->db->select($column);
		$this->CI->db->from($this->tableName);
		//$this->CI->db->limit(1);
		
		$query = $this->CI->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		else
		{
			trigger_error("LIBRARY(Profile) FUNCTION(getOne) PARAM(". $info .") EXPLANATION: No result returned!", E_USER_ERROR);
			return null;
		}
    }
}
?>