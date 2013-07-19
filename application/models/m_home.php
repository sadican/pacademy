<?php

Class M_Home Extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dictionary');
	}
	
	public function getUserProfile()
	{
		$data['user_name'] = $this->dictionary->getSingleInfo('user_name')->dict_value;
		$data['user_surname'] = $this->dictionary->getSingleInfo('user_surname')->dict_value;
		$data['user_position'] = $this->dictionary->getSingleInfo('user_position')->dict_value;
		$data['user_department'] = $this->dictionary->getSingleInfo('user_department')->dict_value;
		$data['user_mail'] = $this->dictionary->getSingleInfo('user_mail')->dict_value;
		$data['user_work_address'] = $this->dictionary->getSingleInfo('user_work_address')->dict_value;
		$data['user_work_phone'] = $this->dictionary->getSingleInfo('user_work_phone')->dict_value;
		$data['user_work_room'] = $this->dictionary->getSingleInfo('user_work_room')->dict_value;
		$data['user_work_location'] = $this->dictionary->getSingleInfo('user_work_location')->dict_value;
		$data['user_university'] = $this->dictionary->getSingleInfo('user_university')->dict_value;
		$data['user_research_areas'] = $this->dictionary->getSingleInfo('user_research_areas')->dict_value;
		$data['user_education'] = $this->dictionary->getSingleInfo('user_education')->dict_value;
		$data['user_quote'] = $this->dictionary->getSingleInfo('user_quote')->dict_value;
		
		return $data;
	}

}
?>