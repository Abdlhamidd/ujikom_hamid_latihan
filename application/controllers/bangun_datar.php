<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bangun_datar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Bangun_datar');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_bangun_datar');
		$this->load->view('template/footer');
	}

	public function lingkaran()
	{
		$jari = $this->input->post('jari');
		$luas = 3.14 * $jari * $jari;
		$dataa = $this->db->query("SELECT * FROM bangun_datar WHERE nm_bangundatar = 'lingkaran'")->row_array();
		$lingkaran = $dataa['hasil'];
		$id = $dataa['id'];
		$qty = $lingkaran + 1;
		$this->M_Bangun_datar->UpdateDatal($qty,$id);
		$data['jari'] = $jari;
		$data['luas'] = 'Luas Lingkaran          : '.$luas;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('v_bangun_datarl');
		$this->load->view('template/footer');
	}
	
	
	public function segitiga()
	{
		$alas = $this->input->post('alas'); //menangkap data dari view
		$tinggi = $this->input->post('tinggi'); //menangkap data dari view
		$luas =$alas * $tinggi / 2; //rumus menghitung luas segitiga
		$dataa = $this->db->query("SELECT * FROM bangun_datar WHERE nm_bangundatar = 'segitiga'")->row_array(); //mengambil data dari database
		$segitiga = $dataa['hasil']; //menyimpan data dari database dan mengubahnya menjadi array
		$id = $dataa['id']; //menyimpan data dari database dan mengubahnya menjadi array
		$qty = $segitiga + 1; //menambahkan data yang sudah di ambil dari database
		$this->M_Bangun_datar->UpdateDatas($qty,$id); 
		$data['alas'] = $alas; 
		$data['tinggi'] = $tinggi; 
		$data['luas'] = 'Luas segitiga              : '.$luas; //menampilkan data ke view
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('v_bangun_datars');
		$this->load->view('template/footer');
	}


	public function persegi()
	{
		$sisi = $this->input->post('sisi');
		$luas = $sisi * $sisi;
		$dataa = $this->db->query("SELECT * FROM bangun_datar WHERE nm_bangundatar = 'persegi'")->row_array();
		$persegi = $dataa['hasil'];
		$id = $dataa['id'];
		$qty = $persegi + 1;
		$this->M_Bangun_datar->UpdateDatal($qty,$id);
		$data['sisi'] = $sisi;
		$data['luas'] = 'Luas persegi            : '.$luas;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('v_bangun_datarp');
		$this->load->view('template/footer');
	}
}
