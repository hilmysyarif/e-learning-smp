<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_admin extends Base {
// class P_admin extends CI_Controller {
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

    public function tambah_data_informasi() {
        if($this->session->userdata('login_admin')) {
            $simpan=$this->input->post('simpan');
            $judul=$this->input->post('judul');
            $isi=$this->input->post('isi');
            $now=date('y-m-d h-i-s');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'tgl_upload' => $now
                );
            $this->m_user->tambah_data_informasi($data);
            $sukses = 'Data Berhasil Disimpan';
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_halaman') . "'";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function tambah_data_berita() {
        if($this->session->userdata('login_admin')) {
            $now=date('y-m-d- h-i-s');
            $gambar=$_FILES['gambar'];
            $nama_gambar = str_replace(' ', '_', $gambar['name']);
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'gambar' => $nama_gambar,
                'tgl_upload' => $now,
                'tgl_edit' => $now,
                );

            //validasi gambar
            $config['upload_path'] = './resource/img/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '5024';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['overwrite'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);

            $upload = $this->upload->do_upload('gambar');
            if($upload){
                $this->m_admin->tambah_data_berita($data);
                $sukses = 'Data Berhasil Disimpan';
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . site_url('admin/data_halaman') . "'";
                echo '</script>';
            }else{
                $gagal = 'Data Gagal Disimpan';
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . site_url('admin/data_halaman') . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function tambah_data_guru() {
        if($this->session->userdata('login_admin')) {
            $simpan = $this->input->post('simpan');
            $nik        = $this->input->post('nik');
            $nama        = $this->input->post('nama');
            $jenis_kelamin        = $this->input->post('jenis_kelamin');
            $alamat        = $this->input->post('alamat');
            $tempat_lahir        = $this->input->post('tempat_lahir');
            $tgl_lahir        = $this->input->post('tgl_lahir');
            $email        = $this->input->post('email');
            $telepon        = $this->input->post('telepon');
            $handphone        = $this->input->post('handphone');
            $now        = date('y-m-d h-i-s');
            $foto = $_FILES['foto'];
            $nama_foto = str_replace(' ', '_', $foto['name']);

            //validasi gambar
            $config['upload_path'] = './resource/img/photo/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '5024';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['overwrite'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            $data = array(
                'nik' => $nik,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'email' => $email,
                'tlp' => $telepon,
                'hp' => $handphone,
                'password' => md5($nik),
                'foto' => $nama_foto,
                'tgl_upload' => $now
                );
            if($simpan=="Simpan") {
                $upload = $this->upload->do_upload('foto');
                if($upload){
                    $this->m_admin->tambah_data_guru($data);
                }
                $sukses = 'Data Berhasil Disimpan';
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . site_url('admin/data_guru') . "'";
                echo '</script>';
            }else{
                $gagal = 'Data Gagal Disimpan';
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . site_url('admin/data_guru') . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function tambah_data_siswa() {
        if($this->session->userdata('login_admin')) {
            $simpan = $this->input->post('simpan');
            
            $string = '!@()8&^^%$#AsfsRTdWGaGghKOplkencKHBQKLSKNMKXCd&$*^032145876901234523567895323789012627898746090302983SKZBCJ7648595389090';
            $panjstr = 6;//jumlah karakter yang akan muncul
            $txtlt = strlen($string)-1;
            $pass = '';
            for($i=1; $i<=$panjstr; $i++){
             $pass .= $string[rand(0, $txtlt)];
            }

         // $text = '0321458769012345235678953237890126278987460903029837648595389090';
         //    $panj = 4;//jumlah karakter yang akan muncul
         //    $txtl = strlen($text)-1;
         //    $result = '';
         //    for($i=1; $i<=$panj; $i++){
         //     $result .= $text[rand(0, $txtl)];
         // }

         $nis = date('y'.'.'.'m'.'.'.'d'.'h'.'.'.'i'.'s');
         // $password = $pass;
         $foto = $_FILES['foto'];
         $nama_foto = str_replace(' ', '_', $foto['name']);//merename spasi gambar menjadi underscores
         $data['kelas'] = $this->m_admin->tampil_data_kelas();
         $data['semester'] = $this->m_admin->tampil_data_semester();
         $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

         $data = array(
            'no_ktp'    => $this->input->post('no_ktp'),
            // 'password'  => md5($password),
            'password'  => md5($this->input->post('no_ktp')),
            'nama'      => $this->input->post('nama_wali'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'email'     => $this->input->post('email'),
            'tlp'       => $this->input->post('telepon'),
            'hp'        => $this->input->post('handphone'),
            'tgl_upload'=> date('y-m-d h-i-s')
            );

         //validasi gambar
        $config['upload_path'] = './resource/img/photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = '5024';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';
        $config['overwrite'] = true;
        $this->load->library('upload');
        $this->upload->initialize($config);

         if($simpan=="Simpan") {
            $this->m_admin->tambah_data_wali($data);
            //mengambil tgl_upload terbaru
            $tgl_upload = $this->m_admin->ambil_data_wali_tgl_upload_terbaru();
            //mengambil no_ktp berdasarkan tgl_upload terbaru
            $no_ktp = $this->m_admin->ambil_data_wali_no_ktp_terbaru($tgl_upload);
            $data = array(
                'nis'             => $nis,
                // 'password'        => md5($password),
                // 'password'        => $password,
                'password'        => md5($nis),
                'nama'            => $this->input->post('nama'),
                'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                'tempat_lahir'    => $this->input->post('tempat_lahir'),
                'tgl_lahir'       => $this->input->post('tgl_lahir'),
                'alamat'          => $this->input->post('alamat'),
                'foto'            => $nama_foto,
                'tahun_masuk'     => $this->input->post('tahun_masuk'),
                'no_ktp'          => $no_ktp,
                'id_kelas'        => $this->input->post('kelas'),
                'id_semester'     => $this->input->post('semester'),
                'id_tahun_ajaran' => $this->input->post('tahun_ajaran')
                );
            $this->m_admin->tambah_data_siswa($data);
            // setelah data tersimpan foto di upload ke folder
            $this->upload->do_upload('foto');
            $sukses = 'Data Berhasil Disimpan';
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_siswa') . "'";
            echo '</script>';
        }else{
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['nis']            = $this->input->post('nis');
            // $data['password']       = $this->input->post('password');
            $data['nama']           = $this->input->post('nama');
            $data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
            $data['tempat_lahir']   = $this->input->post('tempat_lahir');
            $data['tgl_lahir']      = $this->input->post('tgl_lahir');
            $data['alamat']         = $this->input->post('alamat');
            $data['foto']           = $this->input->post('foto');
            $gagal                  = 'Data Gagal Disimpan';
            echo '<script>';
            echo "alert('".$gagal."');";
            echo "window.location='" . site_url('admin/data_siswa') . "'";
            echo '</script>';
                // jika menggunakan redirect atau link post akan hilang
            $data['title']='Siswa.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/siswa', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_tahun_ajaran() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'tahun_ajaran'      => $this->input->post('tahun_ajaran'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_tahun_ajaran($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_semester() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'semester'      => $this->input->post('semester'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_semester($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_kelas() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'kelas'      => $this->input->post('kelas'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_kelas($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_hari() {
    if($this->session->userdata('login_admin')) {
         $now                = date('y-m-d h-i-s');
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'hari'      => $this->input->post('hari'),
            'tgl_upload'=> $now
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_hari($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_jam() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'jam'      => $this->input->post('jam'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_jam($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_pelajaran() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'pelajaran'      => $this->input->post('pelajaran'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_pelajaran($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

public function tambah_data_ruang() {
    if($this->session->userdata('login_admin')) {
         $tambah             = $this->input->post('tambah');
         $sukses             = 'Data Berhasil Disimpan';
         $gagal              = 'Data Gagal Disimpan';
         $data = array(
            'ruang'      => $this->input->post('ruang'),
            );
         if(isset($tambah)) {
            $this->m_admin->tambah_data_ruang($data);
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/data_sistem') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo '</script>';
            $data['title']='Pengaturan.';
            $this->load->view('base/header', $data);
            $this->body_admin('admin/data_sistem', $data);
            $this->load->view('base/footer');
        }
    }else{
            redirect('user');
    }
}

    public function tambah_data_jadwal() {
        if($this->session->userdata('login_admin')) {
            $text = '03214587690123452356s78953237890126278987460903029837648595389090';
            $panj = 4;//jumlah karakter yang akan muncul
            $txtl = strlen($text)-1;
            $result = '';
            for($i=1; $i<=$panj; $i++){
                $result .= $text[rand(0, $txtl)];
            }

            $id                 = $result;
            $tambah             = $this->input->post('tambah');
            $sukses             = 'Data Berhasil Disimpan';
            $gagal              = 'Data Gagal Disimpan';

            if($tambah=="Simpan") {

                $kelas = $this->input->post('kelas');
                $semester = $this->input->post('semester');
                $tahun_ajaran = $this->input->post('tahun_ajaran');
                $hari = $this->input->post('hari');
                
                $data = array(
                    'id_kelas'          => $this->input->post('kelas'),
                    'id_semester'       => $this->input->post('semester'),
                    'id_tahun_ajaran'   => $this->input->post('tahun_ajaran'),
                    'id_hari'           => $this->input->post('hari')
                    );
                $this->m_admin->tambah_data_jadwal($data);//tambah data jadwal
                $id_jadwal = $this->m_admin->ambil_data_jadwal_id_jadwal_terbaru();

                for ($i=1; $i<=7; $i++) {
                    $jam = $this->input->post('jam_'.$i);
                    $pelajaran = $this->input->post('pelajaran_'.$i);
                    $ruang = $this->input->post('ruang_'.$i);
                    $guru = $this->input->post('guru_'.$i);

                    if(!empty($jam) && !empty($pelajaran) && !empty($ruang) && !empty($guru)) {

                        $data2 = array(
                            'id_jadwal'     => $id_jadwal,
                            'id_jam'        => $jam,
                            'id_pelajaran'  => $pelajaran,
                            'id_ruang'      => $ruang,
                            'nik'           => $guru
                            );
                        $this->db->insert('detail_jadwal', $data2); //insert $data ke tabel detail_jadwal
                    }
                }//end for
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . site_url('admin/data_jadwal') . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo '</script>';
                $data['title']='Pengaturan.';
                $data['kelas'] = $this->m_admin->tampil_data_kelas();
                $data['semester'] = $this->m_admin->tampil_data_semester();
                $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
                $data['hari'] = $this->m_admin->tampil_data_hari();
                $data['jam'] = $this->m_admin->tampil_data_jam();
                $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
                $data['ruang'] = $this->m_admin->tampil_data_ruang();
                $data['guru'] = $this->m_admin->tampil_data_guru();
                $this->load->view('base/header', $data);
                $this->body_admin('admin/data-jadwal', $data);
                $this->load->view('base/footer');
            }
        }else{
            redirect('user');
        }
    }

    public function tambah_data_nilai_siswa() {
        if($this->session->userdata('login_admin')) {
            $kelas = $this->input->post('kelas');
            $semester = $this->input->post('semester');
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $pelajaran = $this->input->post('pelajaran');
            $total_data = $this->input->post('total_data');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');

            $sukses             = 'Data Berhasil Disimpan';
            $gagal              = 'Data Gagal Disimpan';

            $cek_data = $this->m_admin->tampil_data_nilai_siswa_by_id($pelajaran, $kelas, $semester, $tahun_ajaran);
            
            if($simpan == "Simpan" && empty($cek_data)) {
                for ($i=1; $i<=$total_data; $i++) {
                    $nis = $this->input->post('nis_'.$i);
                    $nilai = $this->input->post('nilai_'.$i);

                    $data = array(
                        'nilai' => $nilai,
                        'nis' => $nis,
                        'id_pelajaran' => $pelajaran,
                        'id_kelas' => $kelas,
                        'id_semester' => $semester,
                        'id_tahun_ajaran' => $tahun_ajaran,
                        'tgl_upload' => $now
                    );
                    $this->db->insert('nilai', $data);
                }//end for
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . site_url('admin/data_nilai') . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . site_url('admin/data_nilai') . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }
    
    public function ubah_data_visi_misi() {
        if($this->session->userdata('login_admin')) {
            $id=$this->input->get('id');
            $isi = $this->input->post('isi');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');
            $sukses             = 'Data Berhasil Diubah';
            $gagal              = 'Data Gagal Diubah';
            if(isset($simpan)){
                $data = array(
                    'isi' => $isi,
                    'tgl_upload' => $now
                    );
                $this->db->where('id', $id);
                $this->db->update('halaman_statis', $data);
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_sejarah() {
        if($this->session->userdata('login_admin')) {
            $id=$this->input->get('id');
            $isi = $this->input->post('isi');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');
            $sukses             = 'Data Berhasil Diubah';
            $gagal              = 'Data Gagal Diubah';
            if(isset($simpan)){
                $data = array(
                    'isi' => $isi,
                    'tgl_upload' => $now
                    );
                $this->db->where('id', $id);
                $this->db->update('halaman_statis', $data);
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_kontak() {
        if($this->session->userdata('login_admin')) {
            $id=$this->input->get('id');
            $isi = $this->input->post('isi');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');
            $sukses             = 'Data Berhasil Diubah';
            $gagal              = 'Data Gagal Diubah';
            if(isset($simpan)){
                $data = array(
                    'isi' => $isi,
                    'tgl_upload' => $now
                    );
                $this->db->where('id', $id);
                $this->db->update('halaman_statis', $data);
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_tentang_kami() {
        if($this->session->userdata('login_admin')) {
            $id=$this->input->get('id');
            $isi = $this->input->post('isi');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');
            $sukses             = 'Data Berhasil Diubah';
            $gagal              = 'Data Gagal Diubah';
            if(isset($simpan)){
                $data = array(
                    'isi' => $isi,
                    'tgl_upload' => $now
                    );
                $this->db->where('id', $id);
                $this->db->update('halaman_statis', $data);
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . $this->agent->referrer() . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_nilai_siswa() {
        if($this->session->userdata('login_admin')) {
            $kelas = $this->input->post('kelas');
            $semester = $this->input->post('semester');
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $pelajaran = $this->input->post('pelajaran');
            $total_data = $this->input->post('total_data');
            $simpan = $this->input->post('simpan');
            $now = date('y-m-d h-i-s');

            $sukses             = 'Data Berhasil Disimpan';
            $gagal              = 'Data Gagal Disimpan';

            if($simpan == "Simpan") {
                for ($i=1; $i<=$total_data; $i++) {
                    $nis = $this->input->post('nis_'.$i);
                    $nilai = $this->input->post('nilai_'.$i);

                    $data = array(
                        'nilai' => $nilai,
                        'nis' => $nis,
                        'id_pelajaran' => $pelajaran,
                        'id_kelas' => $kelas,
                        'id_semester' => $semester,
                        'id_tahun_ajaran' => $tahun_ajaran,
                        'tgl_upload' => $now
                    );
                    $this->db->where('nis', $nis);
                    $this->db->update('nilai', $data);
                }//end for
                echo '<script>';
                echo "alert('".$sukses."');";
                echo "window.location='" . site_url('admin/data_nilai') . "'";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('".$gagal."');";
                echo "window.location='" . site_url('admin/data_nilai') . "'";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_berita() {
        if($this->session->userdata('login_admin')) {
            $id=$this->uri->segment(3);
            $simpan=$this->input->post('simpan');
            $gambar=$_FILES['gambar'];
            $nama_gambar=str_replace(' ', '_', $gambar['name']);
            $judul=$this->input->post('judul');
            $isi=$this->input->post('isi');
            $now=date('y-m-d h-i-s');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'tgl_edit' => $now
                );
            $data_gambar = array('gambar' => $nama_gambar);
            //validasi gambar
            $config['upload_path'] = './resource/img/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '5024';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['overwrite'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);

            $upload = $this->upload->do_upload('gambar');
            if($upload){
                $this->db->where('id', $id);
                $this->db->update('berita', $data);
                $this->db->where('id', $id);
                $this->db->update('berita', $data_gambar);
            }else{
                $this->db->where('id', $id);
                $this->db->update('berita', $data);
            }
            $sukses = 'Data Berhasil Diubah';
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . $this->agent->referrer() . "'";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function ubah_data_informasi() {
        if($this->session->userdata('login_admin')) {
            $id=$this->uri->segment(3);
            $simpan=$this->input->post('simpan');
            $judul=$this->input->post('judul');
            $isi=$this->input->post('isi');
            $now=date('y-m-d h-i-s');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'tgl_edit' => $now
                );

            $this->db->where('id', $id);
            $this->db->update('informasi', $data);

            $sukses = 'Data Berhasil Diubah';
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . $this->agent->referrer() . "'";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function ubah_data_tahun_ajaran() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $ubah = $this->input->post('ubah');
            $data = array(
                'tahun_ajaran' => $tahun_ajaran
                );
            if($ubah=='Ubah'){
                $this->db->where('id_tahun_ajaran', $id);
                $this->db->update('tahun_ajaran', $data);
                echo '<script>';
                echo "alert('Tahun Ajaran Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_tahun_ajaran') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_tahun_ajaran($id);
                echo '<script>';
                echo "alert('Tahun Ajaran Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_tahun_ajaran') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_semester() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $semester = $this->input->post('semester');
            $ubah = $this->input->post('ubah');
            $data = array(
                'semester' => $semester
                );
            if($ubah=='Ubah'){
                $this->db->where('id_semester', $id);
                $this->db->update('semester', $data);
                echo '<script>';
                echo "alert('Semester Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_semester') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_semester($id);
                echo '<script>';
                echo "alert('Semester Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_semester') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_kelas() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $kelas = $this->input->post('kelas');
            $ubah = $this->input->post('ubah');
            $data = array(
                'kelas' => $kelas
                );
            if($ubah=='Ubah'){
                $this->db->where('id_kelas', $id);
                $this->db->update('kelas', $data);
                echo '<script>';
                echo "alert('Kelas Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_kelas') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_kelas($id);
                echo '<script>';
                echo "alert('Kelas Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_kelas') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_hari() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $hari = $this->input->post('hari');
            $ubah = $this->input->post('ubah');
            $data = array(
                'hari' => $hari
                );
            if($ubah=='Ubah'){
                $this->db->where('id_hari', $id);
                $this->db->update('hari', $data);
                echo '<script>';
                echo "alert('Hari Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_hari') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_hari($id);
                echo '<script>';
                echo "alert('Hari Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_hari') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_jam() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $jam = $this->input->post('jam');
            $ubah = $this->input->post('ubah');
            $data = array(
                'jam' => $jam
                );
            if($ubah=='Ubah'){
                $this->db->where('id_jam', $id);
                $this->db->update('jam', $data);
                echo '<script>';
                echo "alert('Jam Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_jam') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_jam($id);
                echo '<script>';
                echo "alert('Jam Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_jam') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_pelajaran() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $pelajaran = $this->input->post('pelajaran');
            $ubah = $this->input->post('ubah');
            $data = array(
                'pelajaran' => $pelajaran
                );
            if($ubah=='Ubah'){
                $this->db->where('id_pelajaran', $id);
                $this->db->update('pelajaran', $data);
                echo '<script>';
                echo "alert('Pelajaran Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_pelajaran') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_pelajaran($id);
                echo '<script>';
                echo "alert('Pelajaran Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_pelajaran') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_ruang() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $ruang = $this->input->post('ruang');
            $ubah = $this->input->post('ubah');
            $data = array(
                'ruang' => $ruang
                );
            if($ubah=='Ubah'){
                $this->db->where('id_ruang', $id);
                $this->db->update('ruang', $data);
                echo '<script>';
                echo "alert('Ruang Berhasil Diubah.');";
                echo "window.location='" . site_url('admin/ubah_ruang') . "';";
                echo '</script>';
            }else{
                $this->m_admin->hapus_data_ruang($id);
                echo '<script>';
                echo "alert('Ruang Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/ubah_ruang') . "';";
                echo '</script>';
            }//end if
        }else{
            redirect('user');
        }
    }

    public function ubah_data_guru() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');

            $now = date('y-m-d h:i:s');
            $foto = $_FILES['foto'];
            $nama_foto = str_replace(' ', '_', $foto['name']);
            $nik        = $this->input->post('nik');
            $nama        = $this->input->post('nama');
            $tempat_lahir        = $this->input->post('tempat_lahir');
            $password        = $this->input->post('password');
            $tgl_lahir        = $this->input->post('tgl_lahir');
            $jenis_kelamin        = $this->input->post('jenis_kelamin');
            $alamat        = $this->input->post('alamat');
            $email        = $this->input->post('email');
            $telephone        = $this->input->post('telephone');
            $handphone        = $this->input->post('handphone');
            $ubah = $this->input->post('ubah');
            $hapus = $this->input->post('hapus');

            //validasi gambar
            $config['upload_path'] = './resource/img/photo/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '5024';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['overwrite'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);

            $data = array(
                'nik' => $nik,
                'nama'=> $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'email' => $email,
                'password' => $password,
                'tlp' => $telephone,
                'hp' => $handphone,
                'tgl_edit' => $now
                );
            $data_foto_guru = array('foto' => $nama_foto);
            if($ubah=="Ubah"){
                $upload = $this->upload->do_upload('foto');
                if($upload){
                    $this->db->where('nik', $id);
                    $this->db->update('guru', $data);
                    $this->db->where('nik', $id);
                    $this->db->update('guru', $data_foto_guru);
                }else{
                    $this->db->where('nik', $id);
                    $this->db->update('guru', $data);
                }
                echo '<script>';
                echo "alert('Guru Berhasil Diubah.');";
                echo "window.location='" . $this->agent->referrer() . "';";
                echo '</script>';
            }else{
                $this->m_guru->hapus_data_guru($id);
                echo '<script>';
                echo "alert('Guru Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/data_guru') . "';";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_siswa() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');

            $now = date('y-m-d h:i:s');
            $foto = $_FILES['foto'];
            $nama_foto = str_replace(' ', '_', $foto['name']);
            $nis        = $this->input->post('nis');
            $password_siswa = $this->input->post('password_siswa');
            $nama        = $this->input->post('nama');
            $tempat_lahir        = $this->input->post('tempat_lahir');
            $tgl_lahir        = $this->input->post('tgl_lahir');
            $tahun_masuk        = $this->input->post('tahun_masuk');
            $jenis_kelamin        = $this->input->post('jenis_kelamin');
            $alamat        = $this->input->post('alamat');
            $no_ktp        = $this->input->post('no_ktp');
            $nama_wali        = $this->input->post('nama_wali');
            $pekerjaan        = $this->input->post('pekerjaan');
            $email        = $this->input->post('email');
            $password_wali = $this->input->post('password_wali');
            $telephone        = $this->input->post('telephone');
            $handphone        = $this->input->post('handphone');
            $kelas        = $this->input->post('kelas');
            $semester        = $this->input->post('semester');
            $tahun_ajaran        = $this->input->post('tahun_ajaran');
            $ubah = $this->input->post('ubah');
            $hapus = $this->input->post('hapus');

            //validasi gambar
            $config['upload_path'] = './resource/img/photo/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '5024';
            // $config['max_width']  = '1024';
            // $config['max_height']  = '768';
            $config['overwrite'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);

            $data_siswa = array(
                'nis' => $nis,
                'password'=> $password_siswa,
                'nama'=> $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'tahun_masuk' => $tahun_masuk,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'id_kelas' => $kelas,
                'id_semester' => $semester,
                'id_tahun_ajaran' => $tahun_ajaran,
                'tgl_edit' => $now
                );
            $data_foto_siswa = array(
                'foto' => $nama_foto
                );
            $data_wali = array(
                'no_ktp' => $no_ktp,
                'password' => $password_wali,
                'nama' => $nama_wali,
                'pekerjaan' => $pekerjaan,
                'email' => $email,
                'tlp' => $telephone,
                'hp' => $handphone
                );

            $upload = $this->upload->do_upload('foto');
            if($ubah=="Ubah"){
                //ubah data siswa
                if($upload){
                    $this->db->where('nis', $id);
                    $this->db->update('siswa', $data_siswa);
                    $this->db->where('nis', $id);
                    $this->db->update('siswa', $data_foto_siswa);
                }else{
                    $this->db->where('nis', $id);
                    $this->db->update('siswa', $data_siswa);
                }
                
                //ambil tgl_edit terbaru dan no_ktp wali siswa yang baru diubah berdasarkan tgl_edit terbaru
                $tgl_edit = $this->m_siswa->ambil_data_siswa_tgl_edit_terbaru();
                $no_ktp_terbaru = $this->m_siswa->ambil_data_siswa_no_ktp_terbaru($tgl_edit);
                //ubah data wali berdasarkan no_ktp_terbaru
                $this->db->where('no_ktp', $no_ktp_terbaru);
                $this->db->update('wali', $data_wali);
                echo '<script>';
                echo "alert('Siswa Berhasil Diubah.');";
                echo "window.location='" . $this->agent->referrer() . "';";
                echo '</script>';
            }else{
                $this->m_siswa->hapus_data_siswa($id);
                echo '<script>';
                echo "alert('Siswa Berhasil Dihapus.');";
                echo "window.location='" . site_url('admin/data_siswa') . "';";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_data_slides() {
        if($this->session->userdata('login_admin')) {
            for ($n=1; $n<=5; $n++) { 
                $gambar = $_FILES['gambar_'.$n];
                $gambar = str_replace(' ', '_', $gambar['name']);//merename spasi gambar menjadi underscores
                $data = array('gambar' => $gambar);
                //validasi gambar
                $config['upload_path'] = './resource/img/slides/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_size'] = '5024';
                // $config['max_width']  = '1024';
                // $config['max_height']  = '768';
                // $config['file_name'] = substr(md5($name),15);
                $config['overwrite'] = true;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $sukses = 'Data Berhasil Diubah';
                $gagal = 'Data Gagal Diubah';
                $id_slides = $this->input->post('id_'.$n);
                $gambar_lama = $this->m_admin->tampil_data_slides_gambar_lama($id_slides);
                $file_gambar = './resource/img/slides/'.$gambar_lama;
                if($this->upload->do_upload('gambar_'.$n)){
                    unlink($file_gambar);
                    $this->db->where('id', $id_slides);
                    $this->db->update('slides', $data);
                    echo '<script>';
                    echo "alert('".$sukses."');";
                    echo "window.location='" . site_url('admin/data_halaman') . "';";
                    echo '</script>';
                }else{
                    echo '<script>';
                    // echo "alert('".$gagal."');";
                    echo "window.location='" . site_url('admin/data_halaman') . "';";
                    echo '</script>';
                }
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_email_admin() {
        if($this->session->userdata('login_admin')) {
            $email = $this->input->post('email');
            $simpan = $this->input->post('simpan');
            $data = array('email' => $email );
            if(!empty($email)) {
                $this->db->update('admin', $data);
                echo '<script>';
                echo "alert('Email Berhasil Diubah.');";
                echo "window.location='" . site_url('p_admin/keluar_admin') . "';";
                echo '</script>';
            }else{
                echo '<script>';
                echo "alert('Email Gagal Diubah.');";
                echo "window.location='" . $this->agent->referrer() . "';";
                echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_password_admin() {
        if($this->session->userdata('login_admin')) {
            $id=$this->input->get('id');
            $password_lama = md5($this->input->post('password_lama'));
            $password_baru = $this->input->post('password_baru');

            $this->form_validation->set_rules('password_lama', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password_baru', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password_baru]|xss_clean');
            $run = $this->form_validation->run();
            $true = $run == TRUE;

            $data = array('password' => md5($password_baru));
            //ambil data password guru
            $password = $this->m_admin->cek_password_admin_by_id($id);
            
            if($password_lama == $password && $true){
                    //ubah data siswa
                    $this->db->where('email', $id);
                    $this->db->update('admin', $data);
                    echo '<script>';
                    echo "alert('Password Berhasil Diubah.');";
                    echo "window.location='" . $this->agent->referrer() . "';";
                    echo '</script>';
                }else{
                    echo '<script>';
                    echo "alert('Password Gagal Diubah.');";
                    echo "window.location='" . $this->agent->referrer() . "';";
                    echo '</script>';
            }
        }else{
            redirect('user');
        }
    }

    public function ubah_foto_admin() {
        if($this->session->userdata('login_admin')){
          $id = $this->input->get('id');
          
          $simpan = $this->input->post('simpan');
          $foto = $_FILES['foto'];
          $nama_foto = str_replace(' ', '_', $foto['name']);

        //validasi gambar
          $config['upload_path'] = './resource/img/photo/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          // $config['max_size'] = '5024';
          // $config['max_width']  = '1024';
          // $config['max_height']  = '768';
          $config['overwrite'] = true;
          $this->load->library('upload');
          $this->upload->initialize($config);

          $data= array('foto' => $nama_foto);
          if($simpan=="Simpan"){
                  //ubah data siswa
                  $this->db->where('email', $id);
                  $this->db->update('admin', $data);
                  $this->upload->do_upload('foto');
                  echo '<script>';
                  echo "alert('Foto Berhasil Diubah.');";
                  echo "window.location='" . $this->agent->referrer() . "';";
                  echo '</script>';
              }else{
                  echo '<script>';
                  echo "alert('Foto Gagal Diubah.');";
                  echo "window.location='" . $this->agent->referrer() . "';";
                  echo '</script>';
          }
        }else{
          redirect('user'); 
        }
    }

    public function hapus_jadwal() {
        if($this->session->userdata('login_admin')) {
            $kelas         = $this->input->get('kelas');
            $semester      = $this->input->get('semester');
            $tahun_ajaran  = $this->input->get('tahun_ajaran');

            $this->m_admin->hapus_data_jadwal_by_id($kelas, $semester, $tahun_ajaran);
            echo '<script>';
            echo "alert('Jadwal Berhasil Dihapus.');";
            echo "window.location='" . site_url('admin/data_jadwal') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_nilai() {
        if($this->session->userdata('login_admin')) {
            $pelajaran      = $this->input->get('pelajaran');
            $kelas          = $this->input->get('kelas');
            $semester       = $this->input->get('semester');
            $tahun_ajaran   = $this->input->get('tahun_ajaran');
            
            $this->m_admin->hapus_data_nilai_by_id($pelajaran, $kelas, $semester, $tahun_ajaran);
            echo '<script>';
            echo "alert('Nilai Berhasil Dihapus.');";
            echo "window.location='" . site_url('admin/data_nilai') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_berita() {
        if($this->session->userdata('login_admin')) {
            $id=$this->uri->segment(3);
            $this->m_user->hapus_data_berita_by_id($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Berita');";
            echo "window.location='" . site_url('user') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_informasi() {
        if($this->session->userdata('login_admin')) {
            $id=$this->uri->segment(3);
            $this->m_user->hapus_data_informasi_by_id($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Informasi');";
            echo "window.location='" . site_url('user') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_tahun_ajaran() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_tahun_ajaran($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_tahun_ajaran') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_semester() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_semester($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_semester') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_kelas() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_kelas($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_kelas') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_hari() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_hari($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_hari') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_jam() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_jam($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_jam') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_pelajaran() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_pelajaran($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_pelajaran') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function hapus_data_ruang() {
        if($this->session->userdata('login_admin')) {
            $id = $this->input->get('id');
            $this->m_admin->hapus_data_ruang($id);
            echo '<script>';
            echo "alert('Berhasil Hapus Barang');";
            echo "window.location='" . site_url('admin/ubah_ruang') . "';";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

    public function tampil_data_jadwal() {
        if($this->session->userdata('login_admin')) {
            $id_admin = $this->session->userdata['login_admin']['email'];
            $data['admin']=$this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']  = 'Jadwal Pelajaran';
            $kelas          = $this->input->post('kelas');
            $semester       = $this->input->post('semester');
            $tahun_ajaran   = $this->input->post('tahun_ajaran');
            
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['hari'] = $this->m_admin->tampil_data_hari();
            $data['jam'] = $this->m_admin->tampil_data_jam();
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['ruang'] = $this->m_admin->tampil_data_ruang();
            $data['guru'] = $this->m_admin->tampil_data_guru();

            $tampilkan = $this->input->post('tampilkan');
            
            if($tampilkan == 'Tampilkan') {
                // $data['id_jadwal'] = $this->m_admin->tampil_data_id_jadwal_by_id($kelas,$semester,$tahun_ajaran);
                $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
                
                $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
                $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
                $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

                $data['slides']=$this->m_admin->tampil_data_slides();
                $this->load->view('base/header', $data);
                $this->body_admin('admin/data-jadwal', $data);
                $this->load->view('base/footer');
            }else{
                redirect('admin/data_jadwal');
            }
        }else{
            redirect('user');
        }
    }

    public function tampil_data_siswa() {
        if($this->session->userdata('login_admin')) {
            $id_admin = $this->session->userdata['login_admin']['email'];
            $data['admin']=$this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']  = 'Jadwal Pelajaran';
            $kelas          = $this->input->post('kelas');
            $semester       = $this->input->post('semester');
            $tahun_ajaran   = $this->input->post('tahun_ajaran');
            $tampilkan = $this->input->post('tampilkan');

            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();
            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            
            $data['total_data'] = $this->m_admin->hitung_data_siswa_by_id($kelas,$semester,$tahun_ajaran);

            if($tampilkan == 'Tampilkan') {
                $data['siswa'] = $this->m_admin->tampil_data_siswa_by_id($kelas,$semester,$tahun_ajaran);
                
                $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
                $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
                $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
                
                $data['slides']=$this->m_admin->tampil_data_slides();
                $this->load->view('base/header', $data);
                $this->body_admin('admin/data-nilai', $data);
                $this->load->view('base/footer');
            }else{
                redirect('admin/data_nilai');
            }
        }else{
            redirect('user');
        }
    }

    public function tampil_data_nilai_siswa() {
        if($this->session->userdata('login_admin')) {
            $id_admin = $this->session->userdata['login_admin']['email'];
            $data['admin']=$this->m_admin->tampil_data_admin_by_session($id_admin);
            $data['title']  = 'Nilai Siswa';
            $pelajaran      = $this->input->post('pelajaran');
            $kelas          = $this->input->post('kelas');
            $semester       = $this->input->post('semester');
            $tahun_ajaran   = $this->input->post('tahun_ajaran');        
            $tampilkan = $this->input->post('tampilkan');

            $data['pelajaran'] = $this->m_admin->tampil_data_pelajaran();
            $data['kelas'] = $this->m_admin->tampil_data_kelas();
            $data['semester'] = $this->m_admin->tampil_data_semester();
            $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

            $data['total_data'] = $this->m_admin->hitung_data_siswa_by_id($kelas,$semester,$tahun_ajaran);

            if($tampilkan == "Tampilkan") {
                $data['nama_pelajaran'] = $this->m_admin->tampil_data_pelajaran_by_id($pelajaran);
                $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
                $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
                $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);

                $data['slides']=$this->m_admin->tampil_data_slides();
                $data['nilai'] = $this->m_admin->tampil_data_nilai_siswa_by_id($pelajaran, $kelas, $semester, $tahun_ajaran);
                $this->load->view('base/header', $data);
                $this->body_admin('admin/data-nilai', $data);
                $this->load->view('base/footer');
            }else{
                redirect('admin/data_nilai');
            }
        }else{
            redirect('user');
        }
    }

    public function keluar_admin() {
        if($this->session->userdata('login_admin')) {
            $this->session->unset_userdata('login_admin');
            $this->session->unset_userdata('sess_kcfinder');
            echo '<script>';
            echo "alert('Berhasil Keluar');";
            // echo "window.location='" . $this->agent->referrer() . "'";
            echo "window.location='../user'";
            echo '</script>';
        }else{
            redirect('user');
        }
    }

}//end-class