<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header("Cache-Control: no-store,no-cache, must-revalidate");

		$this->load->library("form_validation");
		$this->load->model("Login_model");
	}
	public function index()
	{
		if (!empty($this->session->userdata("user_type"))) {
			if ($this->session->userdata("user_type") == 1) {
				redirect("Manager_Dashboard?cgf=" . base64_encode($this->session->userdata('user_email')));
			}
			if ($this->session->userdata("user_type") == 2) {
				redirect("RM_Dashboard?cgf=" . base64_encode($this->session->userdata('user_email')));
			}
		} else {
			$url = parse_url($_SERVER['REQUEST_URI']);
			if (isset($url['query'])) {
				parse_str($url['query'], $params);
				$user = base64_decode($params['cgf']);
				if ($user == "RM@Argus.com") {
					redirect("RM_Dashboard");
				}
			} else {
				$data 					=	array();
				$data 					=	$this->session->flashdata("loginForm");
				$this->load->view('index');
			}
		}
	}

	public function doLogin()
	{
		$data	= array();
		$config	= array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules'	=> 'trim|required'
			),
			array(
				'field' => 'password',
				'label' => 'password',
				'rules'	=> 'trim|required'
			)
		);
		$this->form_validation->set_rules($config);
		$fields	= array("email", "password");


		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata("errors", validation_errors());
			unset($data['password']);
			$this->session->set_flashdata('loginForm', $data);
			redirect('');
		} else {
			$email = $data['email'];
			$checkmail     = $this->Login_model->checkmail($email);
			if (!empty($checkmail['user_email'])) {
				$row = $this->Login_model->loginData($data);
				if ($row) // Data is in row set session
				{
					$this->session->set_userdata($row);

					redirect('');
				} else {

					$this->session->set_flashdata("errors", 'Invalid Password...!');
					unset($data['password']);
					$this->session->set_flashdata('loginForm', $data);
					redirect('');
				}
			} else {

				$this->session->set_flashdata("errors", 'Invalid Email Id...!');
				$this->session->set_flashdata('loginForm', $data);
				redirect('');
			}
		}
	}
	public function logout()
	{

		//$this->session->sess_destroy();
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_email");
		$this->session->unset_userdata("user_type");
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_phone");
		$this->session->unset_userdata("set_default_scheme");
		redirect('');
	}
}
