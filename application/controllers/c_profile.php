<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Profile extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_profile');
		$this->load->library('header');
		$this->load->library('utility');
	}
	
	public function index()
	{
		$data = $this->header->getMenuStaticData();
		$data["educationArray"] = $this->m_profile->getEducationAll();
		$data["socialNetworkArray"] = $this->m_profile->getSocialNetworkAll();
		$data["projectArray"] = $this->m_profile->getProjectAll();
		$data["profileArray"] = $this->m_profile->getProfileAll();

		//$this->utility->printArray($data);
			
		$this->load->view('templates/header', $data);
		$this->load->view('pages/v_profile', $data);
		$this->load->view('templates/footer');
	}
}