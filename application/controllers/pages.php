<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($page = 'v_home') {
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			show_404();
		} else if ($page === 'v_home') {
			$this -> load -> model('m_home');

			$data = $this -> m_home -> getUserProfile();

			$this -> load -> view('templates/header', $data);
			$this -> load -> view('pages/' . $page, $data);
			$this -> load -> view('templates/footer');
		} else {
			$this -> load -> model('dictionary');

			$data['user_name'] = $this -> dictionary -> getSingleInfo('user_name') -> dict_value;

			$this -> load -> view('templates/header', $data);
			$this -> load -> view('pages/' . $page, $data);
			$this -> load -> view('templates/footer');
		}
	}

	public function view($page = 'v_home') {
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			show_404();
		} else if ($page === 'v_home') {
			$this -> load -> model('m_home');

			$data = $this -> m_home -> getUserProfile();

			$this -> load -> view('templates/header', $data);
			$this -> load -> view('pages/' . $page, $data);
			$this -> load -> view('templates/footer');
		} else {
			$this -> load -> model('dictionary');

			$data['user_name'] = $this -> dictionary -> getSingleInfo('user_name') -> dict_value;

			$this -> load -> view('templates/header', $data);
			$this -> load -> view('pages/' . $page, $data);
			$this -> load -> view('templates/footer');
		}
	}

}
