<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_guru extends Base {
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

  public function download_materi_pelajaran(){
    if($this->session->userdata('login_siswa')){
      $id = $this->input->get('id');
      $data=$this->m_guru->tampil_data_detail_materi_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }elseif($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $data=$this->m_guru->tampil_data_detail_materi_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }else{
      redirect('user');
    }
  }

  public function download_nilai(){
    if($this->session->userdata('login_siswa')){
      $id = $this->input->get('id');
      $data = $this->m_guru->tampil_data_detail_nilai_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }elseif($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $data = $this->m_guru->tampil_data_detail_nilai_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }else{
      redirect('user');
    }
  }

  public function download_elearning(){
    if($this->session->userdata('login_siswa')){
      $id = $this->input->get('id');
      $data = $this->m_guru->tampil_data_elearning_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }elseif($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $data = $this->m_guru->tampil_data_elearning_by_id($id);
      $nama_file = $data['file'];
      $isi = file_get_contents(base_url('resource/doc/'.$nama_file));
      force_download($nama_file, $isi);
    }else{
      redirect('user');
    }
  }

  public function tambah_data_materi() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $judul = $this->input->post('judul');
      $pelajaran = $this->input->post('pelajaran');
      $kelas = $this->input->post('kelas');
      $semester = $this->input->post('semester');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $simpan = $this->input->post('simpan');
      $now = date('y-m-d h-i-s');
      $file = $_FILES['file'];
      $nama_file = str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array('nik' => $id,
                    'judul' => $judul,
                    'id_pelajaran' => $pelajaran,
                    'id_kelas' => $kelas,
                    'id_semester' => $semester,
                    'id_tahun_ajaran' => $tahun_ajaran,
                    'file' => $nama_file,
                    'tgl_upload' => $now
        );
      if($simpan=="Upload"){
          $this->m_guru->tambah_data_materi($data);
          $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Disimpan';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Disimpan';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function tambah_data_elearning() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $judul = $this->input->post('judul');
      $pelajaran = $this->input->post('pelajaran');
      $simpan = $this->input->post('simpan');
      $now = date('y-m-d h-i-s');
      $file = $_FILES['file'];
      $nama_file = str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array('nik' => $id,
                    'judul' => $judul,
                    'id_pelajaran' => $pelajaran,
                    'file' => $nama_file,
                    'tgl_upload' => $now
        );
      if($simpan=="Upload"){
          $this->m_guru->tambah_data_elearning($data);
          $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Disimpan';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Disimpan';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function tambah_data_nilai() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $judul = $this->input->post('judul');
      $semester = $this->input->post('semester');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $simpan = $this->input->post('simpan');
      $now = date('y-m-d h-i-s');
      $file = $_FILES['file'];
      $nama_file = str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array('nik' => $id,
                    'judul' => $judul,
                    'id_semester' => $semester,
                    'id_tahun_ajaran' => $tahun_ajaran,
                    'file' => $nama_file,
                    'tgl_upload' => $now
        );
      if($simpan=="Upload"){
          $this->m_guru->tambah_data_nilai($data);
          $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Disimpan';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Disimpan';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function tambah_data_pengumuman() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $pengumuman=$this->input->post('pengumuman');

      $data = array(
        'pengumuman' => $pengumuman
        );
      
      $this->db->where('nik', $id);
      $this->db->update('guru', $data);
      echo '<script>';
      echo "alert('Data Berhasil Disimpan');";
      echo "window.location='" . $this->agent->referrer() . "'";
      echo '</script>';
    }else{
      redirect('user'); 
    }
  }

  public function tampil_data_materi() {  
    $data['title']='Detail Materi.';
    $nik       = $this->input->get('id');
    $semester       = $this->input->post('semester');
    $tahun_ajaran   = $this->input->post('tahun_ajaran');
    $tampilkan = $this->input->post('tampilkan');
    $detail_guru=$this->m_guru->tampil_data_guru_by_id($nik);

    $data['semester'] = $this->m_admin->tampil_data_semester();
    $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

    if(empty($detail_guru) && $this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

      if($tampilkan == 'Tampilkan') {
          $data['materi_pelajaran'] = $this->m_guru->tampil_data_materi_by_id($nik,$semester,$tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();
          
          $this->load->view('base/header', $data);
          $this->login_guru('guru/materi-pelajaran', $data);
          $this->load->view('base/footer');
      }
    }elseif(!empty($detail_guru) && $this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
      $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($nik);

      if($tampilkan == 'Tampilkan') {
          $data['materi_pelajaran'] = $this->m_guru->tampil_data_materi_by_id($nik,$semester,$tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();
          
          $this->load->view('base/header', $data);
          $this->login_guru('guru/materi-pelajaran', $data);
          $this->load->view('base/footer');
      }
    }elseif(!empty($detail_guru) && $this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($nik);
      $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($nik);

      if($tampilkan == 'Tampilkan') {
          $data['materi_pelajaran'] = $this->m_guru->tampil_data_materi_by_id($nik,$semester,$tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();
          
          $this->load->view('base/header', $data);
          $this->login_guru('guru/materi-pelajaran', $data);
          $this->load->view('base/footer');
      }
    }else{
      redirect('user');
    }
  }

  public function tampil_data_nilai() {
    $data['title']='Data Nilai.';
    $nik       = $this->input->get('id');
    $semester       = $this->input->post('semester');
    $tahun_ajaran   = $this->input->post('tahun_ajaran');
    $tampilkan = $this->input->post('tampilkan');
    $detail_guru=$this->m_guru->tampil_data_guru_by_id($nik);

    $data['semester'] = $this->m_admin->tampil_data_semester();
    $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

    if(empty($detail_guru) && $this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

      if($tampilkan == 'Tampilkan') {
          $data['data_nilai'] = $this->m_guru->tampil_data_nilai_by_id($nik,$semester,$tahun_ajaran);
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();

          $this->load->view('base/header', $data);
          $this->login_guru('guru/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }elseif(!empty($detail_guru) && $this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
      $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($nik);
      
      if($tampilkan == 'Tampilkan') {
          $data['data_nilai'] = $this->m_guru->tampil_data_nilai_by_id($nik,$semester,$tahun_ajaran);
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();

          $this->load->view('base/header', $data);
          $this->login_guru('guru/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }elseif(!empty($detail_guru) && $this->session->userdata('login_siswa')){
      $id_siswa = $this->session->userdata['login_siswa']['nis'];
      $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
      
      $data['guru']=$this->m_guru->tampil_data_guru_by_session($nik);
      $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($nik);
      if($tampilkan == 'Tampilkan') {
          $data['data_nilai'] = $this->m_guru->tampil_data_nilai_by_id($nik,$semester,$tahun_ajaran);
          $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
          $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
          $data['slides']=$this->m_admin->tampil_data_slides();

          $this->load->view('base/header', $data);
          $this->login_guru('guru/nilai-ujian', $data);
          $this->load->view('base/footer');
      }
    }else{
      redirect('user');
    }
  }

  public function ubah_data_guru() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');

      $now = date('y-m-d h:i:s');
      $nik        = $this->input->post('nik');
      $nama        = $this->input->post('nama');
      $tempat_lahir        = $this->input->post('tempat_lahir');
      $password        = $this->input->post('password');
      $tgl_lahir        = $this->input->post('tgl_lahir');
      $jenis_kelamin        = $this->input->post('jenis_kelamin');
      $alamat        = $this->input->post('alamat');
      $email        = $this->input->post('email');
      $telephone        = $this->input->post('telephone');
      $handphone        = $this->input->post('handphone');
      $simpan = $this->input->post('simpan');

      $data = array(
          'nik' => $nik,
          'nama'=> $nama,
          'tempat_lahir' => $tempat_lahir,
          'tgl_lahir' => $tgl_lahir,
          'jenis_kelamin' => $jenis_kelamin,
          'alamat' => $alamat,
          'email' => $email,
          'tlp' => $telephone,
          'hp' => $handphone,
          'tgl_edit' => $now
          );

      if($simpan=="Simpan"){
          //ubah data siswa
          $this->db->where('nik', $id);
          $this->db->update('guru', $data);
          echo '<script>';
          echo "alert('Guru Berhasil Diubah.');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          echo '<script>';
          echo "alert('Guru Gagal Diubah.');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function ubah_foto_guru() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      
      $simpan = $this->input->post('simpan');
      $foto = $_FILES['foto'];
      $nama_foto = str_replace(' ', '_', $foto['name']);

    //validasi gambar
      $config['upload_path'] = './resource/img/photo/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data= array('foto' => $nama_foto);
      if($simpan=="Simpan"){
              //ubah data siswa
              $this->db->where('nik', $id);
              $this->db->update('guru', $data);
              $this->upload->do_upload('foto');
              echo '<script>';
              echo "alert('Foto Berhasil Diubah.');";
              echo "window.location='" . $this->agent->referrer() . "';";
              echo '</script>';
          }else{
              echo '<script>';
              echo "alert('Foto Gagal Diubah.');";
              echo "window.location='" . $this->agent->referrer() . "';";
              echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function ubah_password_guru() {
    if($this->session->userdata('login_guru')){
      $id=$this->input->get('id');
      $password_lama = $this->input->post('password_lama');
      $password_baru = $this->input->post('password_baru');

      $this->form_validation->set_rules('password_lama', 'Password', 'trim|required|xss_clean');
      $this->form_validation->set_rules('password_baru', 'Password', 'trim|required|xss_clean');
      $this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password_baru]|xss_clean');
      $run = $this->form_validation->run();
      $true = $run == TRUE;

      $data = array('password' => $password_baru);
      //ambil data password guru
      $password = $this->m_guru->cek_password_guru_by_id($id);
      
      if($password_lama == $password && $true){
              //ubah data siswa
              $this->db->where('nik', $id);
              $this->db->update('guru', $data);
              echo '<script>';
              echo "alert('Password Berhasil Diubah.');";
              echo "window.location='" . $this->agent->referrer() . "';";
              echo '</script>';
          }else{
              echo '<script>';
              echo "alert('Password Gagal Diubah.');";
              echo "window.location='" . $this->agent->referrer() . "';";
              echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function ubah_data_materi_pelajaran() {
    if($this->session->userdata('login_guru')){    
      $id = $this->input->get('id');
      $judul=$this->input->post('judul');
      $pelajaran=$this->input->post('pelajaran');
      $kelas=$this->input->post('kelas');
      $semester=$this->input->post('semester');
      $tahun_ajaran=$this->input->post('tahun_ajaran');
      $ubah=$this->input->post('ubah');
      $now=date('y-m-d h-i-s');
      $file=$_FILES['file'];
      $nama_file=str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array(
                    'judul' => $judul,
                    'id_pelajaran' => $pelajaran,
                    'id_kelas' => $kelas,
                    'id_semester' => $semester,
                    'id_tahun_ajaran' => $tahun_ajaran,
                    'file' => $nama_file,
                    'tgl_edit' => $now
      );
      if($this->upload->do_upload('file')){
          $this->db->where('id_materi_pelajaran', $id);
          $this->db->update('materi_pelajaran', $data);

          // $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Diubah';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Diubah';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
      redirect('user'); 
    }
  }

  public function ubah_data_elearning() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $judul=$this->input->post('judul');
      $pelajaran=$this->input->post('pelajaran');
      $ubah=$this->input->post('ubah');
      $now=date('y-m-d h-i-s');
      $file=$_FILES['file'];
      $nama_file=str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array(
                    'judul' => $judul,
                    'id_pelajaran' => $pelajaran,
                    'file' => $nama_file,
                    'tgl_edit' => $now
      );
      if($this->upload->do_upload('file')){
          $this->db->where('id_materi_umum', $id);
          $this->db->update('materi_umum', $data);

          // $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Diubah';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Diubah';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
     redirect('user'); 
    }
  }

  public function ubah_data_nilai() {
    if($this->session->userdata('login_guru')){
      $id = $this->input->get('id');
      $judul=$this->input->post('judul');
      $semester=$this->input->post('semester');
      $tahun_ajaran=$this->input->post('tahun_ajaran');
      $ubah=$this->input->post('ubah');
      $now=date('y-m-d h-i-s');
      $file=$_FILES['file'];
      $nama_file=str_replace(' ', '_', $file['name']);

      //validasi file
      $config['upload_path'] = './resource/doc/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|docx|xls|xlsx|ppt|pptx|zip|rar|';
      // $config['max_size'] = '5024';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $config['overwrite'] = true;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $data = array(
                    'judul' => $judul,
                    'id_semester' => $semester,
                    'id_tahun_ajaran' => $tahun_ajaran,
                    'file' => $nama_file,
                    'tgl_edit' => $now
      );
      if($this->upload->do_upload('file')){
          $this->db->where('id_data_nilai', $id);
          $this->db->update('data_nilai', $data);

          // $this->upload->do_upload('file');
          $sukses = 'Data Berhasil Diubah';
          echo '<script>';
          echo "alert('".$sukses."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }else{
          $gagal = 'Data Gagal Diubah';
          echo '<script>';
          echo "alert('".$gagal."');";
          echo "window.location='" . $this->agent->referrer() . "';";
          echo '</script>';
      }
    }else{
     redirect('user'); 
    }
  }

  public function hapus_data_detail_materi() {
    if($this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $id = $this->input->get('id');
      $nik=$this->m_guru->tampil_data_materi_nik_by_id($id);
      $sukses = 'Data Berhasil Dihapus';
      $gagal = 'Data Gagal Dihapus';
      if($nik == $id_guru) {
        $this->db->where('nik', $id_guru);
        $this->db->where('id_materi_pelajaran', $id);
        $this->db->delete('materi_pelajaran');
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('guru/materi_pelajaran') . "';";
        echo '</script>';
      }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo "window.location='" . site_url('user') . "';";
        echo '</script>';
      }
    }else{
     redirect('user'); 
    }
  }

  public function hapus_data_detail_elearning() {
    if($this->session->userdata('login_guru')){
      $id_guru = $this->session->userdata['login_guru']['nik'];
      $id = $this->input->get('id');
      $nik=$this->m_guru->tampil_data_elearning_nik_by_id($id);      
      $sukses = 'Data Berhasil Dihapus';
      $gagal = 'Data Gagal Dihapus';
      if($nik == $id_guru) {
        $this->db->where('nik', $id_guru);
        $this->db->where('id_materi_umum', $id);
        $this->db->delete('materi_umum');
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('user/e_learning') . "';";
        echo '</script>';
      }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo "window.location='" . site_url('user') . "';";
        echo '</script>';
      }
    }else{
      redirect('user');
    }
  }

  public function hapus_data_detail_nilai() {
    if($this->session->userdata('login_guru')){
      $id_guru=$this->session->userdata['login_guru']['nik'];
      $id = $this->input->get('id');
      $nik=$this->m_guru->tampil_data_nilai_nik_by_id($id);
      $sukses = 'Data Berhasil Dihapus';
      $gagal = 'Data Gagal Dihapus';
      if($nik == $id_guru) {
        $this->db->where('nik', $id_guru);
        $this->db->where('id_data_nilai', $id);
        $this->db->delete('data_nilai');
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('guru/nilai_ujian') . "';";
        echo '</script>';
      }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo "window.location='" . site_url('user') . "';";
        echo '</script>'; 
      }
    }else{
      redirect('user');
    }
  }

  public function keluar_guru() {
    if($this->session->userdata('login_guru')) {
      $this->session->unset_userdata('login_guru');
      echo '<script>';
      echo "alert('Berhasil Keluar');";
      echo "window.location='" . site_url('user') . "';";
      echo '</script>';
    }else{
      redirect('user');
    }
  }

}//end-class