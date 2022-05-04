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

		$this->load->view('admin/dashboard');
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
