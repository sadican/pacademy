<?php

Class M_Home Extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('profile');
		$this->load->library('dictionary');
		$this->load->library('utility');
	}
	
	public function getUserProfileInformation()
	{
		$data['current_education'] = $this->dictionary->getEntry('current_education');
		$data['fav_quote'] = $this->dictionary->getEntry('fav_quote');
		/* get profile information and append it to data array */
		$data = $this->utility->appendToData($this->profile->getProfile(), $data);

		return $data;
	}
}
?>