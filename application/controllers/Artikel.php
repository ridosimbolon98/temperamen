<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Artikel extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');		
		$this->load->model('m_data');
	}
 
	function artikel(){
		$this->load->database();	
		$data['artikel'] = $this->m_data->ambil_data()->result();
		$data['writer'] = "Rido C Martupa Simbolon";
		$data['judul'] = "Temperamen";
		$this->load->view('artikel/v_artikel',$data);
	}
 
}