<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_user extends Base {
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

  public function pencarian() {
    $data['title']='Hasil Pencarian';
    $kata_kunci = $this->input->get('kata_kunci');
    if(!empty($kata_kunci)) {
      $data['berita']=$this->m_user->cari_berita($kata_kunci, $limit, $offset);
      $this->load->view('base/header', $data);
      $this->body_user('user/berita', $data);
      $this->load->view('base/footer');
    }
  }

  public function tampil_data_jadwal() {
        $data['title']  = 'Jadwal Pelajaran';
        $kelas          = $this->input->post('kelas');
        $semester       = $this->input->post('semester');
        $tahun_ajaran   = $this->input->post('tahun_ajaran');
        
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['hari'] = $this->m_admin->tampil_data_hari();
        $data['jam'] = $this->m_admin->tampil_data_jam();
        $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
        $data['ruang'] = $this->m_admin->tampil_data_ruang();
        $data['guru'] = $this->m_admin->tampil_data_guru();

        $tampilkan = $this->input->post('tampilkan');
        
        if($tampilkan == 'Tampilkan') {
        	if($this->session->userdata('login_siswa')){
	            $id_siswa = $this->session->userdata['login_siswa']['nis'];
	            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

	            // $data['id_jadwal'] = $this->m_admin->tampil_data_id_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            
	            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
	            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
	            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

	            $data['slides']=$this->m_admin->tampil_data_slides();
	            $this->load->view('base/header', $data);
	            $this->body_user('user/jadwal-pelajaran', $data);
	            $this->load->view('base/footer');
	        }elseif($this->session->userdata('login_wali')){
	            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
	            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
	            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

	            // $data['id_jadwal'] = $this->m_admin->tampil_data_id_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            
	            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
	            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
	            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

	            $data['slides']=$this->m_admin->tampil_data_slides();
	            $this->load->view('base/header', $data);
	            $this->body_user('user/jadwal-pelajaran', $data);
	            $this->load->view('base/footer');
	        }elseif($this->session->userdata('login_guru')){
	            $id_guru = $this->session->userdata['login_guru']['nik'];
	            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

	            // $data['id_jadwal'] = $this->m_admin->tampil_data_id_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            
	            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
	            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
	            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

	            $data['slides']=$this->m_admin->tampil_data_slides();
	            $this->load->view('base/header', $data);
	            $this->body_user('user/jadwal-pelajaran', $data);
	            $this->load->view('base/footer');
	        }else{
	        	$id_admin = $this->session->userdata['login_admin']['email'];
	            $data['admin']=$this->m_admin->tampil_data_admin_by_session($id_admin);
	            // $data['id_jadwal'] = $this->m_admin->tampil_data_id_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
	            
	            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
	            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
	            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

	            $data['slides']=$this->m_admin->tampil_data_slides();
	            $this->load->view('base/header', $data);
	            $this->body_user('user/jadwal-pelajaran', $data);
	            $this->load->view('base/footer');
	        }
        }else{
        	redirect('user/jadwal_pelajaran');
        }
    }

}//end-class