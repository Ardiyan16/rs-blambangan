<?php
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model('antrian_model', 'm_antrian');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('users/home', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $this->load->view('users/profile', $data);
    }

    public function pendaftaran()
    {
        $data['title'] = 'Pendaftaran';
        // $data = $this->m_antrian->max_daftar();
        // if($data != null) {
        //     $json = $data->maxs;
        // } else {
        //     $json = '0';
        // }
        // var_dump($data['maxs']);
        // $data['no_antri'] = $json;
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran', $data);
    }

    public function save_pendaftaran()
    {
        $this->m_antrian->save_pendaftaran();
        $this->session->set_flashdata('insert', true);
        redirect('Users/konfirmasi');
    }

    public function konfirmasi()
    {
        $nik = $this->session->userdata('nik');
        $data['title'] = 'konfirmasi';
        $data['no_antrian'] = $this->m_antrian->get_konfirmasi($nik);
        $this->load->view('users/konfirmasi', $data);
    }

    public function max_pendaftaran()
    {
        $data = $this->m_antrian->max_daftar();
        // // var_dump($data);
        // if($data == null) {
        //     $json['maxs'] = $data->maxs;
        // } else {
        //     $json['maxs'] = '0';
        // }
        echo json_encode($data);
    }

    public function ambil_antrian()
    {
        $this->m_antrian->ambil_antrian();
    }

    public function riwayat()
    {
        $nik = $this->session->userdata('nik');
        $data['title'] = 'Riwayat';
        $data['riwayat'] = $this->m_antrian->get_riwayat($nik);
        // var_dump($data['riwayat']);
        $this->load->view('users/riwayat', $data);
    }

    public function detail_riwayat($id)
    {
        // $no_rm = $this->session->userdata('no_rm');
        $data['title'] = 'Riwayat';
        $data['detail'] = $this->db->get_where('pendaftaran', ['id' => $id])->row_array();
        // var_dump($data['riwayat']);
        $this->load->view('users/detail_riwayat', $data);
    }

    public function coba()
    {
        $data['detail'] = $this->db->get_where('pendaftaran', ['id' => 3])->row();;
        var_dump($data['detail']);
    }
}
