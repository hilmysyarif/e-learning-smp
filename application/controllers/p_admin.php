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
            'foto'            => $this->input->post('foto'),
            'no_ktp'          => $no_ktp,
            'id_kelas'        => $this->input->post('kelas'),
            'id_semester'     => $this->input->post('semester'),
            'id_tahun_ajaran' => $this->input->post('tahun_ajaran')
            );
        $this->m_admin->tambah_data_siswa($data);
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

     if($tambah) {
            $this->db->select_max('id_jadwal'); //ambil data id_jadwal yang baru dimasukan/id_max
            $queryjadwal = $this->db->get('jadwal'); //ambil data di tabel jadwal
            $queryjadwal = $queryjadwal->row_array();
            $id_jadwal_terbaru = $queryjadwal['id_jadwal']; //mendapatkan id_jadwal
            for ($i=1; $i<=7; $i++) {
                $id_jam         = $this->input->post('jam_'.$i);
                $id_pelajaran   = $this->input->post('pelajaran_'.$i);
                $id_ruang       = $this->input->post('ruang_'.$i);
                $nik            = $this->input->post('guru_'.$i);
                if(!$id_jam)$id_jam=NULL;
                if(!$id_pelajaran)$id_pelajaran=NULL;
                if(!$id_ruang)$id_ruang=NULL;
                if(!$nik)$nik=NULL;
                if(!empty($id_jam) && !empty($id_pelajaran) && !empty($id_ruang) && !empty($nik)){

                    $data = array(
                        // 'id_detail_jadwal'  => $id,
                        'id_jam'            => $id_jam,
                        'id_pelajaran'      => $id_pelajaran,
                        'id_ruang'          => $id_ruang,
                        'nik'               => $nik,
                        'tglTambah'         => date('Y-m-d H:i:s')
                        );
                    $this->db->insert('detail_jadwal', $data); //insert $data ke tabel detail_jadwal
                    //get latest id detail jadwal                   
                    $id_detail_jadwal = $this->m_admin->get_latest_detail_jadwal();
                    $data = array();//reset array data
                    $data = array(
                        'id_kelas'          => $this->input->post('kelas'),
                        'id_semester'       => $this->input->post('semester'),
                        'id_tahun_ajaran'   => $this->input->post('tahun_ajaran'),
                        'id_hari'           => $this->input->post('hari')
                        );
                    $data['id_detail_jadwal'] = $id_detail_jadwal;
                    $this->m_admin->tambah_data_jadwal($data);//tambah data jadwal
                }//end if
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
            $this->load->view('base/header', $data);
            $this->body_admin('admin/jadwal', $data);
            $this->load->view('base/footer');
        }
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

    public function ubah_data_siswa() {
        $id = $this->input->get('id');

        $now = date('y-m-d h:i:s');
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

        $data['kelas'] = $this->m_admin->tampil_data_kelas();
        $data['semester'] = $this->m_admin->tampil_data_semester();
        $data['tahun_ajaran'] = $this->m_admin->tampil_data_tahun_ajaran();

        $kelas          = $this->input->post('kelas');
        $semester       = $this->input->post('semester');
        $tahun_ajaran   = $this->input->post('tahun_ajaran');

        $tampilkan = $this->input->post('tampilkan');
        
        if($tampilkan == 'Tampilkan') {
            // $data['jadwal'] = $this->m_admin->tampil_data_jadwal_by_id($kelas,$semester,$tahun_ajaran);
            $data['jadwal'] = $this->m_admin->tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran);

            $this->load->view('base/header', $data);
            $this->body_admin('admin/list-jadwal', $data);
            $this->load->view('base/footer');
        }
    }

}//end-class