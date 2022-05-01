<?php 

class Tag_model extends CI_Model {

    public function selectTag()
    {
    	$data  = $this->db->get('tag');
    	$dataarray =  $data ->result_array();
    	return $dataarray;
        }
}
