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

    public function detail_guru() {
        $id = $this->uri->segment(3);
        $data['title']='Detail Guru';
        if(!empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-guru', $data);
            $this->load->view('base/footer');
        }elseif(!empty($id) && $this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-guru', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-guru', $data);
            $this->load->view('base/footer');
        }else{
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-guru', $data);
            $this->load->view('base/footer');
        }
    }

    public function materi_pelajaran() {
        $data['title']='Mata Pelajaran.';
        $id = $this->uri->segment(3);
        if(empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/materi-pelajaran', $data);
            $this->load->view('base/footer');
        }elseif(!empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/materi-pelajaran', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
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
        $id = $this->uri->segment(3);
        if(empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $this->load->view('base/header', $data);
            $this->login_guru('guru/pengumuman', $data);
            $this->load->view('base/footer');
        }elseif(!empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/user-pengumuman', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/user-pengumuman', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function nilai_ujian() {
        $data['title']='Nilai Ujian.';
        $id = $this->uri->segment(3);
        if(empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/nilai-ujian', $data);
            $this->load->view('base/footer');
        }elseif(!empty($id) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_guru('guru/nilai-ujian', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
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
        $id = $this->input->get('id');
        $guru = $this->input->get('id_guru');
        $detail_guru=$this->m_guru->tampil_data_guru_by_id($guru);
        if(empty($detail_guru) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($id_guru);

            $data['detail_materi']=$this->m_guru->tampil_data_detail_materi_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-materi-pelajaran', $data);
            $this->load->view('base/footer');
        }elseif(!empty($detail_guru) && $this->session->userdata("login_guru")){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($id_guru);
            
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_materi']=$this->m_guru->tampil_data_detail_materi_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-materi-pelajaran', $data);
            $this->load->view('base/footer');
        }elseif(!empty($detail_guru) && $this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($guru);

            $data['guru']=$this->m_guru->tampil_data_guru_by_session($guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
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
        $id=$this->uri->segment(3);
        $nik=$this->m_guru->tampil_data_materi_nik_by_id($id);
        if($this->session->userdata('login_guru') && $nik == $this->session->userdata['login_guru']['nik']){
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

    public function ubah_elearning() {
        $data['title']='Ubah E-Learning.';
        $id=$this->uri->segment(3);
        $nik=$this->m_guru->tampil_data_elearning_nik_by_id($id);
        if($this->session->userdata('login_guru') && $nik == $this->session->userdata['login_guru']['nik']){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id_guru);
            
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['detail_elearning']=$this->m_guru->tampil_data_elearning_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/ubah-elearning', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function detail_nilai() {
        $data['title']='Detail Nilai Ujian.';
        $id = $this->input->get('id');
        $guru = $this->input->get('id_guru');
        $detail_guru=$this->m_guru->tampil_data_guru_by_id($guru);
        if(empty($detail_guru) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($id_guru);

            $data['detail_nilai']=$this->m_guru->tampil_data_detail_nilai_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-nilai-ujian', $data);
            $this->load->view('base/footer');
        }elseif(!empty($detail_guru) && $this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($id_guru);
            
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_nilai']=$this->m_guru->tampil_data_detail_nilai_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-nilai-ujian', $data);
            $this->load->view('base/footer');
        }elseif(!empty($detail_guru) && $this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['get_nik'] = $this->input->get('id_guru');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($guru);

            $data['guru']=$this->m_guru->tampil_data_guru_by_session($guru);
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
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

}//end class