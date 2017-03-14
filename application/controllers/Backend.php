<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("pages");
	}

	public function index() {
		$this->load->view('backend/login_view');
	}

	public function dashboard() {
		$this->load->view('backend/inc/header');
		$this->load->view('backend/dashboard_view');
		$this->load->view('backend/inc/footer');
	}

	public function ajustes() {
		$data = array(
			'pages' => $this->pages->find_all()
			);
		$this->load->view('backend/inc/header');
		$this->load->view('backend/settings_view', $data);
		$this->load->view('backend/inc/footer');
	}

	public function paginas($page = "") {
		if($page != "") {
			$this->load->view('backend/inc/header');
			$this->load->view('backend/page_view');
			$this->load->view('backend/inc/footer');
		} else {
			echo "error";
		}
		
	}
	
}
