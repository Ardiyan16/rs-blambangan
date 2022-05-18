<?php
class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper("url");
    $this->load->model('login_model');
  }

  public function index()
  {
    $this->load->view("login_view");
  }

  public function user()
  {
    $data = $this->login_model->login();
    if (empty($data)) {
      redirect('login?error=gagal');
    } else {
			$data = [
				'admin' => 'login',
			];
			$this->session->set_userdata($data);
      redirect('admin');
    }
  }

  public function login_user()
  {
    if ($this->session->userdata("no_rm") != null) {
      redirect('Users');
    } else {
      $this->load->view('users/login');
    }
  }

  public function registrasi_user()
  {
    $this->load->view('users/register');
  }

  public function registrasi()
  {
    $this->form_validation->set_rules('nik', 'NIK', 'is_unique[users.nik]|required|trim|max_length[16]', ['is_unique' => 'nik tersebut telah digunakan'], ['required' => 'nik tidak boleh kosong']);
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'nama anda tidak boleh kosong']);
    $this->form_validation->set_rules('no_wa', 'No Whastapp', 'required|trim', ['required' => 'no whatsapp tidak boleh kosong']);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', ['required' => 'jenis kelamin tidak boleh kosong']);
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim', ['required' => 'tanggal lahir anda tidak boleh kosong']);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
    if ($this->form_validation->run() == false) {
      $this->load->view('users/register');
    } else {
      $this->proses_registrasi();
    }
  }

  private function proses_registrasi()
  {
    $password = $this->input->post('password', true);
    $data = [
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'no_wa' => $this->input->post('no_wa'),
      'password' => password_hash($password, PASSWORD_BCRYPT),
      'status' => 0
    ];

    $this->db->insert('users', $data);
    $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data anda berhasil terdaftar tunggu konfirmasi dari admin.
            </div>');
    redirect('Login/login_user');
  }

  public function login()
  {
    $this->form_validation->set_rules('nik', 'NIK', 'required|trim', ['required' => 'nik tidak boleh kosong']);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('users/login');
    } else {
      $this->proses_login();
    }
  }

  public function proses_login()
  {
    $nik = htmlspecialchars($this->input->post('nik', TRUE), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

    $user = $this->db->get_where('users', ['nik' => $nik])->row_array();
    $cekpass = $this->db->get_where('users', array('password' => $password));

    if ($nik == $user['nik']) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'nik' => $user['nik'],
          'no_rm' => $user['no_rm'],
          'tgl_lahir' => $user['tgl_lahir'],
          'no_wa' => $user['no_wa'],
          'nama' => $user['nama'],
          'status' => $user['status']
        ];
        $this->session->set_userdata($data);
        if ($user['status'] == '1') {
          redirect('Users');
        } else {
          $this->session->unset_userdata('nik');
          $this->session->unset_userdata('no_rm');
          $this->session->unset_userdata('no_wa');
          $this->session->unset_userdata('alamat');
          $this->session->unset_userdata('tgl_lahir');
          $this->session->unset_userdata('status');
          $this->session->set_flashdata('belumkonfirmasi', true);
          redirect('login/login_user');
        }
      } else {
        $this->session->set_flashdata('passwordsalah', true);
        redirect('Login/login_user');
      }
    } else {
      $this->session->set_flashdata('niksalah', true);
      redirect('Login/login_user');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('no_rm');
    $this->session->unset_userdata('alamat');
    $this->session->unset_userdata('tgl_lahir');
    $this->session->unset_userdata('nik');
    $this->session->unset_userdata('no_wa');
    $this->session->unset_userdata('status');
    redirect('Utama');
  }
}
