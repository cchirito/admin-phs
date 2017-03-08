<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class States extends CI_Model {

	public $state_id;
	public $name;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function find_all() {
		$query = $this->db->get('states');
		return $query->result();
	}
	
}
