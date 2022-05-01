<?php

class model_kategori extends CI_Model {
	

	
	function insertkategori($kategori)
    {
		$data = array(
        'namakategori' => $kategori
	);

	$this->db->insert('kategori', $data);
    }
	
	function selectkategori()
    {
		$query = $this->db->get('kategori');
		$data= $query->result_array() ;
		return $data;
    }
	
	
}
