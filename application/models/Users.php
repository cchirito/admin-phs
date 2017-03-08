<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public $user_id;
	public $first_name;
	public $last_name;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function find_all() {
		$query = $this->db->get('users');
		return $query->result();
	}

	public function find_by_id($user_id) {
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function find_by_email($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function add_user($user) {
		$this->db->insert('users', $user); 
		return true;
	}

	public function update_user($user) {
		$this->db->where('user_id', $user["user_id"]);
		$this->db->update('users', $user); 
		return true;
	}

}
