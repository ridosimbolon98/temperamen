<?php

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$data['artikel'] = $this->m_data->ambil_data()->result();
		$data['judul'] = "Temperamen";
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/v_tampil',$data);
		$this->load->view('v_footer',$data);
	}

	function tambah(){
		$this->load->view('admin/v_input');
	}

	function tambah_aksi(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tag = $this->input->post('tag');
		$slug = $this->input->post('judul');

		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'tag' => $tag,
			'slug' => $slug,
		);

		$this->m_data->tambah_artikel($data,'artikel');
		redirect('index.php/crud/index');
		
	}

	function edit($id){
		$where = array('id' => $id);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$this->load->view('admin/v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tag = $this->input->post('tag');
		$slug = $this->input->post('judul');
	 
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'isi' => $isi,
			'tag' => $tag,
			'slug' => $slug
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_data->update_data($where,$data,'artikel');
		redirect('index.php/crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'artikel');
		redirect('index.php/crud/index');
	}
}