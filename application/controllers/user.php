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
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session();

        //contoh
        $tgl_upload = $this->m_admin->ambil_data_wali_tgl_upload_terbaru();
        $data['no_ktp'] = $this->m_admin->ambil_data_wali_no_ktp_terbaru($tgl_upload);

        $this->load->view('base/header', $data);
        $this->body_user('user/berita', $data);
        $this->load->view('base/footer');
    }

    public function detail_berita() {
        $data['title']='Detail Berita.';
        $this->load->view('base/header', $data);
        $this->body_user('user/detail-berita', $data);
        $this->load->view('base/footer');
    }

    public function detail_info_penting() {
        $data['title']='Detail Informasi Penting.';
        $this->load->view('base/header', $data);
        $this->body_user('user/detail-info-penting', $data);
        $this->load->view('base/footer');
    }

    public function psb() {
        $data['title']='Penerimaan Siswa Baru.';
        $this->load->view('base/header', $data);
        $this->body_user('user/psb', $data);
        $this->load->view('base/footer');   
    }

    public function guru() {
        $data['title']= 'Guru.';
        $this->load->view('base/header', $data);
    	$this->body_user('user/guru', $data);
    	$this->load->view('base/footer');
    }

    public function e_learning() {
        $data['title']= 'E-Learning.';
        $this->load->view('base/header', $data);
        $this->body_user('user/e-learning', $data);
        $this->load->view('base/footer');
    }

    public function detail_data() {
        $data['title']= 'Detail Data E-Learning.';
        $this->load->view('base/header', $data);
        $this->body_user('user/detail-data', $data);
        $this->load->view('base/footer');
    }

    public function Fasilitas() {
        $data['title']= 'Fasilitas.';
        $this->load->view('base/header', $data);
        $this->body_user('user/fasilitas', $data);
        $this->load->view('base/footer');
    }

    public function kontak() {
        $data['title']= 'Kontak.';
        $this->load->view('base/header', $data);
        $this->body_user('user/kontak', $data);
        $this->load->view('base/footer');
    }

    public function tentang_kami() {
        $data['title']= 'Tentang Kami.';
        $this->load->view('base/header', $data);
        $this->body_user('user/tentang-kami', $data);
        $this->load->view('base/footer');
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