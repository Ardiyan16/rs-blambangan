<?php

class artikel_model extends CI_Model
{

  private $users = 'users';

  function insertartikel($judul, $tanggal, $penulis, $isi)
  {
    $data = array(
      'judul_artikel' => $judul,
      'tanggal' => $tanggal,
      'nama_penulis' => $penulis,
      'isi' => $isi
    );

    $this->db->insert('artikel', $data);
  }

  function selectartikel()
  {
    $query = $this->db->get('artikel');
    $data = $query->result_array();
    return $data;
  }

  public function get_user()
  {
    return $this->db->get_where('users', ['status' => 0])->result();
  }

  public function get_user2()
  {
    return $this->db->get_where('users', ['status' => 1])->result();
  }

  public function konfirmasi_user($nik)
  {
    $this->db->query("UPDATE `users` SET `status` = '1' WHERE `users`.`nik` = $nik");
  }

  public function add_norm()
  {
    $post = $this->input->post();
    $this->nik = $post['nik'];
    $this->no_rm = $post['no_rm'];
    $this->db->update($this->users, $this, ['nik' => $post['nik']]);
  }

  public function get_pendaftaran()
  {
    $this->db->select('pendaftaran.*, users.*, poli.poli');
    $this->db->from('pendaftaran');
    $this->db->join('users', 'pendaftaran.nik_users = users.nik');
    $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
    $this->db->where('pendaftaran.status', 1);
    $this->db->order_by('pendaftaran.id', 'desc');
    return $this->db->get()->result();
  }

  public function get_pendaftaran2()
  {
    $this->db->select('*');
    $this->db->from('pendaftaran');
    $this->db->join('users', 'pendaftaran.nik_users = users.nik');
    $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
    $this->db->where('pendaftaran.status', 2);
    $this->db->order_by('pendaftaran.id', 'desc');
    return $this->db->get()->result();
  }

  public function konfirmasi_selesai($id)
  {
    $this->db->query("UPDATE `pendaftaran` SET `status` = '2' WHERE `pendaftaran`.`id` = $id");
  }
}
