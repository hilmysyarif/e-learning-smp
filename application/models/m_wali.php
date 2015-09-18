<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_wali extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function tampil_data_nis_by_no_ktp($no_ktp) {
        $this->db->where('siswa.no_ktp', $no_ktp);
        $this->db->select('siswa.nis');
        $this->db->from('wali');
        $this->db->join('siswa', 'siswa.no_ktp=wali.no_ktp');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['nis'];
    }

    function tampil_data_kelas_by_no_ktp($no_ktp) {
        $this->db->where('siswa.no_ktp', $no_ktp);
        $this->db->select('siswa.id_kelas');
        $this->db->from('wali');
        $this->db->join('siswa', 'siswa.no_ktp=wali.no_ktp');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['id_kelas'];
    }

    function tampil_data_semester_by_no_ktp($no_ktp) {
        $this->db->where('siswa.no_ktp', $no_ktp);
        $this->db->select('siswa.id_semester');
        $this->db->from('wali');
        $this->db->join('siswa', 'siswa.no_ktp=wali.no_ktp');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['id_semester'];
    }

    function tampil_data_tahun_ajaran_by_no_ktp($no_ktp) {
        $this->db->where('siswa.no_ktp', $no_ktp);
        $this->db->select('siswa.id_tahun_ajaran');
        $this->db->from('wali');
        $this->db->join('siswa', 'siswa.no_ktp=wali.no_ktp');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['id_tahun_ajaran'];
    }

    function masuk_wali($id, $password) {
        $this->db->select('*');
        $this->db->from('wali');
        $this->db->where('no_ktp', $id);
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