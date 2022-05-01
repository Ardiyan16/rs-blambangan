<?php 

class Blog_model extends CI_Model {

    public function selectArtikel()
    {
    	$data  = $this->db->get('artikel');
    	$dataarray =  $data ->result_array();
    	return $dataarray;
        }
}
