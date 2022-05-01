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
}
