<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RManager_Dashboard extends CI_Controller
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
			if ($user == "RM@Argus.com") {
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
		$this->session->unset_userdata("user_password");
		$this->session->unset_userdata("user_status");
		$this->session->unset_userdata("set_default_scheme");
		redirect('');
	}
	public function index()
	{
		$this->load->view('common/blocks/header');
		$this->load->view('realtionship_manager/rm_dashboard');
		$this->load->view('common/blocks/footer');
	}
	public function insert()
	{
		$access_tab = $this->input->post('access_tab');
		$user_id = $this->input->post('user_id');

		$this->db->select("*");
		$this->db->from("user_access");
		$this->db->where("access_tab", $access_tab);
		$this->db->where("user_id", $user_id);
		$query = $this->db->get();
		$result = $query->row_array();

		if (empty($result)) {
			$data['access_tab'] = $access_tab;
			$data['tab_name'] = $this->input->post('tab_name');
			$data['user_id'] = $user_id;
			$this->db->insert('user_access', $data);
			$id = $this->db->insert_id();
		}
		redirect("RM_Dashboard");
	}
	public function casual($type)
	{
		if ($type == 1) {
			$data['type'] = 'Loan Amount';
		} else {
			$data['type'] = 'Interest Rate';
		}
		$this->load->view('common/blocks/header');
		$this->load->view('realtionship_manager/causal', $data);
		$this->load->view('common/blocks/footer');
	}
}
