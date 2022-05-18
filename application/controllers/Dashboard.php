<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('url', 'form'));
		$this->load->model('artikel_model', 'm_artikel');
	}

	public function index()
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
		$data['jam_kerja'] = $this->db->get_where('kondisi', ['id' => 1])->row();
		$this->load->view('admin/dashboard', $data);
	}
	
	public function ubah_jamkerja()
	{
		$this->m_artikel->ubah_jamkerja();
		redirect('Dashboard');
	}

	public function konfirmasi_user()
	{
		$data['users'] = $this->m_artikel->get_user();
		$this->load->view('admin/konfirmasi_user', $data);
	}

	public function user_terkonfirmasi()
	{
		$data['users'] = $this->m_artikel->get_user2();
		$data['users2'] = $this->m_artikel->get_user2();
		$this->load->view('admin/user_terkonfirmasi', $data);
	}

	public function konfirmasi($nik)
	{
		$this->m_artikel->konfirmasi_user($nik);
		$this->session->set_flashdata('konfirmasiuser', true);
		redirect('Dashboard/user_terkonfirmasi');
	}

	public function add_norm()
	{
		$this->m_artikel->add_norm();
		$this->session->set_flashdata('addnorm', true);
		redirect('Dashboard/user_terkonfirmasi');
	}

	public function pendaftaran_user()
	{
		$data['daftar'] = $this->m_artikel->get_pendaftaran();
		$this->load->view('admin/antrian', $data);
	}

	public function konfirmasi_selesai($id)
	{
		$this->m_artikel->konfirmasi_selesai($id);
		$this->session->set_flashdata('konfirmasiselesai', true);
		redirect('Dashboard/pendaftaran_user');
	}

	public function antrian_selesai()
	{
		$data['daftar'] = $this->m_artikel->get_pendaftaran2();
		$this->load->view('admin/antrian_selesai', $data);
	}

	public function coba()
	{
		$data = $this->m_artikel->antri_klinik_anak();
		var_dump($data);
	}
}
