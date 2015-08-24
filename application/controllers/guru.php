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

    public function biodata() {
    	$data['title']='Selamat Datang.';
    	$this->load->view('base/header', $data);
        $this->login_guru('guru/biodata', $data);
        $this->load->view('base/footer');
    }

    public function materi_pelajaran() {
    	$data['title']='Mata Pelajaran.';
    	$this->load->view('base/header', $data);
        $this->login_guru('guru/materi_pelajaran', $data);
        $this->load->view('base/footer');
    }

    public function pengumuman() {
    	$data['title']='pengumuman.';
    	$this->load->view('base/header', $data);
        $this->login_guru('guru/pengumuman', $data);
        $this->load->view('base/footer');
    }

    public function nilai_ujian() {
        $data['title']='Nilai Ujian.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/nilai-ujian', $data);
        $this->load->view('base/footer');
    }

    public function upload() {
        $data['title']='Upload.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/upload', $data);
        $this->load->view('base/footer');
    }

    public function pengaturan() {
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/pengaturan', $data);
        $this->load->view('base/footer');
    }

    public function detail_materi() {
        $data['title']='Detail Materi Pelajaran.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/detail-materi-pelajaran', $data);
        $this->load->view('base/footer');
    }

    public function ubah_materi() {
        $data['title']='Ubah Materi Pelajaran.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/ubah-materi-pelajaran', $data);
        $this->load->view('base/footer');
    }

    public function detail_nilai() {
        $data['title']='Detail Nilai Ujian.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/detail-nilai-ujian', $data);
        $this->load->view('base/footer');
    }

    public function ubah_nilai() {
        $data['title']='Ubah Nilai Ujian.';
        $this->load->view('base/header', $data);
        $this->login_guru('guru/ubah-nilai-ujian', $data);
        $this->load->view('base/footer');
    }

    public function keluar() {
    	$data['title']='Keluar.';
    	$this->load->view('base/header', $data);
        $this->login_guru('guru/biodata', $data);
        $this->load->view('base/footer');
    }

}//end class