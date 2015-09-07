<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';

class Guru extends Base {
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
        $this->load->helper(array('url'));
        $this->load->library(array());
        $this->load->model(array());
    }

    public function index() {
    	$data['title']='Selamat Datang.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

        	$this->load->view('base/header', $data);
            $this->login_guru('guru/biodata', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function materi_pelajaran() {
    	$data['title']='Mata Pelajaran.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        	$this->load->view('base/header', $data);
            $this->login_guru('guru/materi-pelajaran', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/materi-pelajaran', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function pengumuman() {
    	$data['title']='pengumuman.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

        	$this->load->view('base/header', $data);
            $this->login_guru('guru/pengumuman', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function nilai_ujian() {
        $data['title']='Nilai Ujian.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/nilai-ujian', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function upload() {
        $data['title']='Upload.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/upload', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function pengaturan() {
        $data['title']='Pengaturan.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $this->load->view('base/header', $data);
            $this->login_guru('guru/pengaturan', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function detail_materi() {
        $data['title']='Detail Materi Pelajaran.';
        if($this->session->userdata('login_guru')){
            $id = $this->uri->segment(3);
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);

            $data['detail_materi']=$this->m_guru->tampil_data_detail_materi_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-materi-pelajaran', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_materi() {
        $data['title']='Ubah Materi Pelajaran.';
        if($this->session->userdata('login_guru')){
            $id=$this->uri->segment(3);
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);
            
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['detail_materi']=$this->m_guru->tampil_data_detail_materi_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/ubah-materi-pelajaran', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function detail_nilai() {
        $data['title']='Detail Nilai Ujian.';
        if($this->session->userdata('login_guru')){
            $id = $this->uri->segment(3);
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);

            $data['detail_nilai']=$this->m_guru->tampil_data_detail_nilai_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-nilai-ujian', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_nilai() {
        $data['title']='Ubah Nilai Ujian.';
        if($this->session->userdata('login_guru')){
            $id=$this->uri->segment(3);
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);
            
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['detail_nilai']=$this->m_guru->tampil_data_detail_nilai_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/ubah-nilai-ujian', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function keluar() {
    	$data['title']='Keluar.';
    	$this->load->view('base/header', $data);
        $this->login_guru('guru/biodata', $data);
        $this->load->view('base/footer');
    }

}//end class