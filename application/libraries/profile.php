<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile {

	private $tableName;

	public function __construct()
	{
		$this->tableName = "profile";		
	}

    public function create()
    {

    }

    public function insert()
    {
    	
    }

    public function update()
    {
    	
    }

    public function getProfile()
    {
    	$CI = &get_instance();
    	/* select * limit 1 */
		$query = $CI->db->get($this->tableName, 1);

		if ($query->num_rows() > 0)
		{
			return $query->result()[0];
		}

		else
		{
			echo "LIBRARY(Profile) FUNCTION(getProfile) EXPLANATION: No result returned!";
			return null;
		}
    }

    public function getAll()
    {
    	$CI = &get_instance();
    	/* select * limit 1 */
		$query = $CI->db->get($this->tableName);

		if ($query->num_rows() > 0)
		{
			return $query->result()[0];
		}

		else
		{
			echo "LIBRARY(Profile) FUNCTION(getAll) EXPLANATION: No result returned!";
			return null;
		}
    }

    public function getOne($column)
    {
    	$CI = &get_instance();
    	$CI->db->select($column);
		$CI->db->from($this->tableName);
		$CI->db->limit(1);
		
		$query = $CI->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		else
		{
			echo "LIBRARY(Profile) FUNCTION(getOne) PARAM(". $info .") EXPLANATION: No result returned!";
			return null;
		}
    }
}
/* End of file Profile.php */
?>