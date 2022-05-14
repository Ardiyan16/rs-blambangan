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

    public function save_pendaftaran1()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 1;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran1');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran2()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 2;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran2');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran3()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 3;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran3');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran4()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 4;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran4');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran5()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 5;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran5');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran6()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 6;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran6');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran7()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 7;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran7');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran8()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 8;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran8');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran9()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 9;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran9');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran10()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 10;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran10');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran11()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 11;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran11');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran12()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 12;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran12');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran13()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 13;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran13');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran14()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 14;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran14');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran15()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 15;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran15');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran16()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 16;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran16');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran17()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 17;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran17');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran18()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 18;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran18');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran19()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 19;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran19');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran20()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 20;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran20');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran21()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 21;
        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran21');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function save_pendaftaran22()
    {
        $data = $this->m_antrian->get_pendaftaran();
        $nik = $this->input->post('nik_users');
        $datapoli = 22;

        // $tgl = $this->input->post('tgl_pendaftaran');
        if ($data->status == "1") {
            $this->session->set_flashdata('sudahdaftar', true);
            redirect('Users/pendaftaran22');
        } else {
            $this->m_antrian->save_pendaftaran();
            $this->session->set_flashdata('insert', true);
            redirect('Users/konfirmasi/' . $datapoli);
        }
    }

    public function konfirmasi($datapoli)
    {
        // $id_poli = 2;
        $nik = $this->session->userdata('nik');
        $nama = $this->session->userdata('nama');
        $data['title'] = 'konfirmasi';
        $data['datapoli'] = $datapoli;
        $data['no_antrian'] = $this->m_antrian->get_konfirmasi($nik);
        $data['namapoli'] = $this->db->get_where('poli', ['id' => $datapoli])->row();
        $namapoli = $this->db->get_where('poli', ['id' => $datapoli])->row();
        $antrian = $this->m_antrian->get_konfirmasi($nik);
        $no_antri = $this->m_antrian->no_antrian();
        $data['sisa'] = $no_antri->no_antrian - $this->m_antrian->sisa_antrian2($datapoli) - 1;
        $sisanya = ($no_antri->no_antrian - $this->m_antrian->sisa_antrian2($datapoli) - 1) * 30;
        date_default_timezone_set('Asia/Jakarta');
        $data['waktu'] = strtotime(date("h:i"));
        $data['sisanya'] = $sisanya;
        if ($sisanya === 0) {
            $sisanya = 10;
        }
        $userkey = 'fa5793a42b9a';
        $passkey = 'd3bea3d15985f7ef232a4e9b';
        $telepon = $this->session->userdata('no_wa');
        $message = 'Sisa Antrian Atas Nama ' . $nama . ' pada ' . $namapoli->poli . ' dengan nomor antrian ' . $antrian->no_antrian . '. Antrian anda akan dilaksanakan kurang lebih ' . $sisanya . ' menit lagi';
        $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
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
        $data['detail'] = $this->m_antrian->get_detail_riwayat($id);
        $id_poli = $data['detail']->id_poli;
        // var_dump($data['detail']->status);

        $no_antri = $this->m_antrian->no_antrian();
        if ($data['detail']->status == 1) {
            $data['sisa'] = $no_antri->no_antrian - $this->m_antrian->sisa_antrian2($id_poli) - 1;
            $sisanya = ($no_antri->no_antrian - $this->m_antrian->sisa_antrian2($id_poli) - 1) * 30;
        } else {
            $data['sisa'] = 'anda selesai berobat';
            $sisanya = 'telah selesai';
        }
        $data['namapoli'] = $this->db->get_where('poli', ['id' => $id_poli])->row();
        date_default_timezone_set('Asia/Jakarta');
        $data['waktu'] = strtotime(date("h:i"));
        $data['sisanya'] = $sisanya;
        // 		$userkey = 'fa5793a42b9a';
        // $passkey = 'd3bea3d15985f7ef232a4e9b';
        // $telepon = '085156484672';
        // $message = 'Sisa Antrian Anda '.$sisanya.' menit';
        // $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
        // $curlHandle = curl_init();
        // curl_setopt($curlHandle, CURLOPT_URL, $url);
        // curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        // curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        // curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        // curl_setopt($curlHandle, CURLOPT_POST, 1);
        // curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
        //     'userkey' => $userkey,
        //     'passkey' => $passkey,
        //     'to' => $telepon,
        //     'message' => $message
        // ));
        // $results = json_decode(curl_exec($curlHandle), true);
        // curl_close($curlHandle);
        $this->load->view('users/detail_riwayat', $data);
    }

    public function coba_wa()
    {

        redirect('Users/riwayat');
    }

    public function pilih_klinik()
    {
        $data['title'] = 'Pilih Klinik';
        $this->load->view('users/pilih_klinik', $data);
    }

    public function coba()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = date("h:i");
        var_dump($data);
    }
}
