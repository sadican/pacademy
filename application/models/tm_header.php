<?php

Class Tm_header Extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('profile');
	}
	
	public function getStaticHeaderData()
	{
		$data['header_user_name'] = $this->profile->getOne('user_name')->dict_value;
		
		return $data;		
	}
}
?>