<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_siswa extends Base {
// class P_admin extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct() {
    parent::__construct();
  }

  public function tampil_data_nilai_siswa() {
    if($this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $semester = $this->input->post('semester');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $tampilkan = $this->input->post('tampilkan');
      $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

      if($tampilkan == "Tampilkan") {
          $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
          $data['semester']=$this->m_admin->tampil_data_semester();
          $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran();
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['total_nilai']=$this->m_siswa->hitung_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $data['nilai']=$this->m_siswa->tampil_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $this->load->view('base/header', $data);
          $this->login_siswa('siswa/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }
  }

  public function masuk_siswa() {

    $this->form_validation->set_rules('id', 'ID', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data');

    $run = $this->form_validation->run();

    if ($run == FALSE) {
      echo '<script>';
      echo "alert('Email dan password tidak sesuai');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    } else {
            // bisa juga menggunakan redirect ini
            // redirect('beranda/biodata');
            // menggunakan javascript lebih cepat
      echo '<script>';
      echo "alert('Login Berhasil');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    }
  }

  //dipanggil melalui form_validation password (callback_cek_data)
    public function cek_data($password) {
        //validasi field terhadap database 
        $id = $this->input->post('id');
    
        $menu = $this->input->post('menu');

        //query ke database
        $masuk_siswa  = $this->m_siswa->masuk_siswa($id, $password);
        $masuk_guru   = $this->m_guru->masuk_guru($id, $password);
        $masuk_wali   = $this->m_wali->masuk_wali($id, $password);
        $masuk_admin  = $this->m_admin->masuk_admin($id, $password);

        if ($masuk_siswa && $menu='siswa') {
          $sess_array = array();
          foreach ($masuk_siswa as $row) {
              $sess_array = array(
                  'nis' => $row->nis,
                  'id_kelas' => $row->id_kelas,
                  'id_semester' => $row->id_semester,
                  'id_tahun_ajaran' => $row->id_tahun_ajaran
                  );
              $this->session->set_userdata('login_siswa', $sess_array);
          }
          return TRUE;
        } elseif ($masuk_guru && $menu='guru') {
          $sess_array = array();
          foreach ($masuk_guru as $row) {
              $sess_array = array(
                  'nik' => $row->nik,
                  'nama' => $row->nama,
                  'email' => $row->email,
                  'foto' => $row->foto
                  );
              $this->session->set_userdata('login_guru', $sess_array);
          }
          return TRUE;
        } elseif ($masuk_wali && $menu='wali') {
          $sess_array = array();
          foreach ($masuk_wali as $row) {
              $sess_array = array(
                  'no_ktp' => $row->no_ktp,
                  'nama' => $row->nama,
                  'email' => $row->email
                  );
              $this->session->set_userdata('login_wali', $sess_array);
          }
          return TRUE;
        } elseif ($masuk_admin) {
          $sess_array = array();
          foreach ($masuk_admin as $row) {
              $sess_array = array(
                  'email' => $row->email,
                  'nama' => $row->nama
                  );
              $this->session->set_userdata('login_admin', $sess_array);
          }
          return TRUE;
        } else {
            $this->form_validation->set_message('cek_data', 'Nomer identitas siswa dan password tidak sesuai');
            return FALSE;
        }
    }

    public function keluar_siswa() {
        $this->session->unset_userdata('login_siswa');
        echo '<script>';
        echo "alert('Berhasil Keluar');";
        // echo "window.location='" . $this->agent->referrer() . "'";
        echo "window.location='../user'";
        echo '</script>';
    }

}//end-class