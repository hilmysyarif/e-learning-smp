<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_siswa extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function ambil_data_siswa_no_ktp_terbaru($tgl_edit) {
        $this->db->where('tgl_edit', $tgl_edit);
        $this->db->select('no_ktp');
        $query = $this->db->get('siswa');
        $result = $query->row_array();
        return $result['no_ktp'];
    }

    function ambil_data_siswa_tgl_edit_terbaru() {
        $this->db->select_max('tgl_edit');
        $query = $this->db->get('siswa');
        $result = $query->row_array();
        return $result['tgl_edit'];
    }

    function tampil_data_siswa() {
        $this->db->order_by('nis', 'DESC');
        $query = $this->db->get('siswa');
        if($query->num_rows()>0) {
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_siswa_by_id($id) {
        $this->db->where('nis', $id);
        $this->db->select('siswa.nis AS "nis", siswa.nama AS "nama", siswa.jenis_kelamin AS "jenis_kelamin", siswa.tempat_lahir AS "tempat_lahir", siswa.tgl_lahir AS "tgl_lahir", siswa.alamat AS "alamat", siswa.foto AS "foto", siswa.tahun_masuk AS "tahun_masuk", siswa.id_kelas AS "id_kelas", siswa.id_semester AS "id_semester", siswa.id_tahun_ajaran AS "id_tahun_ajaran", wali.no_ktp AS "no_ktp", wali.nama AS "nama_wali", wali.pekerjaan AS "pekerjaan", wali.email AS "email", wali.tlp AS "tlp", wali.hp AS "hp",kelas.kelas AS "kelas",semester.semester AS "semester", tahun_ajaran.tahun_ajaran AS "tahun_ajaran"');
        $this->db->from('siswa');
        $this->db->join('wali', 'wali.no_ktp=siswa.no_ktp');
        $this->db->join('kelas', 'kelas.id_kelas=siswa.id_kelas');
        $this->db->join('semester', 'semester.id_semester=siswa.id_semester');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran=siswa.id_tahun_ajaran');

        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query->row_array();
        }else{
            return array();
        }
    }

    function tampil_data_siswa_by_session() {
        $id = $this->session->userdata['login_siswa']['nis'];
        $this->db->where('nis', $id);
        $this->db->select('siswa.nis AS "nis", siswa.nama AS "nama", siswa.jenis_kelamin AS "jenis_kelamin", siswa.tempat_lahir AS "tempat_lahir", siswa.tgl_lahir AS "tgl_lahir", siswa.alamat AS "alamat", siswa.foto AS "foto", wali.no_ktp AS "no_ktp", wali.nama AS "nama_wali", wali.pekerjaan AS "pekerjaan", wali.email AS "email", wali.tlp AS "tlp", wali.hp AS "hp"');
        $this->db->from('siswa');
        $this->db->join('wali', 'wali.no_ktp=siswa.no_ktp');

        $query = $this->db->get();

        if($query->num_rows > 0){
            return $query->row_array();
        }else{
            // return array();
            return false;
        }
    }

    function hapus_data_siswa($id) {
        $this->db->where('nis', $id);
        $this->db->delete('siswa');
    }

    function masuk_siswa($id, $password) {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nis', $id);
        $this->db->where('password', MD5($password));

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}//end-class