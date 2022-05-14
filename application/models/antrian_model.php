<?php

class antrian_model extends CI_Model
{

    private $poli = 'poli';
    private $table = 'pendaftaran';

    public function get_poli()
    {
        return $this->db->get($this->poli)->result();
    }

    public function get_pendaftaran()
    {
        $date = date('Y-m-d');
        $nik = $this->session->userdata('nik');
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('tgl_pendaftaran', $date);
        $this->db->where('nik_users', $nik);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->row();
    }

    function max_klinik_anak()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '1' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_anesthesi()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '2' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_bedahortopedhi()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '3' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_bedahumum()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '4' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_bedahsyaraf()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '5' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_fnab()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '6' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_gigimulut()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '7' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_gizi()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '8' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_jantung()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '9' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_jiwa()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '10' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_kulitkelamin()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '11' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_mata()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '12' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_obgyn()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '13' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_paru()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '14' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_penyakitdalam()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '15' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_psikologi()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '16' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_rehabmedik()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '17' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_spesialisgigimulut()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '18' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_syaraf()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '19' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_tht()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '20' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_urologi()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '21' order by no_antrian desc limit 1")->row();
    }

    function max_klinik_vct()
    {
        $date = date('Y-m-d');
        return $this->db->query("SELECT max(no_antrian) as maxs FROM pendaftaran WHERE tgl_pendaftaran = '$date' AND id_poli = '22' order by no_antrian desc limit 1")->row();
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
        $this->db->from('pendaftaran');
        $this->db->select('pendaftaran.*, poli.poli');
        $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
        $this->db->where('nik_users', $nik);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function get_detail_riwayat($id)
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('users', 'pendaftaran.nik_users = users.nik');
        $this->db->join('poli', 'pendaftaran.id_poli = poli.id');
        $this->db->where('pendaftaran.id', $id);
        return $this->db->get()->row();
    }

    public function sisa_antrian($id_poli)
    {
        $date = date('Y-m-d');
        // $nik = $this->session->userdata('nik');
        // $this->db->where('nik_users', $nik);
        $this->db->where('status', 1);
        $this->db->where('id_poli', $id_poli);
        $this->db->where('tgl_pendaftaran', $date);
        return $this->db->count_all_results('pendaftaran');
    }

    public function no_antrian()
    {
        $date = date('Y-m-d');
        $nik = $this->session->userdata('nik');
        $this->db->select('no_antrian');
        $this->db->where('nik_users', $nik);
        $this->db->where('tgl_pendaftaran', $date);
        $this->db->where('status', 1);
        return $this->db->get('pendaftaran')->row();
    }

    public function sisa_antrian2($id_poli)
    {
        $date = date('Y-m-d');
        // $nik = $this->session->userdata('nik');
        // $this->db->where('nik_users', $nik);
        $this->db->where('status', 2);
        $this->db->where('id_poli', $id_poli);
        $this->db->where('tgl_pendaftaran', $date);
        return $this->db->count_all_results('pendaftaran');
    }
}
