<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('url'));

	}
 
	public function index(){
		// $this->session->sess_destroy();
		$this->session->unset_userdata('no_rm');
    	$this->session->unset_userdata('alamat');
    	$this->session->unset_userdata('tgl_lahir');
    	$this->session->set_flashdata('logout', true);
		redirect('Login/login_user');
	}
	
}
?>
