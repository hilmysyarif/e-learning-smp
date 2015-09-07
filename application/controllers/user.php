<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';

class User extends Base {
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

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita();
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita();
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }else{
            $data['berita']=$this->m_user->tampil_data_berita();
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_berita() {
        $id = $this->uri->segment(3);
        $data['title']='Detail Berita.';
        $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
        $this->load->view('base/header', $data);
        $this->body_user('user/detail-berita', $data);
        $this->load->view('base/footer');
    }

    public function detail_info_penting() {
        $id=$this->uri->segment(3);
        $data['title']='Detail Informasi Penting.';
        $data['informasi']=$this->m_user->tampil_data_informasi();
        $data['detail_informasi']=$this->m_user->tampil_data_informasi_by_id($id);
        $this->load->view('base/header', $data);
        $this->body_user('user/detail-info-penting', $data);
        $this->load->view('base/footer');
    }

    public function psb() {
        $data['title']='Penerimaan Siswa Baru.';
        
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/psb', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/psb', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/psb', $data);
            $this->load->view('base/footer');     
        }
    }

    public function guru() {
        $data['title']= 'Guru.';

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['semua_guru']=$this->m_guru->tampil_data_guru();
            $this->load->view('base/header', $data);
            $this->body_user('user/guru', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['semua_guru']=$this->m_guru->tampil_data_guru();
            $this->load->view('base/header', $data);
            $this->body_user('user/guru', $data);
            $this->load->view('base/footer');
        }else{
            $data['semua_guru']=$this->m_guru->tampil_data_guru();
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/guru', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_guru() {
        $id = $this->uri->segment(3);
        $data['title']='Detail Guru';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/detail-guru', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

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

    public function pengumuman() {
        $id = $this->uri->segment(3);
        $data['title']='Detail Guru';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/user-pengumuman', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/user-pengumuman', $data);
            $this->load->view('base/footer');
        }else{
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('guru/user-pengumuman', $data);
            $this->load->view('base/footer');
        }   
    }

    public function e_learning() {
        $data['title']= 'E-Learning.';

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_data() {
        $data['title']= 'Detail Data E-Learning.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-data', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-data', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-data', $data);
            $this->load->view('base/footer');
        }
    }

    public function fasilitas() {
        $data['title']= 'Fasilitas.';
        $this->load->view('base/header', $data);
        $this->body_user('user/fasilitas', $data);
        $this->load->view('base/footer');
    }

    public function kontak() {
        $data['title']= 'Kontak.';
        
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }
    }

    public function tentang_kami() {
        $data['title']= 'Tentang Kami.';

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }
    }

    public function download() {
        $data['title']= 'Download.';
        $this->load->view('base/header', $data);
        $this->body_user('user/download', $data);
        $this->load->view('base/footer');
    }

    public function hasil_pencarian() {
        $data['title']= 'Hasil Pencarian.';
        $this->load->view('base/header', $data);
        $this->body_user('user/hasil-pencarian', $data);
        $this->load->view('base/footer');
    }

}//end class