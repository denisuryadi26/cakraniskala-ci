<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('datatables');
		$this->load->model('Dashboard_model');
		$this->load->model('komunitas/Getkomunitas_model');

		if ($this->session->userdata('aktif') != TRUE) {
			$this->session->set_flashdata('message', 'Harap login untuk melanjutkan');
			redirect('login');
		}
	}

	function index()
	{
		$data	= [
			'titles'	=> "Dashboard User",
			'komunitas'	=> $this->Getkomunitas_model->getKomunitas(),
			'home'		=> TRUE,
			'view'		=> "v_dashboard",
			'breadcumb'	=> "Dashboard"
		];
		$this->load->view("index", $data);
	}
}
