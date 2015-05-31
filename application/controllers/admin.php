<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';

class Admin extends Base {
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
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/berita', $data);
        $this->load->view('base/footer');
    }

    public function login() {
        $data['title']='Login';
        $this->load->view('base/header', $data);
        $this->login_admin('admin/login', $data);
        $this->load->view('base/footer');
    }
    public function informasi_penting() {
    	$data['title']='Informasi Penting.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/informasi-penting', $data);
        $this->load->view('base/footer');
    }

    public function psb() {
    	$data['title']='Penerimaan Siswa Baru.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/psb', $data);
        $this->load->view('base/footer');
    }

    public function kontak() {
    	$data['title']='Kontak.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/kontak', $data);
        $this->load->view('base/footer');
    }

    public function tentang_kami() {
    	$data['title']='Tentang Kami.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/tentang-kami', $data);
        $this->load->view('base/footer');
    }

    public function guru() {
    	$data['title']='Guru.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/guru', $data);
        $this->load->view('base/footer');
    }

    public function list_guru() {
    	$data['title']='Guru.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/list-guru', $data);
        $this->load->view('base/footer');
    }

    public function detail_guru() {
    	$data['title']='Guru.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/detail-guru', $data);
        $this->load->view('base/footer');
    }

    public function siswa() {
    	$data['title']='Siswa.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/siswa', $data);
        $this->load->view('base/footer');
    }

    public function list_siswa() {
    	$data['title']='Siswa.';
    	$this->load->view('base/header', $data);
        $this->body_admin('admin/list-siswa', $data);
        $this->load->view('base/footer');
    }

    public function detail_siswa() {
        $data['title']='Guru.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/detail-siswa', $data);
        $this->load->view('base/footer');
    }

    public function list_jadwal() {
        $data['title']='Jadwal.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/list-jadwal', $data);
        $this->load->view('base/footer');
    }

    public function jadwal() {
        $data['title']='Jadwal.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/jadwal', $data);
        $this->load->view('base/footer');
    }

    public function ubah_jadwal() {
        $data['title']='Jadwal.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-jadwal', $data);
        $this->load->view('base/footer');
    }

    public function list_nilai() {
        $data['title']='Nilai.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/list-nilai', $data);
        $this->load->view('base/footer');
    }

    public function nilai() {
        $data['title']='Nilai.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/nilai', $data);
        $this->load->view('base/footer');
    }

    public function pengaturan_data() {
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan-data', $data);
        $this->load->view('base/footer');
    }

    public function ubah_data() {
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-data', $data);
        $this->load->view('base/footer');
    }

    public function pengaturan() {
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan', $data);
        $this->load->view('base/footer');
    }

}//end class