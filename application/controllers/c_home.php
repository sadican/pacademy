<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function index()
	{		
		$this->main();
	}

	public function main()
	{
		$this->load->model("dictionary");
		
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
		
		//print($data['user_name']);
		
		$this->load->view('v_home', $data);		
	}
}