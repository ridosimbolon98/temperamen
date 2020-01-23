<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Konsultasi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data_konsultasi');
	}
 
	public function index(){		
		$data['judul'] = "Temperamen";
		$this->load->view('v_header',$data);
		$this->load->view('konsultasi/isi_dulu',$data);
		$this->load->view('v_footer',$data);
	}	

	public function tambah_konsultasi(){		
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$usia = $this->input->post('usia');

		$data_konsultasi = array(
			'nama' => $nama,
			'jk' => $jk,
			'usia' => $usia
		);

		$this->m_data_konsultasi->tambah_data_konsultasi($data_konsultasi,'konsultasi');
		redirect('index.php/konsultasi/pertanyaan');
	}

	public function pertanyaan(){	
		$data['pertanyaan'] = $this->m_data_konsultasi->ambil_data_pertanyaan()->result();	
		$data['judul'] = "Temperamen";
		$this->load->view('v_header',$data);
		$this->load->view('konsultasi/v_pertanyaan',$data);
		$this->load->view('v_footer',$data);
	}

	public function aksi_konsultasi(){
		$this->load->database();

		$id1 = $this->input->post('id1'); $id2 = $this->input->post('id2'); $id3 = $this->input->post('id3');
		$id4 = $this->input->post('id4'); $id5 = $this->input->post('id5'); $id6 = $this->input->post('id6');
		$id7 = $this->input->post('id7'); $id8 = $this->input->post('id8'); $id9 = $this->input->post('id9');
		$id10 = $this->input->post('id10'); $id11 = $this->input->post('id11'); $id12 = $this->input->post('id12');
		$id13 = $this->input->post('id13'); $id14 = $this->input->post('id14'); $id15 = $this->input->post('id15');
		$id16 = $this->input->post('id16'); $id17 = $this->input->post('id17'); $id18 = $this->input->post('id18');
		$id19 = $this->input->post('id19'); $id20 = $this->input->post('id20'); $id21 = $this->input->post('id21');
		$id22 = $this->input->post('id22'); $id23 = $this->input->post('id23'); $id24 = $this->input->post('id24');
		$id25 = $this->input->post('id25'); $id26 = $this->input->post('id26'); $id27 = $this->input->post('id27');
		$id28 = $this->input->post('id28'); $id29 = $this->input->post('id29'); $id30 = $this->input->post('id30');
		$id31 = $this->input->post('id31'); $id32 = $this->input->post('id32');	$id33 = $this->input->post('id33'); 
		$id34 = $this->input->post('id34'); $id35 = $this->input->post('id35'); $id36 = $this->input->post('id36'); 
		$id37 = $this->input->post('id37'); $id38 = $this->input->post('id38'); $id39 = $this->input->post('id39'); 
		$id40 = $this->input->post('id40'); 

		$jawaban1 = $this->input->post('jawaban1'); $jawaban2 = $this->input->post('jawaban2'); $jawaban3 = $this->input->post('jawaban3');
		$jawaban4 = $this->input->post('jawaban4'); $jawaban5 = $this->input->post('jawaban5'); $jawaban6 = $this->input->post('jawaban6');
		$jawaban7 = $this->input->post('jawaban7'); $jawaban8 = $this->input->post('jawaban8'); $jawaban9 = $this->input->post('jawaban9');
		$jawaban10 = $this->input->post('jawaban10'); $jawaban11 = $this->input->post('jawaban11'); $jawaban12 = $this->input->post('jawaban12');
		$jawaban13 = $this->input->post('jawaban13'); $jawaban14 = $this->input->post('jawaban14'); $jawaban15 = $this->input->post('jawaban15');
		$jawaban16 = $this->input->post('jawaban16'); $jawaban17 = $this->input->post('jawaban17'); $jawaban18 = $this->input->post('jawaban18');
		$jawaban19 = $this->input->post('jawaban19'); $jawaban20 = $this->input->post('jawaban20'); $jawaban21 = $this->input->post('jawaban21');
		$jawaban22 = $this->input->post('jawaban22'); $jawaban23 = $this->input->post('jawaban23'); $jawaban24 = $this->input->post('jawaban24');
		$jawaban25 = $this->input->post('jawaban25'); $jawaban26 = $this->input->post('jawaban26'); $jawaban27 = $this->input->post('jawaban27');
		$jawaban28 = $this->input->post('jawaban28'); $jawaban29 = $this->input->post('jawaban29'); $jawaban30 = $this->input->post('jawaban30');
		$jawaban31 = $this->input->post('jawaban31'); $jawaban32 = $this->input->post('jawaban32'); $jawaban33 = $this->input->post('jawaban33');
		$jawaban34 = $this->input->post('jawaban34'); $jawaban35 = $this->input->post('jawaban35'); $jawaban36 = $this->input->post('jawaban36');
		$jawaban37 = $this->input->post('jawaban37'); $jawaban38 = $this->input->post('jawaban38'); $jawaban39 = $this->input->post('jawaban39');
		$jawaban40 = $this->input->post('jawaban40');


		$sql = "INSERT INTO `jawaban` (`id`, `jawaban`, `kd_jawaban`) VALUES ('$id1', '$jawaban1', '$jawaban1'), ('$id2', '$jawaban2', '$jawaban2'), ('$id3', '$jawaban3', '$jawaban3'), ('$id4', '$jawaban4', '$jawaban4'), ('$id5', '$jawaban5', '$jawaban5'), ('$id6', '$jawaban6', '$jawaban6'), ('$id7', '$jawaban7', '$jawaban7'), ('$id8', '$jawaban8', '$jawaban8'), ('$id9', '$jawaban9', '$jawaban9'), ('$id10', '$jawaban10', '$jawaban10'), ('$id11', '$jawaban11', '$jawaban11'), ('$id12', '$jawaban12', '$jawaban12'), ('$id13', '$jawaban13', '$jawaban13'), ('$id14', '$jawaban14', '$jawaban14'), ('$id15', '$jawaban15', '$jawaban15'), ('$id16', '$jawaban16', '$jawaban16'), ('$id17', '$jawaban17', '$jawaban17'), ('$id18', '$jawaban18', '$jawaban18'), ('$id19', '$jawaban19', '$jawaban19'), ('$id20', '$jawaban20', '$jawaban20'), ('$id21', '$jawaban21', '$jawaban21'), ('$id22', '$jawaban22', '$jawaban22'), ('$id23', '$jawaban23', '$jawaban23'), ('$id24', '$jawaban24', '$jawaban24'), ('$id25', '$jawaban25', '$jawaban25'), ('$id26', '$jawaban26', '$jawaban26'), ('$id27', '$jawaban27', '$jawaban27'), ('$id28', '$jawaban28', '$jawaban28'), ('$id29', '$jawaban29', '$jawaban29'), ('$id30', '$jawaban30', '$jawaban30'), ('$id31', '$jawaban31', '$jawaban31'), ('$id32', '$jawaban32', '$jawaban32'), ('$id33', '$jawaban33', '$jawaban33'), ('$id34', '$jawaban34', '$jawaban34'), ('$id35', '$jawaban35', '$jawaban35'), ('$id36', '$jawaban36', '$jawaban36'), ('$id37', '$jawaban37', '$jawaban37'), ('$id38', '$jawaban38', '$jawaban38'), ('$id39', '$jawaban39', '$jawaban39'), ('$id40', '$jawaban40', '$jawaban40') ";

		$this->db->query($sql);

		redirect('index.php/konsultasi/hasil_konsultasi');
	}

	public function hasil_konsultasi(){
		$d1 = "SELECT * FROM `jawaban` WHERE `kd_jawaban` = 'a'";
		$d2 = "SELECT * FROM `jawaban` WHERE `kd_jawaban` = 'b'";
		$d3 = "SELECT * FROM `jawaban` WHERE `kd_jawaban` = 'c'";
		$d4 = "SELECT * FROM `jawaban` WHERE `kd_jawaban` = 'd'";

		$h1 = $this->db->query($d1)->num_rows();
		$h2 = $this->db->query($d2)->num_rows();
		$h3 = $this->db->query($d3)->num_rows();
		$h4 = $this->db->query($d4)->num_rows();

		$dt  = array($h1,$h2,$h3,$h4);
		$n = count($dt);
		for ($i=0; $i < $n; $i++) { 
			for ($k = $n-1; $k>$i; $k--){
				if ($dt[$k] < $dt[$k-1]){
					$temp=$dt[$k];
			        $dt[$k]=$dt[$k-1];
			        $dt[$k-1]=$temp;
				}
			}
		}

		if ($dt[3] == $h1){
			$data['hasil'] = "Sanguinis";
		} else if ($dt[3] == $h2){
			$data['hasil'] = "Koleris";
		} else if ($dt[3] == $h3){
			$data['hasil'] = "Melankolis";
		} else if ($dt[3] == $h4){
			$data['hasil'] = "Phlegmatis";
		}

		if ($data['hasil'] == "Sanguinis"){
			$data['judul'] = "Temperamen";
			$this->load->view('v_header',$data);
			$this->load->view('konsultasi/v_jawaban_sanguinis',$data);
			$this->load->view('v_footer',$data);
		} else if ($data['hasil'] == "Koleris"){
			$data['judul'] = "Temperamen";
			$this->load->view('v_header',$data);
			$this->load->view('konsultasi/v_jawaban_koleris',$data);
			$this->load->view('v_footer',$data);
		} else if ($data['hasil'] == "Melankolis"){
			$data['judul'] = "Temperamen";
			$this->load->view('v_header',$data);
			$this->load->view('konsultasi/v_jawaban_melankolis',$data);
			$this->load->view('v_footer',$data);
		} else if ($data['hasil'] == "Phlegmatis"){
			$data['judul'] = "Temperamen";
			$this->load->view('v_header',$data);
			$this->load->view('konsultasi/v_jawaban_phlegmatis',$data);
			$this->load->view('v_footer',$data);
		}
		
	}

	public function simpan_data_konsultasi(){
		$temperamen = $this->input->post('hasil');

		$data_nama = $this->input->post('nama');
		$data_jk = $this->input->post('jk');
		$data_usia = $this->input->post('usia');

		$simpan = "INSERT INTO `hasil`(`id`, `nama`, `jk`, `usia`, `temperamen`) VALUES('$data_id', '$data_nama', '$data_jk', '$data_usia', '$temperamen')";
		$this->db->query($simpan);

		$sql_hapus = "DELETE FROM `jawaban`";
		$this->db->query($sql_hapus);
		$sql_hapus2 = "DELETE FROM `konsultasi`";
		$this->db->query($sql_hapus2);

		redirect('index.php/konsultasi');
	}


 
}

