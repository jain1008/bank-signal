<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata("user_type")) || $this->session->userdata("user_type") == 2)
		redirect("");
       
       	$this->load->library("form_validation");
        $this->load->model("manager/Manager_Dashboard_model");
		
	}
	public function index()
	{
		$this->load->view('common/blocks/header');
		$this->load->view('manager/Manager_Dashboard');
		$this->load->view('common/blocks/footer');
	}
}
