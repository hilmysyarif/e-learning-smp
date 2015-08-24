<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_guru extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
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