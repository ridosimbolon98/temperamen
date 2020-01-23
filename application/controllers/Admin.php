<?php

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');		
		$this->load->model('m_data');
		
		if ($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/login'));
		}
	}

	function index(){
		$data['artikel'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/v_tampil',$data);
		$this->load->view('v_footer',$data);
	}

}