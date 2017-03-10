<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function find_all() {
		$query = $this->db->get('pages');
		return $query->result();
	}
	
}
