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
        if($this->session->userdata('login_admin')){
            $id_tentang_kami = 1;
            $id_kontak = 2;
            $data['title']='Selamat Datang.';
            $data['tentang_kami']= $this->m_admin->tampil_data_tentang_kami($id_tentang_kami);
            $data['kontak']= $this->m_admin->tampil_data_hubungi_kami($id_kontak);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-halaman', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function data_halaman() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $id_tentang_kami = 1;
            $id_kontak = 2;
            $id_sejarah = 3;
            $id_visi_misi = 4;
            $data['title']='Selamat Datang.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['tentang_kami']= $this->m_admin->tampil_data_tentang_kami($id_tentang_kami);
            $data['visi_misi']= $this->m_admin->tampil_data_visi_misi($id_visi_misi);
            $data['sejarah']= $this->m_admin->tampil_data_sejarah($id_sejarah);
            $data['kontak']= $this->m_admin->tampil_data_hubungi_kami($id_kontak);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-halaman', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }


    public function data_guru() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            //untuk pagination
            $config['base_url'] = site_url('admin/data_guru');
            $config['total_rows'] = $this->db->get('guru')->num_rows();
            $config['per_page'] = 20;
            // $config['uri_segment'] = 3; sudah di ganti $this->uri->segment(3); sebagai $offset

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
            // jika ada pencarian atau tidak
            if(isset($_POST['q'])){
                $data['kata_kunci'] = $this->input->post('kata_kunci');
            }else{
                $data['kata_kunci'] = $this->input->post('kata_kunci');
            }
            $data['title']='Guru.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['guru']=$this->m_guru->tampil_data_guru($config['per_page'], $this->uri->segment(3), $data['kata_kunci']);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-guru', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function data_siswa() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            //untuk pagination
            $config['base_url'] = site_url('admin/data_siswa');
            $config['total_rows'] = $this->db->get('siswa')->num_rows();
            $config['per_page'] = 20;
            // $config['uri_segment'] = 3; sudah di ganti $this->uri->segment(3); sebagai $offset

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
            // jika ada pencarian atau tidak
            if(isset($_POST['q'])){
                $data['kata_kunci'] = $this->input->post('kata_kunci');
            }else{
                $data['kata_kunci'] = $this->input->post('kata_kunci');
            }
            $data['title']='Siswa.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['siswa']=$this->m_siswa->tampil_data_siswa($config['per_page'], $this->uri->segment(3), $data['kata_kunci']);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-siswa', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function data_jadwal() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['title']='Jadwal.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['hari'] = $this->m_admin->tampil_data_hari();
            $data['jam'] = $this->m_admin->tampil_data_jam();
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['ruang'] = $this->m_admin->tampil_data_ruang();
            $data['guru'] = $this->m_admin->tampil_data_guru();

            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-jadwal', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }  
    }

    public function data_nilai() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['title']='Nilai.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-nilai', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function data_sistem() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['title']='Data Sistem.';
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);

            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['hari'] = $this->m_admin->tampil_data_hari();
            $data['jam'] = $this->m_admin->tampil_data_jam();
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['ruang'] = $this->m_admin->tampil_data_ruang();

            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data-sistem', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function detail_siswa() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']='Guru.';
            $id = $this->uri->segment(3);
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id($id);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/detail-siswa', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }
    
    public function detail_guru() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']='Guru.';
            $id = $this->uri->segment(3);
            $data['guru']=$this->m_guru->tampil_data_guru_by_id($id);
            $data['siswa']=$this->m_siswa->tampil_data_siswa_by_id($id);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/detail-guru', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_berita() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']='Selamat Datang.';
            $id=$this->uri->segment(3);
            $data['berita']=$this->m_user->tampil_data_berita_by_id($id);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-berita', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }
    
    public function ubah_informasi() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']='Selamat Datang.';
            $id=$this->uri->segment(3);
            $data['informasi']=$this->m_user->tampil_data_informasi_by_id($id);
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-informasi', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    // public function informasi_penting() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Informasi Penting.';
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/informasi', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function psb() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Penerimaan Siswa Baru.';
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/psb', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function kontak() {
    //     if($this->session->userdata('login_admin')){
    //         $id=2;
    //         $data['title']='Kontak.';
    //         $data['kontak']= $this->m_admin->tampil_data_halaman_statis($id);
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/kontak', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function tentang_kami() {
    //     if($this->session->userdata('login_admin')){
    //         $id=1;
    //         $data['title']='Tentang Kami.';
    //         $data['tentang_kami']= $this->m_admin->tampil_data_halaman_statis($id);
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/tentang-kami', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function guru() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Guru.';
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/guru', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function list_guru() {
    //     if($this->session->userdata('login_admin')){
    //         //untuk pagination
    //         $config['base_url'] = site_url('admin/list_guru');
    //         $config['total_rows'] = $this->db->get('guru')->num_rows();
    //         $config['per_page'] = 20;
    //         // $config['uri_segment'] = 3; sudah di ganti $this->uri->segment(3); sebagai $offset

    //         //twitter pagination
    //         $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
    //         $config['full_tag_close'] = '</ul>';
    //         $config['num_tag_open'] = '<li>';
    //         $config['num_tag_close'] = '</li>';
    //         $config['cur_tag_open'] = '<li class="active"><span>';
    //         $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
    //         $config['prev_tag_open'] = '<li>';
    //         $config['prev_tag_close'] = '</li>';
    //         $config['next_tag_open'] = '<li>';
    //         $config['next_tag_close'] = '</li>';
    //         $config['first_link'] = '&laquo;';
    //         $config['prev_link'] = '&lsaquo;';
    //         $config['last_link'] = '&raquo;';
    //         $config['next_link'] = '&rsaquo;';
    //         $config['first_tag_open'] = '<li>';
    //         $config['first_tag_close'] = '</li>';
    //         $config['last_tag_open'] = '<li>';
    //         $config['last_tag_close'] = '</li>';
    //         $this->pagination->initialize($config);
    //         $data['pagination'] = $this->pagination->create_links();
    //         // jika ada pencarian atau tidak
    //         if(isset($_POST['q'])){
    //             $data['kata_kunci'] = $this->input->post('kata_kunci');
    //         }else{
    //             $data['kata_kunci'] = $this->input->post('kata_kunci');
    //         }
    //         $data['title']='Guru.';
    //         $data['guru']=$this->m_guru->tampil_data_guru($config['per_page'], $this->uri->segment(3), $data['kata_kunci']);
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/list-guru', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function siswa() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Siswa.';
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/siswa', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function list_siswa() {
    //     if($this->session->userdata('login_admin')){
    //         //untuk pagination
    //         $config['base_url'] = site_url('admin/list_siswa');
    //         $config['total_rows'] = $this->db->get('siswa')->num_rows();
    //         $config['per_page'] = 20;
    //         // $config['uri_segment'] = 3; sudah di ganti $this->uri->segment(3); sebagai $offset

    //         //twitter pagination
    //         $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
    //         $config['full_tag_close'] = '</ul>';
    //         $config['num_tag_open'] = '<li>';
    //         $config['num_tag_close'] = '</li>';
    //         $config['cur_tag_open'] = '<li class="active"><span>';
    //         $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
    //         $config['prev_tag_open'] = '<li>';
    //         $config['prev_tag_close'] = '</li>';
    //         $config['next_tag_open'] = '<li>';
    //         $config['next_tag_close'] = '</li>';
    //         $config['first_link'] = '&laquo;';
    //         $config['prev_link'] = '&lsaquo;';
    //         $config['last_link'] = '&raquo;';
    //         $config['next_link'] = '&rsaquo;';
    //         $config['first_tag_open'] = '<li>';
    //         $config['first_tag_close'] = '</li>';
    //         $config['last_tag_open'] = '<li>';
    //         $config['last_tag_close'] = '</li>';
    //         $this->pagination->initialize($config);
    //         $data['pagination'] = $this->pagination->create_links();
    //         // jika ada pencarian atau tidak
    //         if(isset($_POST['q'])){
    //             $data['kata_kunci'] = $this->input->post('kata_kunci');
    //         }else{
    //             $data['kata_kunci'] = $this->input->post('kata_kunci');
    //         }
    //         $data['title']='Siswa.';
    //         $data['siswa']=$this->m_siswa->tampil_data_siswa($config['per_page'], $this->uri->segment(3), $data['kata_kunci']);
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/list-siswa', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }


    // public function list_jadwal() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Jadwal.';
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/list-jadwal', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function jadwal() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Jadwal.';
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
    //         $data['hari'] = $this->m_admin->tampil_data_hari();
    //         $data['jam'] = $this->m_admin->tampil_data_jam();
    //         $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
    //         $data['ruang'] = $this->m_admin->tampil_data_ruang();
    //         $data['guru'] = $this->m_admin->tampil_data_guru();
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/jadwal', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function ubah_jadwal() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Jadwal.';
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/ubah-jadwal', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function nilai() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Nilai.';
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/nilai', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function list_nilai() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Nilai.';
    //         $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/list-nilai', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    // public function pengaturan_data() {
    //     if($this->session->userdata('login_admin')){
    //         $data['title']='Pengaturan.';
    //         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
    //         $data['semester'] = $this->m_admin->tampil_data_semester();
    //         $data['kelas'] = $this->m_admin->tampil_data_kelas();
    //         $data['hari'] = $this->m_admin->tampil_data_hari();
    //         $data['jam'] = $this->m_admin->tampil_data_jam();
    //         $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
    //         $data['ruang'] = $this->m_admin->tampil_data_ruang();
    //         $this->load->view('base/header', $data);
    //         $this->body_admin('admin/pengaturan-data', $data);
    //         $this->load->view('base/footer');
    //     }else{
    //         redirect('user');
    //     }
    // }

    public function ubah_tahun_ajaran() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Tahun Ajaran.';
            // $data['tahun_ajaran']=$this->m_admin->tampil_data_tahun_ajaran_by_id($id_tahun_ajaran);
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-tahun-ajaran', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_semester() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Semester.';

            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-semester', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_kelas() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Kelas.';

            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-kelas', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_hari() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Hari.';

            $data['hari'] = $this->m_admin->tampil_data_hari();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-hari', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function ubah_jam() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Jam.';

            $data['jam'] = $this->m_admin->tampil_data_jam();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-jam', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }


    public function ubah_pelajaran() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Pelajaran.';

            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-pelajaran', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }


    public function ubah_ruang() {
        if($this->session->userdata('login_admin')){
            $id_admin= $this->session->userdata['login_admin']['email'];
            $data['admin']= $this->m_admin->tampil_data_admin_by_session($id_admin);
            // $id_tahun_ajaran = $_GET('id');
            $data['title']='Ubah Ruang.';

            $data['ruang'] = $this->m_admin->tampil_data_ruang();
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/ubah-ruang', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

    public function pengaturan() {
        if($this->session->userdata('login_admin')){
            
            $id_admin = $this->session->userdata['login_admin']['email'];
            $data['admin']=$this->m_admin->tampil_data_admin_by_session($id_admin);

            $data['title']='Pengaturan.';
            $data['slides']=$this->m_admin->tampil_data_slides();
            $this->load->view('base/header', $data);
            $this->body_admin('admin/pengaturan', $data);
            $this->load->view('base/footer');
        }else{
            redirect('user');
        }
    }

}//end class