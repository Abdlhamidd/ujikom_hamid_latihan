<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Segitiga extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_segitiga');
		$this->load->view('template/footer');
	}
}
