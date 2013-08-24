<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dictionary {
	
	private $tableName;
	private $CI;// = &get_instance();

	public function __construct()
	{
		$this->tableName = "dictionary";
		$this->CI = &get_instance();
	}
	
	public function getAll()
	{
		/* kolonlari virgulle ayirarak yaziyorsun */
		$this->CI->db->select("dict_key, dict_value");
		/* hangi tablodan aldigin */
		$this->CI->db->from($this->tableName);
		/* where kismi*/
		//$this->db->where('key =','name');
		/* sonuclari limitle */
		//$this->db->limit(2);
		/* sorguyu calistir */
		$query = $this->CI->db->get();
		/* ekrana queryi bastir */
		//echo $this->db->last_query();
		/* sonucu goster */
		//print_r($query->result());
		/* sonucu dondur */
		//return $query->result();
		return $query->result_array();
	}
	
	public function getEntry($info)
	{
		$this->CI->db->select("dict_value");
		$this->CI->db->from($this->tableName);
		$this->CI->db->where('dict_key =', $info);
		$this->CI->db->limit(1);
		
		$query = $this->CI->db->get();

		return $query->row()->dict_value;
	}
}
?>