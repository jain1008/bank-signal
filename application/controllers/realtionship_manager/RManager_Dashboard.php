<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RManager_Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata("user_type")) || $this->session->userdata("user_type") == 1)
		redirect("");       
       
       	$this->load->library("form_validation");
        $this->load->model("manager/Manager_Dashboard_model");
		
	}
	public function index()
	{
		$this->load->view('common/blocks/header');
		$this->load->view('realtionship_manager/rm_dashboard');
		$this->load->view('common/blocks/footer');
	}
	public function insert()
	{
		$datanew['user_name'] = '';
		$datanew['user_email'] = $this->input->post('user_email');
		$datanew['user_password'] = sha1($this->input->post('user_password'));
		$datanew['user_phone'] = 0;
		$datanew['user_type'] = 1;
		$this->db->insert('users', $datanew);
        $id = $this->db->insert_id();
        if ($id) {
        	redirect("RM_Dashboard");
        }
	}
}
