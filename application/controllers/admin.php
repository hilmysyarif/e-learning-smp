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
        $data['guru']=$this->m_guru->tampil_data_guru();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/list-guru', $data);
        $this->load->view('base/footer');
    }

    public function detail_guru() {
        $id = $this->uri->segment(3);
        $data['title']='Guru.';
        $data['guru']=$this->m_guru->tampil_data_guru_by_id($id);
        $this->load->view('base/header', $data);
        $this->body_admin('admin/detail-guru', $data);
        $this->load->view('base/footer');
    }

    public function siswa() {
        $data['title']='Siswa.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/siswa', $data);
        $this->load->view('base/footer');
    }

    public function list_siswa() {
        $data['title']='Siswa.';
        $data['siswa']=$this->m_siswa->tampil_data_siswa();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/list-siswa', $data);
        $this->load->view('base/footer');
    }

    public function detail_siswa() {
        $id = $this->uri->segment(3);
        $data['title']='Guru.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id($id);
        $this->load->view('base/header', $data);
        $this->body_admin('admin/detail-siswa', $data);
        $this->load->view('base/footer');
    }

    public function ubah_siswa() {
        $id = $this->uri->segment(3);
        $data['title']='Guru.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id($id);
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-siswa', $data);
        $this->load->view('base/footer');
    }

    public function list_jadwal() {
        $data['title']='Jadwal.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        // $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id('0355','8884','0981');
        $this->load->view('base/header', $data);
        $this->body_admin('admin/list-jadwal', $data);
        $this->load->view('base/footer');
    }

    public function jadwal() {
        $data['title']='Jadwal.';
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['hari'] = $this->m_admin->tampil_data_hari();
        $data['jam'] = $this->m_admin->tampil_data_jam();
        $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
        $data['ruang'] = $this->m_admin->tampil_data_ruang();
        $data['guru'] = $this->m_admin->tampil_data_guru();
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
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['hari'] = $this->m_admin->tampil_data_hari();
        $data['jam'] = $this->m_admin->tampil_data_jam();
        $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
        $data['ruang'] = $this->m_admin->tampil_data_ruang();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan-data', $data);
        $this->load->view('base/footer');
    }

    public function ubah_tahun_ajaran() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Tahun Ajaran.';
        // $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran_by_id($id_tahun_ajaran);
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-tahun-ajaran', $data);
        $this->load->view('base/footer');
    }

    public function ubah_semester() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Semester.';

        $data['semester'] = $this->m_admin->tampil_data_semester();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-semester', $data);
        $this->load->view('base/footer');
    }

    public function ubah_kelas() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Kelas.';

        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-kelas', $data);
        $this->load->view('base/footer');
    }

    public function ubah_hari() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Hari.';

        $data['hari'] = $this->m_admin->tampil_data_hari();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-hari', $data);
        $this->load->view('base/footer');
    }

    public function ubah_jam() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Jam.';

        $data['jam'] = $this->m_admin->tampil_data_jam();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-jam', $data);
        $this->load->view('base/footer');
    }


    public function ubah_pelajaran() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Pelajaran.';

        $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-pelajaran', $data);
        $this->load->view('base/footer');
    }


    public function ubah_ruang() {
        // $id_tahun_ajaran = $_GET('id');
        $data['title']='Ubah Ruang.';

        $data['ruang'] = $this->m_admin->tampil_data_ruang();
        $this->load->view('base/header', $data);
        $this->body_admin('admin/ubah-ruang', $data);
        $this->load->view('base/footer');
    }

    public function pengaturan() {
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan', $data);
        $this->load->view('base/footer');
    }

}//end class