<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_admin extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function tambah_data_wali($data) {
        $this->db->insert('wali', $data);
    }
    function ambil_data_wali_no_ktp_terbaru($tgl_upload) {
        $this->db->where('tgl_upload', $tgl_upload);
        $this->db->select('no_ktp');
        $query = $this->db->get('wali');
        
        $result = $query->row_array();
        return $result['no_ktp']; 
    }
    function ambil_data_wali_tgl_upload_terbaru() {
        $this->db->select_max('tgl_upload');
        $query = $this->db->get('wali');
        $result = $query->row_array();
        return $result['tgl_upload'];
    }
    function ambil_data_jadwal_id_jadwal_terbaru() {
        $this->db->select_max('id_jadwal');
        $query = $this->db->get('jadwal');
        $result = $query->row_array();
        return $result['id_jadwal'];
    }
    function tambah_data_berita($data) {
        $this->db->insert('berita', $data);
    }
    function tambah_data_siswa($data) {
        $this->db->insert('siswa', $data);
    }
    function tambah_data_guru($data) {
        $this->db->insert('guru', $data);
    }
    function tambah_data_tahun_ajaran($data) {
        $this->db->insert('tahun_ajaran', $data);
    }
    function tambah_data_semester($data) {
        $this->db->insert('semester', $data);
    }
    function tambah_data_kelas($data) {
        $this->db->insert('kelas', $data);
    }
    function tambah_data_hari($data) {
        $this->db->insert('hari', $data);
    }
    function tambah_data_jam($data) {
        $this->db->insert('jam', $data);
    }
    function tambah_data_pelajaran($data) {
        $this->db->insert('pelajaran', $data);
    }
    function tambah_data_ruang($data) {
        $this->db->insert('ruang', $data);
    }
    function tambah_data_jadwal($data) {
        $this->db->insert('jadwal', $data);
    }
    function tampil_data_admin_by_session($id_admin) {
        $this->db->where('email', $id_admin);
        $this->db->select('admin.email AS "email", admin.nama AS "nama", admin.password AS "password"');
        $this->db->from('admin');

        $query = $this->db->get();

        if($query->num_rows > 0){
            return $query->row_array();
        }else{
            // return array();
            return false;
        }
    }
    function cek_password_admin_by_id($id) {
        $this->db->where('email', $id);
        $this->db->select('password');
        $query = $this->db->get('admin');
        
        $result = $query->row_array();
        return $result['password'];
    }
    function tampil_data_tahun_ajaran() {
    	$this->db->order_by("tahun_ajaran", "desc"); 
    	$query = $this->db->get('tahun_ajaran');
    	if($query->num_rows()>0) {
            return $query->result_array();
        }else{
            return array();
      }
  }
  function tampil_data_semester() {
    $this->db->order_by("semester", "asc"); 
    $query = $this->db->get('semester');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_kelas() {
    $this->db->order_by("kelas", "asc"); 
    $query = $this->db->get('kelas');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_hari() {
    $this->db->order_by("hari", "asc"); 
    $query = $this->db->get('hari');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_jam() {
    $this->db->order_by("jam", "asc"); 
    $query = $this->db->get('jam');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_pelajaran() {
    $this->db->order_by("pelajaran", "asc"); 
    $query = $this->db->get('pelajaran');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_ruang() {
    $this->db->order_by("ruang", "asc"); 
    $query = $this->db->get('ruang');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_guru() {
    $this->db->order_by("nama", "asc"); 
    $query = $this->db->get('guru');
    if($query->num_rows()>0) {
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran) {
    $this->db->where('jadwal.id_kelas',$kelas);
    $this->db->where('jadwal.id_semester',$semester);
    $this->db->where('jadwal.id_tahun_ajaran',$tahun_ajaran);

    $this->db->select('hari.hari,jam.jam,ruang.ruang,kelas.kelas,pelajaran.pelajaran,guru.nama');
    $this->db->from('jadwal');
    $this->db->join('detail_jadwal','jadwal.id_jadwal=detail_jadwal.id_jadwal');
    $this->db->join('kelas','kelas.id_kelas=jadwal.id_kelas');
    $this->db->join('jam','jam.id_jam=detail_jadwal.id_jam');
    $this->db->join('ruang','ruang.id_ruang=detail_jadwal.id_ruang');
    $this->db->join('hari','hari.id_hari=jadwal.id_hari');
    $this->db->join('pelajaran','pelajaran.id_pelajaran=detail_jadwal.id_pelajaran');
    $this->db->join('guru','guru.nik=detail_jadwal.nik');
    
    $query = $this->db->get();
    
    if($query->num_rows>0){
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_siswa_by_id($kelas,$semester,$tahun_ajaran) {
    $this->db->where('siswa.id_kelas',$kelas);
    $this->db->where('siswa.id_semester',$semester);
    $this->db->where('siswa.id_tahun_ajaran',$tahun_ajaran);

    $this->db->select('siswa.nama, siswa.nis, kelas.kelas, semester.semester, tahun_ajaran.tahun_ajaran');
    $this->db->from('siswa');
    $this->db->join('kelas','kelas.id_kelas=siswa.id_kelas');
    $this->db->join('semester','semester.id_semester=siswa.id_semester');
    $this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran=siswa.id_tahun_ajaran');
    
    $query = $this->db->get();
    
    if($query->num_rows>0){
        return $query->result_array();
    }else{
        return array();
    }
}
function tampil_data_nilai_siswa_by_id($pelajaran, $kelas, $semester, $tahun_ajaran) {
    $this->db->where('nilai.id_pelajaran', $pelajaran);
    $this->db->where('nilai.id_kelas', $kelas);
    $this->db->where('nilai.id_semester', $semester);
    $this->db->where('nilai.id_tahun_ajaran', $tahun_ajaran);

    $this->db->select('nilai.nilai, siswa.nis, siswa.nama, pelajaran.pelajaran, kelas.kelas, semester.semester, tahun_ajaran.tahun_ajaran');
    $this->db->from('nilai');
    $this->db->join('pelajaran', 'pelajaran.id_pelajaran=nilai.id_pelajaran');
    $this->db->join('kelas', 'kelas.id_kelas=nilai.id_kelas');
    $this->db->join('semester', 'semester.id_semester=nilai.id_semester');
    $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran=nilai.id_tahun_ajaran');
    $this->db->join('siswa', 'siswa.nis=nilai.nis');

    $query = $this->db->get();

    if($query->num_rows>0){
        return $query->result_array();
    }else{
        return array();
    }
}
function hitung_data_siswa_by_id($kelas,$semester,$tahun_ajaran) {
    $this->db->where('siswa.id_kelas',$kelas);
    $this->db->where('siswa.id_semester',$semester);
    $this->db->where('siswa.id_tahun_ajaran',$tahun_ajaran);

    $this->db->select('siswa.nama, siswa.nis, kelas.kelas, semester.semester, tahun_ajaran.tahun_ajaran');
    $this->db->from('siswa');
    $this->db->join('kelas','kelas.id_kelas=siswa.id_kelas');
    $this->db->join('semester','semester.id_semester=siswa.id_semester');
    $this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran=siswa.id_tahun_ajaran');
    
    $query = $this->db->get();
    
    if($query->num_rows>0){
        return $query->num_rows();
    }else{
        return array();
    }
}
function tampil_data_pelajaran_by_id($pelajaran) {
    $this->db->where('id_pelajaran', $pelajaran);
    $this->db->select('id_pelajaran, pelajaran');
    $query = $this->db->get('pelajaran');
    if($query->num_rows>0){
        return $query->row_array();
    }
    // $result = $query->row_array();
    // if(!empty($result['pelajaran']))return $result['pelajaran'];
}
function tampil_data_kelas_by_id($kelas) {
    $this->db->where('id_kelas', $kelas);
    $this->db->select('id_kelas, kelas');
    $query = $this->db->get('kelas');
    if($query->num_rows>0){
        return $query->row_array();
    }
    // $result = $query->row_array();
    // if(!empty($result['kelas']))return $result['kelas'];
}
function tampil_data_semester_by_id($semester) {
    $this->db->where('id_semester', $semester);
    $this->db->select('id_semester, semester');
    $query = $this->db->get('semester');
    if($query->num_rows>0){
        return $query->row_array();
    }
    // $result = $query->row_array();
    // if(!empty($result['semester']))return $result['semester'];
}
function tampil_data_tahun_ajaran_by_id($tahun_ajaran) {
    $this->db->where('id_tahun_ajaran', $tahun_ajaran);
    $this->db->select('id_tahun_ajaran, tahun_ajaran');
    $query = $this->db->get('tahun_ajaran');
    if($query->num_rows>0){
        return $query->row_array();
    }
    // $result = $query->row_array();
    // if(!empty($result['tahun_ajaran']))return $result['tahun_ajaran'];
}
function ubah_data_tahun_ajaran($data) {
    // $this->db->where('id_tahun_ajaran', $data);
    $this->db->update('tahun_ajaran', $data);
}
function hapus_data_tahun_ajaran($id) {
    $this->db->where('id_tahun_ajaran', $id);
    $this->db->delete('tahun_ajaran');
}
function hapus_data_semester($id) {
    $this->db->where('id_semester', $id);
    $this->db->delete('semester');
}
function hapus_data_kelas($id) {
    $this->db->where('id_kelas', $id);
    $this->db->delete('kelas');
}
function hapus_data_hari($id) {
    $this->db->where('id_hari', $id);
    $this->db->delete('hari');
}
function hapus_data_jam($id) {
    $this->db->where('id_jam', $id);
    $this->db->delete('jam');
}
function hapus_data_pelajaran($id) {
    $this->db->where('id_pelajaran', $id);
    $this->db->delete('pelajaran');
}
function hapus_data_ruang($id) {
    $this->db->where('id_ruang', $id);
    $this->db->delete('ruang');
}


    function masuk_admin($id, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $id);
        // $this->db->where('password', MD5($password));
        $this->db->where('password', $password);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}//end-class