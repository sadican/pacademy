<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}
	
	public function index()
	{
		$data = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/v_home', $data);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$data = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/v_home', $data);
		$this->load->view('templates/footer');
	}
}