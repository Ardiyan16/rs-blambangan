<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->library('upload');
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		$this->load->model('artikel_model');
		$data['artikel']= $this->db->query('SELECT * FROM artikel')->result();
		$this->load->view('admin/artikel',$data);
	}
	
	public function tambahartikel()
	{
		$judul = $this->input->post('judul_artikel');
		$tanggal = $this->input->post('tanggal');
		$penulis = $this->input->post('nama_penulis');
		$isi = $this->input->post('isi');
		$gambar = $this->_uploadImage();
		$this->load->model('artikel_model');
		$data = [
			'judul' => $judul,
			'penulis' => $penulis,
			'tanggal' => $tanggal,
			'gambar' => $gambar,
			'isi' => $isi
		];
		$this->db->insert('artikel', $data);
		redirect('Artikel');
	}

	public function hapusartikel(){
		$id = $this->uri->segment(3);
		$this->db->query("DELETE FROM `artikel` WHERE id='$id'");
		redirect('Artikel');
	}
	private function _uploadImage()
    {
        $config['upload_path']          =  './assets/img';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['gambar']['name'];
        // 1MB
        // $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "camera.jpg";
	}
	
}
