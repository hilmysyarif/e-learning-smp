<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_admin extends CI_Model {

    function __construct() {
        parent::__construct();
        // $this->load->database();
    }

    function masukkan_data_siswa() {

        $this->tgl_daftar = date("Y-m-d H:i:s");;
        
    	// $this->id_tahun_ajaran = date("Y");;

        $this->nis = $this->input->post('nis');
        $this->password = $this->input->post('password');
        $this->nama = $this->input->post('nama');
        $this->tempat_lahir = $this->input->post('tempat_lahir');
        $this->tgl_lahir = $this->input->post('tgl_lahir');
        $this->jenis_kelamin = $this->input->post('jenis_kelamin');
        $this->alamat = $this->input->post('alamat');
        $this->nama_ortu = $this->input->post('nama_ortu');
        $this->pekerjaan = $this->input->post('pekerjaan');
        $this->no_ktp = $this->input->post('no_ktp');
        $this->telepon = $this->input->post('telepon');
        $this->handphone = $this->input->post('handphone');

        $this->db->insert('siswa', $this);

    }

}//end-class