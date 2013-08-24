<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->library('utility');
		$this->load->library('header');	
	}
	
	public function index()
	{
		$dataContent = $this->m_home->getUserProfileInformation();
		/* get static header data and append it to data array */
		$data = $this->utility->appendToData($this->header->getMenuStaticData(), $dataContent);
		/* load views */
		$this->load->view('templates/header', $dataContent);
		$this->load->view('pages/v_home', $dataContent);
		$this->load->view('templates/footer');
	}
}