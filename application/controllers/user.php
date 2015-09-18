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
    }

    public function index() {
        $data['title']='Selamat Datang.';
        //untuk pagination
        $config['base_url'] = site_url('user');
        $config['total_rows'] = $this->db->get('berita')->num_rows();
        $config['per_page'] = 2;
        $config['uri_segment'] = 2;

        //twitter pagination
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = '&laquo;';
        $config['prev_link'] = '&lsaquo;';
        $config['last_link'] = '&raquo;';
        $config['next_link'] = '&rsaquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/berita', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_berita() {
        $id = $this->uri->segment(3);
        $data['title']='Detail Berita.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-berita', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-berita', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-berita', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-berita', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_info_penting() {
        $id=$this->uri->segment(3);
        $data['title']='Detail Informasi Penting.';
        if($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['detail_informasi']=$this->m_user->tampil_data_informasi_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-info-penting', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['detail_informasi']=$this->m_user->tampil_data_informasi_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-info-penting', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['detail_informasi']=$this->m_user->tampil_data_informasi_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-info-penting', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['detail_informasi']=$this->m_user->tampil_data_informasi_by_id($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/detail-info-penting', $data);
            $this->load->view('base/footer');
        }
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
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
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
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
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

    public function e_learning() {
        $data['title']= 'E-Learning.';
        //untuk pagination
        $config['base_url'] = site_url('user/e_learning');
        $config['total_rows'] = $this->db->get('materi_umum')->num_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        //twitter pagination
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = '&laquo;';
        $config['prev_link'] = '&lsaquo;';
        $config['last_link'] = '&raquo;';
        $config['next_link'] = '&rsaquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['elearning']=$this->m_guru->tampil_data_elearning($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['elearning']=$this->m_guru->tampil_data_elearning($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['elearning']=$this->m_guru->tampil_data_elearning($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['elearning']=$this->m_guru->tampil_data_elearning($config['per_page'], $config['uri_segment']);
            $this->load->view('base/header', $data);
            $this->body_user('user/e-learning', $data);
            $this->load->view('base/footer');
        }
    }

    public function detail_data() {
        $id=$this->input->get('id');
        $guru=$this->input->get('gk');
        $data['title']= 'Detail Data E-Learning.';
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['get_nik'] = $this->input->get('gk');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($guru);
            
            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_elearning']=$this->m_guru->tampil_data_elearning_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('user/detail-data', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['get_nik'] = $this->input->get('gk');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_elearning']=$this->m_guru->tampil_data_elearning_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('user/detail-data', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);

            $data['get_nik'] = $this->input->get('gk');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($id_guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_elearning']=$this->m_guru->tampil_data_elearning_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('user/detail-data', $data);
            $this->load->view('base/footer');
        }else{
            $data['get_nik'] = $this->input->get('gk');
            $data['nik']=$this->m_guru->tampil_nik_guru_by_id($guru);

            $data['detail_guru']=$this->m_guru->tampil_data_guru_by_id($guru);
            $data['detail_elearning']=$this->m_guru->tampil_data_elearning_by_id($id);
            $this->load->view('base/header', $data);
            $this->login_guru('user/detail-data', $data);
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
        $id=2;
        $data['title']= 'Kontak.';
        
        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['kontak']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['kontak']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['kontak']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }else{
            $data['kontak']= $this->m_admin->tampil_data_halaman_statis($id);
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $this->load->view('base/header', $data);
            $this->body_user('user/kontak', $data);
            $this->load->view('base/footer');
        }
    }

    public function tentang_kami() {
        $id=1;
        $data['title']= 'Tentang Kami.';

        if($this->session->userdata('login_siswa')){
            $id_siswa = $this->session->userdata['login_siswa']['nis'];
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['tentang_kami']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_wali')){
            $no_ktp = $this->session->userdata['login_wali']['no_ktp'];
            $id_siswa = $this->m_wali->tampil_data_nis_by_no_ktp($no_ktp);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_session($id_siswa);

            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['tentang_kami']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }elseif($this->session->userdata('login_guru')){
            $id_guru = $this->session->userdata['login_guru']['nik'];
            $data['guru']=$this->m_guru->tampil_data_guru_by_session($id_guru);
            
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['tentang_kami']= $this->m_admin->tampil_data_halaman_statis($id);
            $this->load->view('base/header', $data);
            $this->body_user('user/tentang-kami', $data);
            $this->load->view('base/footer');
        }else{
            $data['informasi']=$this->m_user->tampil_data_informasi();
            $data['tentang_kami']= $this->m_admin->tampil_data_halaman_statis($id);
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