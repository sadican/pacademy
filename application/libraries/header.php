<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header {

	private $CI;// = &get_instance();
	private $tableDictionary = "dictionary";


	public function __construct()
	{
		$this->CI = &get_instance();
	}
	
	public function getMenuStaticData()
	{
		$data['menu_brand_name'] = $this->getEntry('header_name');
		$data['head_title_name'] = $data['menu_brand_name'];//$this->getEntry('header_name');
		return $data;
	}

	public function getEntry($info)
	{
		$this->CI->db->select("dict_value");
		$this->CI->db->from($this->tableDictionary);
		$this->CI->db->where('dict_key =', $info);
		$this->CI->db->limit(1);
		
		$query = $this->CI->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row()->dict_value;
		}
	}
}
?>