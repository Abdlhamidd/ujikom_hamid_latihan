<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
	}
	public function index()
	{
		$data['title'] = 'Home';
		$data ['jumlah_semua'] = $this->M_Home->total_jumlah();
		$data ['jumlah_segitiga'] = $this->M_Home->total_segitiga();
		$data ['jumlah_persegi'] = $this->M_Home->total_persegi();
		$data ['jumlah_lingkaran'] = $this->M_Home->total_lingkaran();
		$total_semua = $data ['jumlah_semua'];
		$total_segitiga = $data ['jumlah_segitiga'];
		$total_persegi = $data ['jumlah_persegi'];
		$total_lingkaran = $data ['jumlah_lingkaran'];
		$data ['persentase_segitiga'] = ($total_segitiga/$total_semua)*100;
		$data ['persentase_persegi'] = ($total_persegi/$total_semua)*100;
		$data ['persentase_lingkaran'] = ($total_lingkaran/$total_semua)*100;
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('v_home');
		$this->load->view('template/footer');
	}
}
