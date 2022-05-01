<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->library('upload');
		$this->load->helper(array('url','form'));
	}

    public function index()
    {
        $var['title'] = 'Antrian';
        $this->load->view('admin/antrian', $var);
    }
}