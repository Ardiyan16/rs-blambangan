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
		$data['klinik_bedah_umum'] = $this->m_artikel->antri_klinik_bedahumum();
		$data['klinik_bedah_syaraf'] = $this->m_artikel->antri_klinik_bedahsyaraf();
		$data['klinik_fnab'] = $this->m_artikel->antri_klinik_fnab();
		$data['klinik_gigi_mulut'] = $this->m_artikel->antri_klinik_gigimulut();
		$data['klinik_gizi'] = $this->m_artikel->antri_klinik_gizi();
		$data['klinik_jantung'] = $this->m_artikel->antri_klinik_jantung();
		$data['klinik_jiwa'] = $this->m_artikel->antri_klinik_jiwa();
		$data['klinik_kulit_kelamin'] = $this->m_artikel->antri_klinik_kulitkelamin();
		$data['klinik_mata'] = $this->m_artikel->antri_klinik_mata();
		$data['klinik_obgyn'] = $this->m_artikel->antri_klinik_obgyn();
		$data['klinik_paru'] = $this->m_artikel->antri_klinik_paru();
		$data['klinik_penyakit_dalam'] = $this->m_artikel->antri_klinik_penyakitdalam();
		$data['klinik_psikologi'] = $this->m_artikel->antri_klinik_psikologi();
		$data['klinik_rehab_medik'] = $this->m_artikel->antri_klinik_rehabmedik();
		$data['klinik_spesialis_gigi_mulut'] = $this->m_artikel->antri_klinik_spesialisgigimulut();
		$data['klinik_syaraf'] = $this->m_artikel->antri_klinik_syaraf();
		$data['klinik_tht'] = $this->m_artikel->antri_klinik_tht();
		$data['klinik_urologi'] = $this->m_artikel->antri_klinik_urologi();
		$data['klinik_vct'] = $this->m_artikel->antri_klinik_vct();
		$this->load->view("admin_view", $data);
	}
}
