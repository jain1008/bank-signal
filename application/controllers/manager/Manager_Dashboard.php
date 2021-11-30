<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager_Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Login_model");
		$url = parse_url($_SERVER['REQUEST_URI']);		
		if (isset($url['query'])) {
			parse_str($url['query'], $params);
			$user = base64_decode($params['cgf']);
		}		
		if (isset($user)) {
			if ($user == "Analyst@Bank.com" || $user == "Exec@Bank.com") {
				$data = ["email" => $user, "password" => 123];
				$row = $this->Login_model->loginData($data);
				if ($row) // Data is in row set session
				{
					$this->session->set_userdata($row);
				} else {
					redirect('');
				}
			} else {
				$this->unsetData();
			}
		} else if (empty($this->session->userdata("user_type"))) {

			$this->unsetData();
		}
		
	}
	private function unsetData()
	{
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_email");
		$this->session->unset_userdata("user_type");
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_phone");
		$this->session->unset_userdata("set_default_scheme");
		redirect('');
	}
	public function index()
	{
		$this->load->view('common/blocks/header');
		$this->load->view('manager/User_Dashboard');
		$this->load->view('common/blocks/footer');
	}
	public function access()
	{
		$this->load->view('common/blocks/header');
		$this->load->view('realtionship_manager/rm_dashboard');
		$this->load->view('common/blocks/footer');
	}
}
