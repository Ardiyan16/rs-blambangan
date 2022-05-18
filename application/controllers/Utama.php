<?php

class Utama extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('url', 'form'));
	}

	function index()
	{
		$this->load->view("utama_view");
	}


	public function artikel()
	{
		$data['artikel'] = $this->db->query('SELECT * FROM artikel')->result();
		$this->load->view("artikel_view", $data);
	}

	public function detail_artikel()
	{
		$id = $this->uri->segment(3);
		$data['detail'] = $this->db->query("SELECT * FROM artikel WHERE id='$id'")->result();
		$this->load->view("detail_artikel", $data);
	}

	public function rawat_jalan(){
		$this->load->view("rawatjalan_view");
	}
	public function rawat_inap(){
		$this->load->view("rawatinap_view");
	}
	public function instalasi_penunjang(){
		$this->load->view("instalasi_penunjang");
	}
	public function medhical_check_up(){
		$this->load->view("medhical_check_up");
	}
	public function emergency(){
		$this->load->view("emergency");
	}
	public function info(){
		$this->load->view("info_view");
	}
	public function waktu_layanan(){
		$this->load->view("waktu_layanan");
	}
	public function dokter(){
		$this->load->view("dokter");
	}

}
