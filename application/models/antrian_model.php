<?php

class antrian_model extends CI_Model
{

    private $poli = 'poli';
    private $table = 'pendaftaran';

    public function get_poli()
    {
        return $this->db->get($this->poli)->result();
    }

    function max_daftar()
    {
        $date = date('Y-m-d');
        // var_dump($date);
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' order by no_antrian desc limit 1")->row();
    }

    public function ambil_antrian()
    {
        $pendaftaran = $this->db->get('pendaftaran');

        if ($pendaftaran->num_rows() > 0) {
            $json['status']     = 1;
            foreach ($pendaftaran->result() as $b) {
                $json['datanya'][] = $b;
            }
            $json['jumlah_pendaftaran'] = count($pendaftaran->result());
        } else {
            $json['status']     = 0;
        }

        echo json_encode($json);
    }

    public function save_pendaftaran()
    {
        $post = $this->input->post();
        $this->nik_users = $post['nik_users'];
        $this->id_poli = $post['id_poli'];
        $this->tgl_pendaftaran = $post['tgl_pendaftaran'];
        $this->no_antrian = $post['no_antrian'];
        $this->status = 1;
        $this->db->insert($this->table, $this);
    }

    public function get_konfirmasi($nik)
    {
        $this->db->from('pendaftaran');
        $this->db->select('no_antrian');
        $this->db->where('nik_users', $nik);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->row();
    }

    public function get_riwayat($nik)
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
        $this->db->where('nik_users', $nik);
        return $this->db->get()->result();
    }

    // public function get_detail_riwayat($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('pendaftaran');
    //     $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
    //     $this->db->where('pendaftaran.id', $id);
    //     return $this->db->get()->row();
    // }
}
