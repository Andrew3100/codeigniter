<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
	}

	public function index() {
		$data['tittle'] = "Все новости";
		$data['crud'] = $this->crud_model->
		$this->load->view('templates/header',$data);
		$this->load->view('crud/index.php',$data);
		$this->load->view('templates/footer',$data);
	}

}

