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
    $data['title']='Nilai ujian';
    if($this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $kelas = $this->session->userdata['login_siswa']['id_kelas'];
      $semester = $this->input->post('semester');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $tampilkan = $this->input->post('tampilkan');
      $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

      if($tampilkan == "Tampilkan") {
          $data['slides']=$this->m_admin->tampil_data_slides();
          $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
          $data['semester']=$this->m_admin->tampil_data_semester();
          $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran();
          $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['total_nilai']=$this->m_siswa->hitung_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $data['nilai']=$this->m_siswa->tampil_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $data['jumlah_nilai']=$this->m_siswa->jumlah_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $this->load->view('base/header', $data);
          $this->login_siswa('siswa/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }elseif($this->session->userdata('login_wali')){
      $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
      $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
      $kelas = $this->m_wali->tampil_data_kelas_by_no_ktp($no_ktp);
      $semester = $this->input->post('semester');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $tampilkan = $this->input->post('tampilkan');
      $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

      if($tampilkan == "Tampilkan") {
          $data['slides']=$this->m_admin->tampil_data_slides();
          $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
          $data['semester']=$this->m_admin->tampil_data_semester();
          $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran();
          $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['total_nilai']=$this->m_siswa->hitung_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $data['nilai']=$this->m_siswa->tampil_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $data['jumlah_nilai']=$this->m_siswa->jumlah_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran);
          $this->load->view('base/header', $data);
          $this->login_siswa('siswa/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }else{
      redirect('user');
    }
  }

  public function ubah_foto_biodata() {
    if($this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $foto = $_FILES['foto'];
      $nama_foto = str_replace(' ', '_', $foto['name']);
      $ubah = $this->input->post('ubah');

      // validasi gambar
      $config['upload_path'] = './resource/img/photo/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $foto_siswa = $this->m_siswa->ambil_data_siswa_foto_by_id($id_siswa);

      $data = array('foto' => $nama_foto);
      $sukses = "Foto Berhasil Diubah.";
      $gagal = "Foto Gagal Diubah.";
      if($this->upload->do_upload('foto')) {
        $path = './resource/img/photo/'.$foto_siswa;//lokasi foto yang akan dihapus
        if(unlink($path)){
          $this->db->where('nis', $id_siswa);
          $this->db->update('siswa', $data);
        }
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . $this->agent->referrer() . "';";
        echo '</script>';
      }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo "window.location='" . $this->agent->referrer() . "';";
        echo '</script>';
      }
    }else{
      redirect('user');
    }
  }

  public function ubah_data_wali() {
    if($this->session->userdata('login_wali')){
      $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
      $now = date('y-m-d h:i:s');
      $nama_wali  = $this->input->post('nama_wali');
      $pekerjaan  = $this->input->post('pekerjaan');
      $email      = $this->input->post('email');
      $telephone  = $this->input->post('telephone');
      $handphone  = $this->input->post('handphone');
      $ubah       = $this->input->post('ubah');
      $sukses = "Data Berhasil Diubah.";
      $gagal = "Data Gagal Diubah.";
      $data = array(
          'nama' => $nama_wali,
          'pekerjaan' => $pekerjaan,
          'email' => $email,
          'tlp' => $telephone,
          'hp' => $handphone,
          'tgl_upload' => $now
          );
      if(isset($ubah)){
        $this->db->where('no_ktp', $no_ktp);
        $this->db->update('wali', $data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . $this->agent->referrer() . "';";
        echo '</script>';
      }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo "window.location='" . $this->agent->referrer() . "';";
        echo '</script>';
      }
    }else{
      redirect('user');
    }
  }

  public function ubah_data_siswa() {
    if($this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $now = date('y-m-d h:i:s');
      $password        = $this->input->post('password');
      $nama        = $this->input->post('nama');
      $tempat_lahir        = $this->input->post('tempat_lahir');
      $tgl_lahir        = $this->input->post('tgl_lahir');
      $jenis_kelamin        = $this->input->post('jenis_kelamin');
      $alamat        = $this->input->post('alamat');
      $no_ktp        = $this->input->post('no_ktp');
      $nama_wali  = $this->input->post('nama_wali');
      $pekerjaan  = $this->input->post('pekerjaan');
      $email      = $this->input->post('email');
      $telephone  = $this->input->post('telephone');
      $handphone  = $this->input->post('handphone');
      $ubah       = $this->input->post('ubah');
      $sukses = "Data Berhasil Diubah.";
      $gagal = "Data Gagal Diubah.";
      $data_siswa = array(
          'password'=> $password,
          'nama'=> $nama,
          'tempat_lahir' => $tempat_lahir,
          'tgl_lahir' => $tgl_lahir,
          'jenis_kelamin' => $jenis_kelamin,
          'alamat' => $alamat,
          'tgl_edit' => $now
          );
      $data_wali = array(
          'nama' => $nama_wali,
          'pekerjaan' => $pekerjaan,
          'email' => $email,
          'tlp' => $telephone,
          'hp' => $handphone,
          'tgl_upload' => $now
          );
      if($ubah=="Ubah"){
          //ubah data siswa
          $this->db->where('nis', $id_siswa);
          $this->db->update('siswa', $data_siswa);
          //ambil tgl_edit terbaru dan no_ktp wali siswa yang baru diubah berdasarkan tgl_edit terbaru
          $tgl_edit = $this->m_siswa->ambil_data_siswa_tgl_edit_terbaru();
          $no_ktp_terbaru = $this->m_siswa->ambil_data_siswa_no_ktp_terbaru($tgl_edit);
          //ubah data wali berdasarkan no_ktp_terbaru
          $this->db->where('no_ktp', $no_ktp_terbaru);
          $this->db->update('wali', $data_wali);
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user');
    }
  }

  public function keluar_siswa() {
    if($this->session->userdata('login_siswa')){
      $this->session->unset_userdata('login_siswa');
      echo '<script>';
      echo "alert('Berhasil Keluar');";
      echo "window.location='" . site_url('user') . "'";
      echo '</script>';
    }else{
      redirect('user');
    }
  }

}//end-class