<?php 
 
class M_data_konsultasi extends CI_Model{
	function ambil_data_konsultasi(){
		return $this->db->get('konsultasi');
	}

	function tambah_data_konsultasi($data_konsultasi,$table){
		$this->db->insert($table,$data_konsultasi);
	}

	function ambil_data_pertanyaan(){
		return $this->db->get('pertanyaan');
	}

	function input_data_konsultasi($data_konsultasi,$table){
		$this->db->insert($table,$data_konsultasi);
	}

	function ambil_data($table,$where){
		return $this->db->get_where($table,$where);
	}

}