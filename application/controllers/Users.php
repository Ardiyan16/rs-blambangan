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

    public function pendaftaran1()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran', $data);
    }

    public function pendaftaran2()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran2', $data);
    }

    public function pendaftaran3()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran3', $data);
    }

    public function pendaftaran4()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran4', $data);
    }

    public function pendaftaran5()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran5', $data);
    }

    public function pendaftaran6()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran6', $data);
    }

    public function pendaftaran7()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran7', $data);
    }

    public function pendaftaran8()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran8', $data);
    }

    public function pendaftaran9()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran9', $data);
    }

    public function pendaftaran10()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran10', $data);
    }

    public function pendaftaran11()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran11', $data);
    }

    public function pendaftaran12()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran12', $data);
    }

    public function pendaftaran13()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran13', $data);
    }

    public function pendaftaran14()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran14', $data);
    }

    public function pendaftaran15()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran15', $data);
    }

    public function pendaftaran16()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran16', $data);
    }

    public function pendaftaran17()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran17', $data);
    }

    public function pendaftaran18()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran18', $data);
    }

    public function pendaftaran19()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran19', $data);
    }

    public function pendaftaran20()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran20', $data);
    }

    public function pendaftaran21()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran21', $data);
    }

    public function pendaftaran22()
    {
        $data['title'] = 'Pendaftaran';
        $data['poli'] = $this->m_antrian->get_poli();
        $this->load->view('users/pendaftaran22', $data);
    }

    public function save_pendaftaran()
    {
        // $data = $this->m_antrian->get_pendaftaran();
        // // $nik = $this->input->post('nik_users');
        // // $tgl = $this->input->post('tgl_pendaftaran');
        // foreach ($data as $data) {
        //     if ($data->status == 1) {
        //         $this->session->set_flashdata('sudahdaftar', true);
        //         redirect('Users/pendaftaran');
        //     } 
            // elseif ($data->status == 2) {
                $this->m_antrian->save_pendaftaran();
                $this->session->set_flashdata('insert', true);
                redirect('Users/konfirmasi');
        //     }
        // }
    }

    public function konfirmasi()
    {
        $nik = $this->session->userdata('nik');
        $data['title'] = 'konfirmasi';
        $data['no_antrian'] = $this->m_antrian->get_konfirmasi($nik);
        $this->load->view('users/konfirmasi', $data);
    }

    public function postIdPoli()
    {
        // POST data
        $postData = $this->input->post();
        var_dump($postData);
        // $data = $this->m_antrian->max_daftar($postData)[0];

        // header('content-type:json/application');
        // echo json_encode($data);
    }

    public function max_klinik_anak()
    {
        $data = $this->m_antrian->max_klinik_anak();
        echo json_encode($data);
    }

    public function max_klinik_anesthesi()
    {
        $data = $this->m_antrian->max_klinik_anesthesi();
        echo json_encode($data);
    }

    public function max_klinik_bedahortopedhi()
    {
        $data = $this->m_antrian->max_klinik_bedahortopedhi();
        echo json_encode($data);
    }

    public function max_klinik_bedahumum()
    {
        $data = $this->m_antrian->max_klinik_bedahumum();
        echo json_encode($data);
    }

    public function max_klinik_bedahsyaraf()
    {
        $data = $this->m_antrian->max_klinik_bedahsyaraf();
        echo json_encode($data);
    }

    public function max_klinik_fnab()
    {
        $data = $this->m_antrian->max_klinik_fnab();
        echo json_encode($data);
    }

    public function max_klinik_gigimulut()
    {
        $data = $this->m_antrian->max_klinik_gigimulut();
        echo json_encode($data);
    }

    public function max_klinik_gizi()
    {
        $data = $this->m_antrian->max_klinik_gizi();
        echo json_encode($data);
    }

    public function max_klinik_jantung()
    {
        $data = $this->m_antrian->max_klinik_jantung();
        echo json_encode($data);
    }

    public function max_klinik_jiwa()
    {
        $data = $this->m_antrian->max_klinik_jiwa();
        echo json_encode($data);
    }

    public function max_klinik_kulitkelamin()
    {
        $data = $this->m_antrian->max_klinik_kulitkelamin();
        echo json_encode($data);
    }

    public function max_klinik_mata()
    {
        $data = $this->m_antrian->max_klinik_mata();
        echo json_encode($data);
    }

    public function max_klinik_obgyn()
    {
        $data = $this->m_antrian->max_klinik_obgyn();
        echo json_encode($data);
    }

    public function max_klinik_paru()
    {
        $data = $this->m_antrian->max_klinik_paru();
        echo json_encode($data);
    }

    public function max_klinik_penyakitdalam()
    {
        $data = $this->m_antrian->max_klinik_penyakitdalam();
        echo json_encode($data);
    }

    public function max_klinik_psikologi()
    {
        $data = $this->m_antrian->max_klinik_psikologi();
        echo json_encode($data);
    }

    public function max_klinik_rehabmedik()
    {
        $data = $this->m_antrian->max_klinik_rehabmedik();
        echo json_encode($data);
    }

    public function max_klinik_spesialisgigimulut()
    {
        $data = $this->m_antrian->max_klinik_spesialisgigimulut();
        echo json_encode($data);
    }

    public function max_klinik_syaraf()
    {
        $data = $this->m_antrian->max_klinik_syaraf();
        echo json_encode($data);
    }

    public function max_klinik_tht()
    {
        $data = $this->m_antrian->max_klinik_tht();
        echo json_encode($data);
    }

    public function max_klinik_urologi()
    {
        $data = $this->m_antrian->max_klinik_urologi();
        echo json_encode($data);
    }

    public function max_klinik_vct()
    {
        $data = $this->m_antrian->max_klinik_vct();
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

    public function pilih_klinik()
    {
        $data['title'] = 'Pilih Klinik';
        $this->load->view('users/pilih_klinik', $data);
    }

    public function coba()
    {
        
        $data = $this->m_antrian->max_daftar();
        var_dump($data['max_pendaftaran']);
    }
}
