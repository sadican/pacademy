<?php

Class Tm_header Extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dictionary');
	}
	
	public function getStaticData()
	{
		$dataHeader['header_user_name'] = $this->dictionary->getSingleInfo('user_name')->dict_value;		
		return $dataHeader;		
	}
}
?>