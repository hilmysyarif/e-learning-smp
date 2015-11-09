<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_login extends Base {
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

  public function masuk() {
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data');
    $run = $this->form_validation->run();
    if ($run == FALSE) {
      echo '<script>';
      echo "alert('No Identitas dan password tidak sesuai');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    } else {
      echo '<script>';
      echo "alert('Login Berhasil');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    }
  }

  //dipanggil melalui form_validation password (callback_cek_data)
    public function cek_data($password) {
      //validasi field terhadap database 
      $id_siswa = $this->input->post('id_siswa');
      $id_guru = $this->input->post('id_guru');
      $id_wali = $this->input->post('id_wali');
      $id_admin = $this->input->post('id_admin');
      $menu = $this->input->post('menu');
      //query ke database
      $masuk_siswa  = $this->m_siswa->masuk_siswa($id_siswa, $password);
      $masuk_guru   = $this->m_guru->masuk_guru($id_guru, $password);
      $masuk_wali   = $this->m_wali->masuk_wali($id_wali, $password);
      $masuk_admin  = $this->m_admin->masuk_admin($id_admin, $password);

      if ($masuk_siswa && $menu=="siswa") {
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
      } elseif ($masuk_guru && $menu=="guru") {
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
      } elseif ($masuk_wali && $menu=="wali") {
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
      } elseif ($masuk_admin && $menu=="admin") {
        $sess_array = array();
        foreach ($masuk_admin as $row) {
          $sess_array = array(
              'email' => $row->email,
              'nama' => $row->nama
              );
          $this->session->set_userdata('login_admin', $sess_array);
        }
        //session kc_finder
        $sess_kcfinder = array(
         'disabled' => FALSE,
         'uploadURL' => "../content_upload"
         );
        $this->session->set_userdata('sess_kcfinder', $sess_kcfinder);
        return TRUE;
      } else {
        $this->form_validation->set_message('cek_data', 'Nomer identitas dan password tidak sesuai');
        return FALSE;
      }
    }


    public function masuk_admin() {
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data_admin');
    $run = $this->form_validation->run();
    if ($run == FALSE) {
      echo '<script>';
      echo "alert('No Identitas dan password tidak sesuai');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    } else {
      echo '<script>';
      echo "alert('Login Berhasil');";
      echo "window.location='" . site_url('admin/data_halaman') . "'";
      echo '</script>';
    }
  }

  //dipanggil melalui form_validation password (callback_cek_data)
    public function cek_data_admin($password) {
      //validasi field terhadap database
      $id_admin = $this->input->post('id_admin');
      //query ke database
      $masuk_admin  = $this->m_admin->masuk_admin($id_admin, $password);

      if ($masuk_admin) {
        $sess_array = array();
        foreach ($masuk_admin as $row) {
          $sess_array = array(
              'email' => $row->email,
              'nama' => $row->nama
              );
          $this->session->set_userdata('login_admin', $sess_array);
        }
        //session kc_finder
        $sess_kcfinder = array(
         'disabled' => FALSE,
         'uploadURL' => "../content_upload"
         );
        $this->session->set_userdata('sess_kcfinder', $sess_kcfinder);
        return TRUE;
      } else {
        $this->form_validation->set_message('cek_data', 'Nomer identitas dan password tidak sesuai');
        return FALSE;
      }
    }
}//end-class