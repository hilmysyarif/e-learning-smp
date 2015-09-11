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

    public function index() {
        $data['title']= 'Biodata.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $this->load->view('base/header', $data);
            $this->login_siswa('siswa/biodata', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function nilai_ujian() {
        $data['title']= 'Nilai Ujian.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            $data['semester']=$this->m_admin->tampil_data_semester();
            $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran();
            $this->load->view('base/header', $data);
            $this->login_siswa('siswa/nilai-ujian', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function jadwal() {
        $data['title']= 'Jadwal.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $kelas = $this->session->userdata['login_siswa']['id_kelas'];
            $semester = $this->session->userdata['login_siswa']['id_semester'];
            $tahun_ajaran = $this->session->userdata['login_siswa']['id_tahun_ajaran'];
            
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            $data['jadwal']=$this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
            $this->load->view('base/header', $data);
            $this->login_siswa('siswa/jadwal', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_biodata() {
        $data['title']= 'Ubah Biodata.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['detail_siswa']=$this->m_siswa->tampil_data_siswa_by_id($id_siswa);
            $this->load->view('base/header', $data);
            $this->login_siswa('siswa/ubah-biodata', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }


}//end class