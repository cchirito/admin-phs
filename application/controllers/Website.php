<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("pages");
        $this->load->model("datas");
	}

	public function index($page = "inicio") {
        if($this->pages->find_by_url($page)):
            $data = array(
                'pages' => $this->pages->find_all(),
                'page' => $this->pages->find_by_url($page),
                'datas' => $this->datas->find_all_by_url($page)
            );
            $this->load->view('frontend/inc/header', $data);
            $this->load->view('frontend/page_view');
            $this->load->view('frontend/inc/footer');
        else:
            echo "404";
        endif;
	}
	
}
