<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->library('upload');
		$this->load->helper(array('url','form'));
	}
	public function index()
	{
		$this->load->model('model_kategori');
		$data['kategori']= $this->db->query('SELECT * FROM kategori')->result();
		$this->load->view('admin/kategori',$data);
	}
	
	public function tambahkategori(){
		$kategori = $this->input->post('nama');
		$data = [
			'nama' => $kategori
		];
		$this->db->insert('kategori', $data);
		redirect('Kategori');
	}
	public function hapusartikel(){
		$id = $this->uri->segment(3);
		$this->db->query("DELETE FROM `kategori` WHERE id='$id'");
		redirect('Kategori');
	}
}
