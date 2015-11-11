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

    function ambil_data_siswa_foto_by_id($id) {
        $this->db->where('nis', $id);
        $this->db->select('siswa.foto');
        $query = $this->db->get('siswa');
        $result = $query->row_array();
        return $result['foto'];
    }

    function tampil_data_siswa($limit, $offset, $kata_kunci) {
        if(empty($offset)){
          $offset=0;
        }
        //jika ada pencarian
        if(!empty($kata_kunci)){
            $this->db->like('nama', $kata_kunci);
            $this->db->or_like('nis', $kata_kunci);
            $this->db->or_like('no_ktp', $kata_kunci);
        }
        $this->db->order_by('nis', 'DESC');
        $query = $this->db->get('siswa', $limit, $offset);
        if($query->num_rows()>0) {
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_siswa_by_id($id) {
        $this->db->where('nis', $id);
        $this->db->select('siswa.nis AS "nis", siswa.password AS "password_siswa", siswa.nama AS "nama", siswa.jenis_kelamin AS "jenis_kelamin", siswa.tempat_lahir AS "tempat_lahir", siswa.tgl_lahir AS "tgl_lahir", siswa.alamat AS "alamat", siswa.foto AS "foto", siswa.tahun_masuk AS "tahun_masuk", siswa.id_kelas AS "id_kelas", siswa.id_semester AS "id_semester", siswa.id_tahun_ajaran AS "id_tahun_ajaran", wali.no_ktp AS "no_ktp", wali.nama AS "nama_wali", wali.pekerjaan AS "pekerjaan", wali.email AS "email", wali.password AS "password_wali", wali.tlp AS "tlp", wali.hp AS "hp",kelas.kelas AS "kelas",semester.semester AS "semester", tahun_ajaran.tahun_ajaran AS "tahun_ajaran"');
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

    function tampil_data_siswa_by_session($id_siswa) {
        $this->db->where('nis', $id_siswa);
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

    function tampil_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran) {
        $this->db->where('nilai.nis', $id_siswa);
        $this->db->where('nilai.id_semester', $semester);
        $this->db->where('nilai.id_tahun_ajaran', $tahun_ajaran);
        $this->db->select('nilai.nilai, pelajaran.pelajaran');
        $this->db->from('nilai');
        $this->db->join('pelajaran', 'pelajaran.id_pelajaran=nilai.id_pelajaran');

        $query = $this->db->get();

        if($query->num_rows > 0){
            return $query->result_array();
        }else{
            return array();
            // return false;
        }
    }

    function hitung_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran) {
        $this->db->where('nilai.nis', $id_siswa);
        $this->db->where('nilai.id_semester', $semester);
        $this->db->where('nilai.id_tahun_ajaran', $tahun_ajaran);
        $this->db->select('nilai.nilai');
        $this->db->from('nilai');
        $this->db->join('pelajaran', 'pelajaran.id_pelajaran=nilai.id_pelajaran');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function jumlah_data_nilai_siswa_by_id($id_siswa, $semester, $tahun_ajaran) {
        $this->db->where('nilai.nis', $id_siswa);
        $this->db->where('nilai.id_semester', $semester);
        $this->db->where('nilai.id_tahun_ajaran', $tahun_ajaran);
        $this->db->select_avg('nilai.nilai');
        $this->db->from('nilai');
        $this->db->join('pelajaran', 'pelajaran.id_pelajaran=nilai.id_pelajaran');
        $query = $this->db->get();
        // return $query->num_rows();
        return $query->row_array();
    }

    function hapus_data_siswa($id) {
        $this->db->where('nis', $id);
        $this->db->delete('siswa');
    }

    function masuk_siswa($id, $password) {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nis', $id);
        $this->db->where('password', md5($password));

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}//end-class