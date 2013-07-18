<?php

Class Dictionary Extends CI_Model {
	
	function __construct()
	{
		/* parent classin constructorini yazmana gerek yok */
		$this->load->database();
	}
	
	function getAll()
	{
		/* kolonlari virgulle ayirarak yaziyorsun */
		$this->db->select("dict_key, dict_value");
		/* hangi tablodan aldigin */
		$this->db->from("dictionary");
		/* where kismi*/
		//$this->db->where('key =','name');
		/* sonuclari limitle */
		//$this->db->limit(2);
		/* sorguyu calistir */
		$query = $this->db->get();
		/* ekrana queryi bastir */
		//echo $this->db->last_query();
		/* sonucu goster */
		//print_r($query->result());
		/* sonucu dondur */
		//return $query->result();
		return $query->result_array();
	}
	
	function getSingleInfo($info)
	{
		$this->db->select("dict_value");
		$this->db->from("dictionary");
		$this->db->where('dict_key =', $info);
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		return $query->row();
	}
}
?>