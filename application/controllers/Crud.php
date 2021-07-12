<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Crud_Model');
	}

	public function index() {
		$data['tittle'] = "CodeiGniter";
		$data['Crud_Model'] = $this->Crud_Model->getUsers();
		$this->load->helper('form');

		$this->load->view('templates/header',$data);
		$this->load->view('crud/index.php',$data);
		$this->load->view('templates/footer',$data);
	}

	public function vie() {
		$data['tittle'] = "CodeiGniter";
		$this->load->view('templates/header',$data);
		$this->load->view('crud/vie.php',$data);
		$this->load->view('templates/footer',$data);
	}

}


class bootstrap {
	public function ech() {
		echo 'Класс загружен';
	}
}
