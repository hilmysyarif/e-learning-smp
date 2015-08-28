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
function get_latest_detail_jadwal()
{
    $this->db->order_by('id_detail_jadwal','DESC');
    $this->db->select('id_detail_jadwal');
    $query = $this->db->get('detail_jadwal');
    $result = $query->row_array();
    return $result['id_detail_jadwal'];
}
function tampil_data_detail_jadwal_by_id($kelas,$semester,$tahun_ajaran) {
    $this->db->where('jadwal.id_kelas',$kelas);
    $this->db->where('jadwal.id_semester',$semester);
    $this->db->where('jadwal.id_tahun_ajaran',$tahun_ajaran);

    $this->db->select('hari.hari,jam.jam,ruang.ruang,kelas.kelas,pelajaran.pelajaran,guru.nama');
    $this->db->from('jadwal');
    $this->db->join('detail_jadwal','jadwal.id_detail_jadwal=detail_jadwal.id_detail_jadwal');
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

}//end-class