<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_guru extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
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

    function hapus_data_guru($id) {
        $this->db->where('nik', $id);
        $this->db->delete('guru');
    }

    function masuk_guru($id, $password) {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->where('nik', $id);
        $this->db->where('password', MD5($password));

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}//end-class