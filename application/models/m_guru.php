<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_guru extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function tambah_data_materi($data) {
        $this->db->insert('materi_pelajaran', $data);
    }

    function tambah_data_elearning($data) {
        $this->db->insert('materi_umum', $data);
    }

    function tambah_data_nilai($data) {
        $this->db->insert('data_nilai', $data);
    }

    function tampil_data_elearning($limit, $offset) {
        if(empty($offset)){
          $offset=0;
        }
        $this->db->order_by("tgl_upload", "desc");
        $query = $this->db->get('materi_umum', $limit, $offset);
        if($query->num_rows>0) {
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_elearning_by_id($id) {
        $this->db->where('id_materi_umum', $id);
        $this->db->select('materi_umum.id_materi_umum, materi_umum.tgl_upload, materi_umum.judul, materi_umum.file ,guru.nama, pelajaran.id_pelajaran, pelajaran.pelajaran');
        $this->db->from('materi_umum');
        $this->db->join('guru', 'guru.nik=materi_umum.nik');
        $this->db->join('pelajaran', 'pelajaran.id_pelajaran=materi_umum.id_pelajaran');

        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query->row_array();
        }else{
            return array();
        }
    }

    function tampil_data_nilai_nik_by_id($id) {
        $this->db->where('id_data_nilai', $id);
        $this->db->select('data_nilai.nik');
        $query = $this->db->get('data_nilai');
        $result = $query->row_array();
        return $result['nik'];
    }

    function tampil_data_elearning_nik_by_id($id) {
        $this->db->where('id_materi_umum', $id);
        $this->db->select('materi_umum.nik');
        $query = $this->db->get('materi_umum');
        $result = $query->row_array();
        return $result['nik'];
    }

    function tampil_data_materi_nik_by_id($id) {
        $this->db->where('id_materi_pelajaran', $id);
        $this->db->select('materi_pelajaran.nik');
        $query = $this->db->get('materi_pelajaran');
        $result = $query->row_array();
        return $result['nik'];
    }

    function tampil_data_materi_by_id($nik,$semester,$tahun_ajaran) {
        $this->db->where('materi_pelajaran.nik',$nik);
        $this->db->where('materi_pelajaran.id_semester',$semester);
        $this->db->where('materi_pelajaran.id_tahun_ajaran',$tahun_ajaran);

        $this->db->select('materi_pelajaran.id_materi_pelajaran, materi_pelajaran.file, materi_pelajaran.judul, materi_pelajaran.tgl_upload, guru.nama, pelajaran.pelajaran, kelas.kelas');
        $this->db->from('materi_pelajaran');
        $this->db->join('guru','guru.nik=materi_pelajaran.nik');
        $this->db->join('pelajaran','pelajaran.id_pelajaran=materi_pelajaran.id_pelajaran');
        $this->db->join('kelas','kelas.id_kelas=materi_pelajaran.id_kelas');

        $query = $this->db->get();

        if($query->num_rows>0){
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_nilai_by_id($nik,$semester,$tahun_ajaran) {
        $this->db->where('data_nilai.nik',$nik);
        $this->db->where('data_nilai.id_semester',$semester);
        $this->db->where('data_nilai.id_tahun_ajaran',$tahun_ajaran);

        $this->db->select('data_nilai.id_data_nilai, data_nilai.file, data_nilai.judul, data_nilai.tgl_upload, guru.nama');
        $this->db->from('data_nilai');
        $this->db->join('guru','guru.nik=data_nilai.nik');

        $query = $this->db->get();

        if($query->num_rows>0){
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_detail_materi_by_id($id){
        $this->db->where('id_materi_pelajaran', $id);
        $this->db->from('materi_pelajaran');
        $this->db->select('materi_pelajaran.id_materi_pelajaran, materi_pelajaran.judul, materi_pelajaran.file, materi_pelajaran.tgl_upload, guru.nama AS nama_guru, pelajaran.id_pelajaran, pelajaran.pelajaran, kelas.id_kelas, kelas.kelas, semester.id_semester, semester.semester, tahun_ajaran.id_tahun_ajaran, tahun_ajaran.tahun_ajaran');

        $this->db->join('guru','guru.nik=materi_pelajaran.nik');
        $this->db->join('pelajaran','pelajaran.id_pelajaran=materi_pelajaran.id_pelajaran');
        $this->db->join('kelas','kelas.id_kelas=materi_pelajaran.id_kelas');
        $this->db->join('semester','semester.id_semester=materi_pelajaran.id_semester');
        $this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran=materi_pelajaran.id_tahun_ajaran');
        $query = $this->db->get();

        return $query->row_array();
    }

    function tampil_data_detail_nilai_by_id($id){
        $this->db->where('id_data_nilai', $id);
        $this->db->from('data_nilai');
        $this->db->select('data_nilai.id_data_nilai, data_nilai.judul, data_nilai.file, data_nilai.tgl_upload, guru.nama AS nama_guru, semester.id_semester, semester.semester, tahun_ajaran.id_tahun_ajaran, tahun_ajaran.tahun_ajaran');

        $this->db->join('guru','guru.nik=data_nilai.nik');
        $this->db->join('semester','semester.id_semester=data_nilai.id_semester');
        $this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran=data_nilai.id_tahun_ajaran');
        $query = $this->db->get();

        return $query->row_array();
    }

    function tampil_data_file_data_nilai_by_id($id) {
        $this->db->where('id_data_nilai', $id);
        $this->db->select('file');
        $query = $this->db->get('data_nilai');
        $result = $query->row_array();
        return $result['file'];
    }

    function tampil_data_detail_materi($nik) {
        $this->db->where('id_kelas', $kelas);
        $this->db->where('id_pelajaran', $pelajaran);
        $this->db->select('*');

        
        $query = $this->db->get('materi_pelajaran');
        if($query->num_rows()>0) {
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_guru() {
        $this->db->order_by('tgl_upload', 'DESC');
        $query = $this->db->get('guru');
        if($query->num_rows()>0) {
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_guru_by_id($id) {
        $this->db->where('nik', $id);
        $this->db->select('*');
        $this->db->from('guru');

        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query->row_array();
        }else{
            return array();
        }
    }

    function tampil_data_guru_by_session($id_guru) {
        $this->db->where('nik', $id_guru);
        $this->db->select('guru.nik AS "nik", guru.nama AS "nama", guru.password AS "password", guru.jenis_kelamin AS "jenis_kelamin", guru.tempat_lahir AS "tempat_lahir", guru.tgl_lahir AS "tgl_lahir", guru.alamat AS "alamat", guru.foto AS "foto", guru.email AS "email", guru.tlp AS "tlp", guru.hp AS "hp", guru.pengumuman AS "pengumuman", guru.tgl_upload AS "tgl_upload", guru.tgl_edit AS "tgl_edit"');
        $this->db->from('guru');

        $query = $this->db->get();

        if($query->num_rows > 0){
            return $query->row_array();
        }else{
            // return array();
            return false;
        }
    }

    function tampil_nik_guru_by_id($id) {
        $this->db->where('nik', $id);
        $this->db->select('nik');
        $query = $this->db->get('guru');
        
        $result = $query->row_array();
        return $result['nik'];
    }

    function cek_password_guru_by_id($id) {
        $this->db->where('nik', $id);
        $this->db->select('password');
        $query = $this->db->get('guru');
        
        $result = $query->row_array();
        return $result['password'];
    }

    function hapus_data_guru($id) {
        $this->db->where('nik', $id);
        $this->db->delete('guru');
    }

    function masuk_guru($id, $password) {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->where('nik', $id);
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