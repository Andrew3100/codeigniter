<?php

class Crud_select extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function getUsers($ban = 0) {
		if ($ban = 0) {
			$select = $this->db->get('users');
		}
		$select = $this->db->get_where('users',array('ban' => $ban));
	}
}
