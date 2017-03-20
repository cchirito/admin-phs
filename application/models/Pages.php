<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function find_all() {
		$this->db->order_by('position', 'ASC');
		$query = $this->db->get('pages');
		return $query->result();
	}

	public function find_by_url($url) {
		$this->db->where('url', $url);
		$query = $this->db->get('pages');
		return $query->row();
	}

	public function add_page($page) {
		$this->db->insert('pages', $page);
		return true;
	}

	public function update_position($page) {
		$data = array(
			'position' => $page["position"]
			);
		$this->db->where('page_id', $page["page_id"]);
		$this->db->update('pages', $data); 
		return true;
	}

	public function update_page($page) {
		$data = array(
			'name' => $page["name"],
			'url' => $page["url"]
			);
		$this->db->where('page_id', $page["page_id"]);
		$this->db->update('pages', $data); 
		return true;
	}

	public function update_state($page) {
		$data = array(
			'state_id' => $page["state_id"]
		);

		$this->db->where('page_id', $page["page_id"]);
		$this->db->update('pages', $data); 
		return true;
	}
	
}
