<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_user extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function cari_berita($id, $limit, $offset) {
        $this->db->order_by('tgl_upload', 'desc');
        $this->db->like('berita.judul', $id, 'both');
        $this->db->like('berita.isi', $id, 'both');
        $this->db->select('*');
        $query = $this->db->get('berita', $limit, $offset);
        if($query->num_rows>0){
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tambah_data_informasi($data) {
    	$this->db->insert('informasi', $data);
    }

    function tampil_data_informasi($limit, $offset, $kata_kunci) {
        if(empty($offset)){
          $offset=0;
        }
        //jika ada pencarian
        if (!empty($kata_kunci)) {
            $this->db->like('judul', $kata_kunci);
        }
        
        $this->db->order_by("tgl_upload", "desc"); 
        $query = $this->db->get('informasi', $limit, $offset);
        if($query->num_rows>0){
            return $query->result_array();
        }else{
            return array();
        }
    }

    function tampil_data_berita($limit, $offset, $kata_kunci) {
        if(empty($offset)){
          $offset=0;
        }
        if(!empty($kata_kunci)){
            $this->db->like('isi', $kata_kunci);
            $this->db->or_like('judul', $kata_kunci);
        }
    	$this->db->order_by("tgl_upload", "desc"); 
	    $query = $this->db->get('berita', $limit, $offset);
	    if($query->num_rows>0){
	    	return $query->result_array();
	    }else{
	    	return array();
	    }
    }

    function tampil_data_informasi_by_id($id) {
    	$this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('informasi');

        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query->row_array();
        }else{
            return array();
        }    	
    }

    function tampil_data_berita_by_id($id) {
    	$this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('berita');

        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query->row_array();
        }else{
            return array();
        }
    }

    function hapus_data_berita_by_id($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('berita');
    }

    function hapus_data_informasi_by_id($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('informasi');
    }

}//end-class