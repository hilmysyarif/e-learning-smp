<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';

class Siswa extends Base {
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
        $data['title']= 'Biodata.';
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id();
        $this->load->view('base/header', $data);
        $this->login_siswa('siswa/biodata', $data);
        $this->load->view('base/footer');
    }

    public function nilai_ujian() {
        $data['title']= 'Nilai Ujian.';
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id();
        $this->load->view('base/header', $data);
        $this->login_siswa('siswa/nilai-ujian', $data);
        $this->load->view('base/footer');
    }

    public function jadwal() {
        $data['title']= 'Jadwal.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id();
        $this->load->view('base/header', $data);
        $this->login_siswa('siswa/jadwal', $data);
        $this->load->view('base/footer');
    }

}//end class