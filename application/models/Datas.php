<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datas extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function find_all_by_url($url) {
		$this->db->select('*, templates.name as temp_name');
        $this->db->from('datas');
        $this->db->join('pages', 'pages.page_id = datas.page_id');
		$this->db->join('templates', 'templates.template_id = datas.template_id', 'left');
        $this->db->where('pages.url', $url);
		$query = $this->db->get();
		return $query->result();
	}
	
}
