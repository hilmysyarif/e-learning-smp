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
        echo "window.location='" . site_url('admin') . "'";
        echo '</script>';
    }

    public function tambah_data_berita() {
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

        $this->m_admin->tambah_data_berita($data);
        // setelah data tersimpan foto di upload ke folder
        $this->upload->do_upload('gambar');
        $sukses = 'Data Berhasil Disimpan';
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin') . "'";
        echo '</script>';
    }

    public function tambah_data_guru() {
        $string = '!@()8&^^%$#AsfsRTdWGaGghKOplkencKHBQKLSKNMKXCd&$*^032145876901234523567895323789012627898746090302983SKZBCJ7648595389090';
        $panjstr = 6;//jumlah karakter yang akan muncul
        $txtlt = strlen($string)-1;
        $pass = '';
        for($i=1; $i<=$panjstr; $i++){
         $pass .= $string[rand(0, $txtlt)];
        }

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
        $password        = $pass;
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
            'password' => $password,
            'foto' => $nama_foto,
            'tgl_upload' => $now
            );
        if($simpan=="Simpan") {
            $this->m_admin->tambah_data_guru($data);
            // setelah data tersimpan foto di upload ke folder
            $this->upload->do_upload('foto');
            $sukses = 'Data Berhasil Disimpan';
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/siswa') . "'";
            echo '</script>';
        }
    }

    public function tambah_data_siswa() {
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
     $password = $pass;
     $foto = $_FILES['foto'];
     $nama_foto = str_replace(' ', '_', $foto['name']);//merename spasi gambar menjadi underscores
     $data['kelas'] = $this->m_admin->tampil_data_kelas();
     $data['semester'] = $this->m_admin->tampil_data_semester();
     $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

     $data = array(
        'no_ktp'    => $this->input->post('no_ktp'),
        // 'password'  => md5($password),
        'password'  => $password,
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
            'password'        => $password,
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
        echo "window.location='" . site_url('admin/siswa') . "'";
        echo '</script>';
    }else{
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

        $data['nis']            = $this->input->post('nis');
        $data['password']       = $this->input->post('password');
        $data['nama']           = $this->input->post('nama');
        $data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
        $data['tempat_lahir']   = $this->input->post('tempat_lahir');
        $data['tgl_lahir']      = $this->input->post('tgl_lahir');
        $data['alamat']         = $this->input->post('alamat');
        $data['foto']           = $this->input->post('foto');
        $gagal                  = 'Data Gagal Disimpan';
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
            // jika menggunakan redirect atau link post akan hilang
        $data['title']='Siswa.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/siswa', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_tahun_ajaran() {
    $text = '0321458769012345235678953237890126278987460903029837648595389090';
        $panj = 4;//jumlah karakter yang akan muncul
        $txtl = strlen($text)-1;
        $result = '';
        for($i=1; $i<=$panj; $i++){
         $result .= $text[rand(0, $txtl)];
     }

     $id_tahun_ajaran    = $result;
     $tambah             = $this->input->post('tambah');
     $sukses             = 'Data Berhasil Disimpan';
     $gagal              = 'Data Gagal Disimpan';
     $data = array(
        'id_tahun_ajaran'   => $id_tahun_ajaran,
        'tahun_ajaran'      => $this->input->post('tahun_ajaran'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_tahun_ajaran($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_semester() {
    $text = '0321458769012345235678953237890126278987460903029837648595389090';
        $panj = 4;//jumlah karakter yang akan muncul
        $txtl = strlen($text)-1;
        $result = '';
        for($i=1; $i<=$panj; $i++){
         $result .= $text[rand(0, $txtl)];
     }

     $id_semester        = $result;
     $tambah             = $this->input->post('tambah');
     $sukses             = 'Data Berhasil Disimpan';
     $gagal              = 'Data Gagal Disimpan';
     $data = array(
        'id_semester'   => $id_semester,
        'semester'      => $this->input->post('semester'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_semester($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_kelas() {
    $text = '0321458769012345235678953237890126278987460903029837648595389090';
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
     $data = array(
        'id_kelas'   => $id,
        'kelas'      => $this->input->post('kelas'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_kelas($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_hari() {
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
     $data = array(
        'id_hari'   => $id,
        'hari'      => $this->input->post('hari'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_hari($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_jam() {
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
     $data = array(
        'id_jam'   => $id,
        'jam'      => $this->input->post('jam'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_jam($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_pelajaran() {
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
     $data = array(
        'id_pelajaran'   => $id,
        'pelajaran'      => $this->input->post('pelajaran'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_pelajaran($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

public function tambah_data_ruang() {
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
     $data = array(
        'id_ruang'   => $id,
        'ruang'      => $this->input->post('ruang'),
        );
     if(isset($tambah)) {
        $this->m_admin->tambah_data_ruang($data);
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin/pengaturan_data') . "'";
        echo '</script>';
    }else{
        echo '<script>';
        echo "alert('".$gagal."');";
        echo '</script>';
        $data['title']='Pengaturan.';
        $this->load->view('base/header', $data);
        $this->body_admin('admin/pengaturan_data', $data);
        $this->load->view('base/footer');
    }
}

    public function tambah_data_jadwal() {
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
            echo "window.location='" . site_url('admin/jadwal') . "'";
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
            $this->body_admin('admin/jadwal', $data);
            $this->load->view('base/footer');
        }
    }

    public function tambah_data_nilai_siswa() {
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
                $this->db->insert('nilai', $data);
            }//end for
            echo '<script>';
            echo "alert('".$sukses."');";
            echo "window.location='" . site_url('admin/nilai') . "'";
            echo '</script>';
        }
    }

    public function ubah_data_nilai_siswa() {
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
            echo "window.location='" . site_url('admin/list_nilai') . "'";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('".$gagal."');";
            echo "window.location='" . site_url('admin/list_nilai') . "'";
            echo '</script>';
        }
    }

    public function ubah_data_berita() {
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
            'tgl_edit' => $now,
            'gambar' => $nama_gambar
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

        $this->db->where('id', $id);
        $this->db->update('berita', $data);

        // setelah data tersimpan foto di upload ke folder
        $this->upload->do_upload('gambar');
        $sukses = 'Data Berhasil Diubah';
        echo '<script>';
        echo "alert('".$sukses."');";
        echo "window.location='" . site_url('admin') . "'";
        echo '</script>';
    }

    public function ubah_data_informasi() {
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
        echo "window.location='" . site_url('admin') . "'";
        echo '</script>';
    }

    public function ubah_data_tahun_ajaran() {
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
    }

    public function ubah_data_semester() {
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
    }

    public function ubah_data_kelas() {
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
    }

    public function ubah_data_hari() {
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
    }

    public function ubah_data_jam() {
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
    }

    public function ubah_data_pelajaran() {
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
    }

    public function ubah_data_ruang() {
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
    }

    public function ubah_data_guru() {
        $id = $this->input->get('id');

        $now = date('y-m-d h:i:s');
        // $foto = $_FILES['foto'];
        // $nama_foto = str_replace(' ', '_', $foto['name']);
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
        // $config['upload_path'] = './resource/img/photo/';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // // $config['max_size'] = '5024';
        // // $config['max_width']  = '1024';
        // // $config['max_height']  = '768';
        // $config['overwrite'] = true;
        // $this->load->library('upload');
        // $this->upload->initialize($config);

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
            // 'foto' => $nama_foto,
            'tgl_edit' => $now
            );

        if($ubah=="Ubah"){
            //ubah data siswa
            $this->db->where('nik', $id);
            $this->db->update('guru', $data);
            // $this->upload->do_upload('foto');
            echo '<script>';
            echo "alert('Guru Berhasil Diubah.');";
            echo "window.location='" . $this->agent->referrer() . "';";
            echo '</script>';
        }else{
            $this->m_guru->hapus_data_guru($id);
            echo '<script>';
            echo "alert('Guru Berhasil Dihapus.');";
            echo "window.location='" . site_url('admin/list_guru') . "';";
            echo '</script>';
        }
    }

    public function ubah_data_siswa() {
        $id = $this->input->get('id');

        $now = date('y-m-d h:i:s');
        // $foto = $_FILES['foto'];
        // $nama_foto = str_replace(' ', '_', $foto['name']);
        $nis        = $this->input->post('nis');
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
        $telephone        = $this->input->post('telephone');
        $handphone        = $this->input->post('handphone');
        $kelas        = $this->input->post('kelas');
        $semester        = $this->input->post('semester');
        $tahun_ajaran        = $this->input->post('tahun_ajaran');
        $ubah = $this->input->post('ubah');
        $hapus = $this->input->post('hapus');

        //validasi gambar
        // $config['upload_path'] = './resource/img/photo/';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // // $config['max_size'] = '5024';
        // // $config['max_width']  = '1024';
        // // $config['max_height']  = '768';
        // $config['overwrite'] = true;
        // $this->load->library('upload');
        // $this->upload->initialize($config);

        $data_siswa = array(
            'nis' => $nis,
            'nama'=> $nama,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'tahun_masuk' => $tahun_masuk,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'id_kelas' => $kelas,
            'id_semester' => $semester,
            'id_tahun_ajaran' => $tahun_ajaran,
            // 'foto' => $nama_foto,
            'tgl_edit' => $now
            );
        $data_wali = array(
            'no_ktp' => $no_ktp,
            'nama' => $nama_wali,
            'pekerjaan' => $pekerjaan,
            'email' => $email,
            'tlp' => $telephone,
            'hp' => $handphone
            );

        if($ubah=="Ubah"){
            //ubah data siswa
            $this->db->where('nis', $id);
            $this->db->update('siswa', $data_siswa);
            // $this->upload->do_upload('foto');
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
            echo "window.location='" . site_url('admin/list_siswa') . "';";
            echo '</script>';
        }
    }

    public function ubah_email_admin() {
        $email = $this->input->post('email');
        $simpan = $this->input->post('simpan');
        $data = array('email' => $email );
        if($simpan == "Simpan") {
            $this->db->update('admin', $data);
            echo '<script>';
            echo "alert('Email Berhasil Diubah.');";
            echo "window.location='" . $this->agent->referrer() . "';";
            echo '</script>';
        }else{
            echo '<script>';
            echo "alert('Email Gagal Diubah.');";
            echo "window.location='" . $this->agent->referrer() . "';";
            echo '</script>';
        }
    }

    public function ubah_password_admin() {
    $id=$this->input->get('id');
    $password_lama = $this->input->post('password_lama');
    $password_baru = $this->input->post('password_baru');

    $this->form_validation->set_rules('password_lama', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password_baru', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password_baru]|xss_clean');
    $run = $this->form_validation->run();
    $true = $run == TRUE;

    $data = array('password' => $password_baru);
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
  }

    public function hapus_berita() {
        $id=$this->uri->segment(3);
        $this->m_user->hapus_data_berita_by_id($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Berita');";
        echo "window.location='" . site_url('user') . "';";
        echo '</script>';
    }

    public function hapus_informasi() {
        $id=$this->uri->segment(3);
        $this->m_user->hapus_data_informasi_by_id($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Informasi');";
        echo "window.location='" . site_url('user') . "';";
        echo '</script>';
    }

    public function hapus_data_tahun_ajaran() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_tahun_ajaran($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_tahun_ajaran') . "';";
        echo '</script>';
    }

    public function hapus_data_semester() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_semester($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_semester') . "';";
        echo '</script>';
    }

    public function hapus_data_kelas() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_kelas($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_kelas') . "';";
        echo '</script>';
    }

    public function hapus_data_hari() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_hari($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_hari') . "';";
        echo '</script>';
    }

    public function hapus_data_jam() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_jam($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_jam') . "';";
        echo '</script>';
    }

    public function hapus_data_pelajaran() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_pelajaran($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_pelajaran') . "';";
        echo '</script>';
    }

    public function hapus_data_ruang() {
        $id = $this->input->get('id');
        $this->m_admin->hapus_data_ruang($id);
        echo '<script>';
        echo "alert('Berhasil Hapus Barang');";
        echo "window.location='" . site_url('admin/ubah_ruang') . "';";
        echo '</script>';
    }

    public function tampil_data_jadwal() {
        $kelas          = $this->input->post('kelas');
        $semester       = $this->input->post('semester');
        $tahun_ajaran   = $this->input->post('tahun_ajaran');
        
        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();


        $tampilkan = $this->input->post('tampilkan');
        
        if($tampilkan == 'Tampilkan') {
            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);
            
            $data['nama_kelas'] = $this->m_admin->tampil_data_kelas_by_id($kelas);
            $data['nama_semester'] = $this->m_admin->tampil_data_semester_by_id($semester);
            $data['nama_tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran_by_id($tahun_ajaran);
            
            $this->load->view('base/header', $data);
            $this->body_admin('admin/list-jadwal', $data);
            $this->load->view('base/footer');
        }
    }

    public function tampil_data_siswa() {
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
            
            $this->load->view('base/header', $data);
            $this->body_admin('admin/nilai', $data);
            $this->load->view('base/footer');
        }
    }

    public function tampil_data_nilai_siswa() {
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

            $data['siswa'] = $this->m_admin->tampil_data_nilai_siswa_by_id($pelajaran, $kelas, $semester, $tahun_ajaran);
            $this->load->view('base/header', $data);
            $this->body_admin('admin/list-nilai', $data);
            $this->load->view('base/footer');
        }
    }

    public function keluar_admin() {
        $this->session->unset_userdata('login_admin');
        echo '<script>';
        echo "alert('Berhasil Keluar');";
        // echo "window.location='" . $this->agent->referrer() . "'";
        echo "window.location='../user'";
        echo '</script>';
    }

}//end-class