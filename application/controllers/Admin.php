<?php

class Admin extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('url', 'form'));
		$this->load->model('artikel_model', 'm_artikel');
	}

	function index()
	{
		$data['klinik_anak'] = $this->m_artikel->antri_klinik_anak();
		$data['klinik_anesthesi'] = $this->m_artikel->antri_klinik_anesthesi();
		$data['klinik_bedah_ortopedhi'] = $this->m_artikel->antri_klinik_bedahortopedhi();
		$data['klinik_bedah_syaraf'] = $this->m_artikel->antri_klinik_bedahsyaraf();
		$data['klinik_bedah_umum'] = $this->m_artikel->antri_klinik_bedahumum();
		$this->load->view("admin_view", $data);
	}
}
