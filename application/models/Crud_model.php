<?php

class Crud_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getUsers() {
		$select = $this->db->get('users');
		return $select->row_array();
//		$select = $this->db->get_where('users',array('ban' => $ban));
	}
}
